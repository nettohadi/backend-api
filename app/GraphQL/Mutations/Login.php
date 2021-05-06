<?php

namespace App\GraphQL\Mutations;

use App\GraphQL\Exceptions\CustomException;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Login
{
    public function resolve($rootValue, array $args): array
    {
        $user = User::findByEmail($args['email']);

        if(!$user) throw new CustomException('User with specified email does not exist');
        if(!$user->checkPassword($args['password'])) throw new CustomException('Password incorrect');

        $token = $user->createToken('device_x')->plainTextToken;
        return ['user' => $user,'access_token' => $token];
    }

    public function revoke($rootValue, array $args): array
    {
        $result = true;

        if(Auth::user()){
            $result = Auth::user()->currentAccessToken()->delete();
        }

        $response['status'] = $result;
        $response['message'] = $result ? 'Signing out is successful' : 'Fail to sign out';

        return $response;
    }
}
