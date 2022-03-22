@extends('layouts.app')

@section('title',$title)

@section('content')
<h1>Login</h1>
<form action="/login/auth" method="POST">
    @csrf
    <p>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <input type="password" name="password" id="password">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>

</form>
@if($errors->has('error'))
    <div class="error">{{ $errors->first('error') }}</div>
@elseif($errors->has('email'))  
    <div class="error">{{ $errors->first('email') }}</div>
@elseif($errors->has('password'))  
    <div class="error">{{ $errors->first('password') }}</div>
@endif
@endsection