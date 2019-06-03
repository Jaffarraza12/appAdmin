@extends('layouts.app')

@section('content')
<div class="container" style="max-width:750px;">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

        <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
        <a href="#" id="forgot_pswd">Forgot password?</a>
        <hr>
        <!-- <p>Don't have an account!</p>  -->
    </form>



</div>
@endsection
