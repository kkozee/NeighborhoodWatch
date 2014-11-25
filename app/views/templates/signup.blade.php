@extends('templates.main')

@section('title')
    Signup | Neighborhood Watch
@stop

@section('content')
        @section('subtitle')
            Signup
        @stop

        <form action="{{ URL::route('signup-post') }}" method="post">
            Full Name: <input type="text" name="name" {{ (Input::old('name')) ? ' value="' . Input::old('name') . '"' : ''}}>
            @if($errors->has('name'))
                <span class="error"> {{ $errors->first('name') }} </span>
            @endif
            <br>
            Email: <input type="text" name="email" {{ (Input::old('email')) ? ' value="' . Input::old('email') . '"' : ''}}>
            @if($errors->has('email'))
                <span class="error"> {{ $errors->first('email') }} </span>
            @endif
            <br>
            Password: <input type="password" name="password" {{ (Input::old('password')) ? ' value="' . Input::old('password') . '"' : ''}}>
            @if($errors->has('password'))
                <span class="error"> {{ $errors->first('password') }} </span>
            @endif
            <br>
            Confirm Password: <input type="password" name="confirm" {{ (Input::old('confirm')) ? ' value="' . Input::old('confirm') . '"' : ''}}>
            @if($errors->has('confirm'))
                <span class="error"> {{ $errors->first('confirm') }} </span>
            @endif
            <br>
            Neighborhood Code: <input type="text" name="code" {{ (Input::old('code')) ? ' value="' . Input::old('code') . '"' : ''}}>
            @if($errors->has('code'))
                <span class="error"> {{ $errors->first('code') }} </span>
            @endif
            <br>
            <input type="submit">
            {{ Form::token() }}
        </form>
@stop