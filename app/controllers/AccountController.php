<?php

class AccountController extends BaseController {

    public function getCreate() {
        return View::make('templates.signup');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(),
            array(
                'name' => 'required',
                'email' => 'required|max:50|email|unique:users',
                'password' => 'required',
                'confirm' => 'required|same:password',
                'code' => 'required',
            )
        );

        if ($validator->fails()) {
            return Redirect::route('signup')->withErrors($validator)->withInput();
        } else {
            $name = Input::get('name');
            $email = Input::get('email');
            $password = Input::get('password');

            $code = str_random(60);

            $createUser = User::create(array(
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'code' => $code,
                'active' => 0
            ));

            if ($createUser) {
                return Redirect::route('home')->with('global', 'Please check your email to verify your account.');
            }
        }
    }

}
