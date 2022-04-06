<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $auth = Auth::User(); 
            //Crear token sin guardarlo dentro de corchetes
            $success ['token'] =  $auth->createToken('LaravelSanctumAuth')->plainTextToken; 
            $success['name'] =  $auth->name;
   
            return $this->handleResponse($success, 'User logged-in!');
        } 
        else{ 
            return $this->handleError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->handleError($validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('LaravelSanctumAuth')->plainTextToken;
        $success['name'] =  $user->name;
   
        return $this->handleResponse($success, 'User successfully registered!');
    }

    public function handleResponse($result, $msg)
    {
    	$res = [
            'success' => true, 
            'data' => $result,
            'message' => $msg,
        ];
        return response()->json($res, 200);
    }

    public function handleError($error, $errorMsg = [], $code = 404)
    {
    	$res = [
            'success' => false,
            'message' => $error,
        ];
        if(!empty($errorMsg)){
            $res['data'] = $errorMsg;
        }
        return response()->json($res, $code);
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
   
        if($validator->fails()){
            return $this->handleError($validator->errors());       
        }
   
        $user = User::where('email', $request->email)->first();
        if(!$user){
            return $this->handleError('User not found.', ['error'=>'User not found']);
        }
        $user->password = bcrypt($request->password);
        $user->save();
        return $this->handleResponse($user, 'Password reset successfully.');
    }

    public function showAll(){
        $users = User::all();
        return response()->json($users);
    }

    public function showOne($id){
        $user = User::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        return $user;
    }


    //Guardar el token y mandarlo en la api
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
