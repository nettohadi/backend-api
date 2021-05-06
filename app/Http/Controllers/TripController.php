<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TripController extends Controller
{
    public function index($userId){
        return Trip::byUserId($userId)->with('images')->orderBy('date','asc')->get();
    }

    public function getNewUser(){
        $newUserId = Str::uuid()->toString();
        return [
            'user_id' => $newUserId
        ];
    }

    public function create(){
        $input = request()->except(['Images']);
        $imageArray = request()->only(['Images']) ?? [];
        $imageArray = Arr::flatten($imageArray);

        try {
            $trip = Trip::whereUserId($input['user_id'] ?? '')->whereId($input['Id'] ?? '')->first();

            if($trip) {
                $result = true;
                //$result = $trip->update($input);
                $successMsg = "Trip updated succesfully";
                $failMessage = "Failed to update a trip";
            }else{
                $trip = Trip::create($input);
                /** if created successfully, save images **/
                $images = $this->initImages($imageArray);
                ($trip && count($imageArray) > 0) && $trip->images()->saveMany($images);
                $result = $trip != null;
                $successMsg = "Trip created succesfully";
                $failMessage = "Failed to create a trip";
            }

            $res =  [
                'status' => $result,
                'message' => $result ? $successMsg : $failMessage,
                'data' =>  $trip->toArray()
            ];

            return $res;
        }catch (e $ex){
            return $ex;
        }


    }

    private function initImages(array $imageArray){
        $images = [];
        foreach ($imageArray as $item) {
            $image = new Image();
            $image->url = $item;
            $images[] = $image;
        }
        return $images;
    }

    public function remove(){
        $request = request()->all();

        $trip = Trip::whereUserId($request['user_id'] ?? '')->whereId($request['Id'] ?? '')->first();

        if($trip) {
            $result = $trip->delete();
            $message = 'Trip deleted';
        }else{
            $result = 0;
            $message = 'Trip not found';
        }

        return [
            'status' => $result,
            'message' => $result ? $message : 'Fail to delete'
        ];

    }

    public function update(){
        $request = request()->all();

        $validator = Validator::make(request()->all(), [
            'date' => 'date_format:Y-m-d',
        ]);

        if($validator->fails()){
            return [
                'status' => false,
                'message' => 'Date format must be Y-m-d, ex : '. Carbon::now()->format('Y-m-d')
            ];
        }

        $trip = Trip::whereUserId($request['user_id'] ?? '')->whereId($request['Id'] ?? '')->first();

        if($trip){
            $result = $trip->update(request()->only(['date','time']));
            $message = 'updated successfully';
        }else{
            $result = false;
            $message = 'user_id and Id combination does not match any record in our database';
        }

        return [
            'status' => $result,
            'message' => $message
        ];
    }


}
