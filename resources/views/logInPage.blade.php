@extends('master')

@section('content')

<section id="popup" class="model" >

    <form class="modal-content animate" action="/logInUser" method="post">
        @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @csrf
        <div class="containers">
            <h2>Login Form</h2><br>
            <label for="email"><b>Email or Username</b></label><br>
            <input type="text" placeholder="Enter Email or Username" value="{{old('email')}}"
                   name="email" required><br><br>
            <label for="password"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="password" required><br>
            <button type="submit">Login</button><br>
            <a href="#">Forgot password</a>
        </div>
    </form>

</section>

@endsection
