<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Validation\Rule as ValidationRule;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        $user = User::where('email', '=', $request->email)->first();
        $hashedPassword = $user->password;

        if ($user) {
            if (Hash::check($request->get('password'), $hashedPassword)) {
                if ($user->user_types_id == 1 && $user->status == 1) {

                    $request->Session()->put('LoginId', $user->id);
                    $request->Session()->put('UserType', $user->user_types_id);
                    $responseData = ['success' => true, 'message' => 'Successfully Logged in as Admin'];
                } elseif ($user->user_types_id == 2 && $user->status == 1) {

                    $request->Session()->put('LoginId', $user->id);
                    $request->Session()->put('UserType', $user->user_types_id);
                    $responseData = ['success' => true, 'message' => 'Login Successful'];
                } else {

                    Session()->flash('error', 'User cannot find');
                    $responseData = ['success' => false, 'message' => 'User cannot find'];
                    return back()->with('error', 'User cannot find');
                }
            } else {
                Session()->flash('error', 'Wrong Password');
                $responseData = ['success' => false, 'message' => 'Wrong Password'];
                return back()->with('error', 'Wrong Password');
            }
        } else {
            Session()->flash('error', 'User Not Found');
            $responseData = ['success' => false, 'message' => 'User Not Found'];
            return back()->with('error', 'User Not Found');
        }
        if ($request->ajax()) {
            return response()->json($responseData);
        } else {
            Session()->flash('success', $responseData['message']);
            return redirect('/user/dashboard');
        }
    }
    public function logout()
    {
        Session()->flush();
        return redirect('/');
    }
}
