@extends('master')

@section('content')

<section id="popup" class="model" >

    <form class="modal-content animate" action="/logInUser" method="post">
        @csrf
        <div class="containers">
            <h2>Login Form</h2><br>
            <label for="email"><b>Email or Username</b></label><br>
            <input type="text" placeholder="Enter Email or Username" name="email" required><br><br>
            <label for="password"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="password" required><br>
            <button type="submit">Login</button><br>
            <a href="#">Forgot password</a>
        </div>
    </form>

</section>

@endsection
