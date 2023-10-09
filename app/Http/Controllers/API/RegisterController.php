<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Rules\CheckAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends BaseController
{

    public function index()
    {
        $user = User::all();

        return $this->sendResponse($user, 'List Data User');
    }
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', new CheckAuth],
            'email' => ['required', 'email', new CheckAuth],
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $token = $user->createToken('MyApp')->plainTextToken;
        $user->update(['token' => $token]);

        $success['token'] = $token;
        $success['name'] = $user->name;

        return $this->sendResponse($success, 'User register successfully.');
    }


    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['name'] = $user->name;

            if (!$user->token) {
                $token = $user->createToken('MyApp')->plainTextToken;
                $user->update(['token' => $token]);
                $success['token'] = $token;
            } else {
                $success['token'] = $user->token;
            }

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }
}
