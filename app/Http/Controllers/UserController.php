<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Validation\Rule as ValidationRule;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function registerUser(Request $request)
    {
        try {

            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:5',
                'confirm_password' => 'required|same:password',
            ]);
            $user = new User([
                'user_types_id' => 2,
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'status' => 1,
            ]);

            $user->save();
            $responseData = ['success' => true, 'message' => 'Registration Successful'];
            Session()->flash('success', 'Registration Successful');
            
            if ($request->ajax()) {
                return response()->json($responseData);
            } else {
                Session()->flash('success', $responseData['message']);
                return redirect('/portfolio');
            }
        } catch (ValidationException $e) {
            $responseData = ['success' => false, 'errors' => $e->errors()];
        } catch (Exception $e) {
            $responseData = ['success' => false, 'message' => 'An error occurred. Please try again.'];
        }
        if ($request->ajax()) {
            return response()->json($responseData, 422);
        } else {
            return redirect('/about')->withErrors($responseData['errors'])->withInput();
        }
    }
}
