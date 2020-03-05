<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use Request;
use Validator;

class AuthController extends Controller
{
    public function doLogin()
    {
        // validate the info, create rules for the Requests
        $rules = array(
            'unique_id' => 'required|numeric|min:3', // make sure the unique_id is an actual unique_id
            'password' => 'required|alphaNum|min:3', // password can only be alphanumeric and has to be greater than 3 characters
        );

// run the validation rules on the Requests from the form
        $validator = Validator::make(Request::all(), $rules);

// if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login_show')
                ->withErrors($validator) // send back all errors to the login form
                ->withRequest(Request::except('password')); // send back the Request (not the password) so that we can repopulate the form

        } else {

            // create our user data for the authentication
            $userdata = array(
                'unique_id' => Request::get('unique_id'),
                'password' => Request::get('password'),
            );

            // attempt to do the login

            if (Auth::attempt($userdata, Request::get('remember'))) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                return Redirect::to('/');

            } else {

                // validation not successful, send back to form
                return Redirect::to('login_show')->withErrors("We do not have record with this UID and password.");

            }
        }}

    public function Logout()
    {
        Auth::Logout();
        return Redirect::to('/');
    }
}
