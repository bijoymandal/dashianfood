<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>@yield('title','Admin '.$setting[0]->webtitle)</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('login/style.css') }}">
   <style>
       .login {
        color: white;
        background: background: #136a8a;
        background:
            -webkit-linear-gradient(to right, #267871, #136a8a);
        background:
            linear-gradient(to right, #267871, #136a8a);
        margin: auto;
        box-shadow:
            0px 2px 10px rgba(0,0,0,0.2),
            0px 10px 20px rgba(0,0,0,0.3),
            0px 30px 60px 1px rgba(0,0,0,0.5);
        border-radius: 8px;
        padding: 50px;
        }
        .login .head {
        display: flex;
        align-items: center;
        justify-content: center;
        }
        .login .head .company {
        font-size: 2.2em;
        }
        .login .msg {
        text-align: center;
        }
        .login .form input[type=email].text {
        border: none;
        background: none;
        box-shadow: 0px 2px 0px 0px white;
        width: 100%;
        color: white;
        font-size: 1em;
        outline: none;
        }
        .login .form .text::placeholder {
        color: #D3D3D3;
        }
        .login .form input[type=password].password {
        border: none;
        background: none;
        box-shadow: 0px 2px 0px 0px white;
        width: 100%;
        color: white;
        font-size: 1em;
        outline: none;
        margin-bottom: 20px;
        margin-top: 20px;
        }
        .login .form .password::placeholder {
        color: #D3D3D3;
        }
        .login .form .btn-login {
        background: none;
        text-decoration: none;
        color: white;
        box-shadow: 0px 0px 0px 2px white;
        border-radius: 3px;
        padding: 5px 2em;
        transition: 0.5s;
        }
        .login .form .btn-login:hover {
        background: white;
        color: dimgray;
        transition: 0.5s;
        }
        .login .forgot {
        text-decoration: none;
        color: white;
        float: right;
        }
  </style>
</head>
<body>
    <div class="container">
        <div id="login-box">
            <section class='login' id='login'>
                <div class='head'>
                <h1 class='company'>
                    <img src="{{ asset($setting[0]->logo) }}" />
                </h1>
                </div>
                <p class='msg'>Welcome back</p>
                <div class='form'>
                  <form action="{{ route('admin.login.submit') }}" method="post">
                    @csrf
                        <input type="email" placeholder='Email ID' name="email" class='text @error('email') is-invalid @enderror' id='username' required><br>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <input type="password" placeholder='password' name="password" class='password @error('password') is-invalid @enderror'><br>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="submit" class='btn-login' id='do-login'>Login</button>
                        <a href="#" class='forgot'>Forgot?</a>
                  </form>
                </div>
            </section>
        </div>
    </div>


    <div id="particles-js"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src='https://code.jquery.com/jquery-1.11.1.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('login/script.js') }}"></script>

</body>
</html>
