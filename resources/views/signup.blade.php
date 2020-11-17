@extends('layouts.layout')
@section('content')
    <div class="signinbackground">
        <div class="signinform container">
            <form action="{{ route('user.signup.create') }}" method="post" id="signinform">
                @csrf
                <div class="formgroup">
                    <p class="signinlabel">User Signup</p>
                </div>
                <div class="formgroup">
                    <p>{{ session('sumsg') }}</p>
                </div>
                <div class="formgroup">
                    <label for="name" class="formlabel">name:</label>
                    <input type="text" name="name" id="" class="forminput" placeholder="e.g:mark" required>
                </div>
                <div class="formgroup">
                    <label for="email" class="formlabel">email:</label>
                    <input type="email" name="email" id="" class="forminput" placeholder="e.g:mark@gmail.com" required>
                </div>
                <div class="formgroup">
                    <label for="username" class="formlabel">username:</label>
                    <input type="text" name="username" id="" class="forminput" placeholder="e.g:mark" required>
                </div>
                <div class="formgroup">
                    <label for="password" class="formlabel">Password:</label>
                    <input type="password" name="password" id="" class="forminput" placeholder="e.g:mark123" required>
                </div>
                <div class="formgroup">
                    <label for="cpassword" class="formlabel">C Password:</label>
                    <input type="password" name="cpassword" id="" class="forminput" placeholder="e.g:mark123" required>
                </div>
                <div class="formgroup">
                    <button type="submit" class="formbutton">Signup</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $('#signinform').validate({
            wrapper: 'span',
            errorPlacement: function (error, element) {
                error.css({'padding-left':'10px','margin-right':'20px','padding-bottom':'2px','color':'red'});
                error.addClass("error")
                error.insertAfter(element);
            }
        });
    </script>
@endsection
