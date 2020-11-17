@extends('layouts.layout')
@section('content')
    <div class="signinbackground">
        <div class="signinform container">
            <form action="{{ route('user.signin.checkuser') }}" method="post" class="recaptchaForm" id="signinform">
                @csrf
                <div class="formgroup">
                    <p class="signinlabel">User Signin</p>
                </div>
                <div class="formgroup">
                    <p>{{ session('simsg') }}</p>
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
                    <div class="g-recaptcha" data-sitekey="6Lev2OIZAAAAAM4sV7ArEjM6MPQC7AQ5W_tbotYp"></div>
                </div>
                <div class="formgroup">
                    <button class="formbutton" onclick="rec()">Submit</button>
                    <a href="{{ route('user.signup') }}" class="formbutton">Signup</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
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
