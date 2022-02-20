@extends('master')

@section('content')

    <section id="popup" class="model">
        <form class="modal-content animate" action="/userRegi" method="post">
            @csrf
            <div class="containers">
                <h2>Create Account</h2><br><br>
                <label for="name"><b>Full Name</b></label><br>
                <input type="text" name="name" placeholder="Enter your Name" required="required"/><br>

                <label for="email"><b>Email</b></label><br>
                <input type="email" name="email" placeholder="Enter your Email" required="required"><br>

                <label for="pass"><b>Password</b></label><br>
                <input type="password" name="pass"placeholder="Enter your Password" required="required"><br>

                <label for="conPass"><b>Confirm Password</b></label><br>
                <input type="password" name="conPass" placeholder="Confirm your Password" required="required"><br>

                <button type="submit">Register</button><br>
            </div>
        </form>
    </section>

@endsection
