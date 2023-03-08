<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">

    <style>
      body {
        background-color: #FFF;
        color: #2D1967;
      }
      input[type=email], input[type=password], input[type=submit] {
        border-radius: 2px;
        margin: 8px 0;
        padding: 12px 20px;
        width: 250%;
        background-color: #FFF;
        border: 1px solid #7BB9FA;
      }
      input[type=submit] {
        background-color: #1E4178;
        color: #FFF;
        border-radius: 2px;
      }
    </style>

  </head>
  <body>
    <div style="display: flex; flex: 1; min-height: 100vh;">

      <div style="display: flex; flex: 3; background-image: url('img/login-page-bg.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- <img src="{{ url('img/login-page-bg.png') }}" alt="Login Page BG"> -->
      </div>

      <div style="display: flex; flex: 4; flex-direction: column; justify-content: center; align-items: center;">
        <img src="{{ url('img/bfp-logo.png') }}" alt="BFP Logo" width="150px" height="150px">
        <div style="display: flex; flex-direction: column; align-items: center; margin: 30px;">
          <h1 style="">Welcome!</h1>
          <p style="margin: 0;">Please enter your email and password to continue.</p>
        </div>
        <form action="/dashboard">
          <div style="display: flex; flex: 1; flex-direction: column; align-items: center;">
            <input type="email" name="" id="" placeholder="Email">
            <input type="password" name="" id="" placeholder="Password">    
            <input type="submit" value="Login">
          </div>
        </form>
      </div>

    </div>
  </body>
</html>
