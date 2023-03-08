<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ url('img/bfp-apalit-logo.png') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">

    <!-- Boxicon CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!-- Styles -->
    <style>
      .container {
        background-color: #E3EAF0;
        min-height: 100vh;
      }
      .topnav {
        position: fixed;
        width: 100%;
        display: flex;
        /* flex-direction: row; */
        align-items: center;
        color: #FFFFFF;
        background-color: #2D1967;
        height: 70px;
        z-index: 2;
      }
      .topnav .header {
        display: flex;
        flex: 1;
        flex-direction: row;
        align-items: center;
      }
      .topnav .header i, .topnav .header img, .topnav .header h2, .topnav .user {
        padding: 10px;
      }
      .topnav img {
        border-radius: 50px;
      }
      .sidebar {
        z-index: 1;
        position: fixed;
        display: flex;
        flex: 1;
        flex-direction: column;
        background-color: #FFFFFF;
        width: 270px; 
        height: 100vh;
        padding-top: 100px;
        border-right: 4px solid #F8DBDD;
      }
      .body-content {
        display: flex;
        flex-direction: column;
        flex: 1;
        padding: 30px;
        padding-top: 70px;
        margin-left: 280px;
      }
      .sidebar .menu {
        padding: 10px 0;
        font-weight: bold;
      }
      .sidebar .menu a {
        display: flex;
        align-content: center;
        color: #2E4765;
        text-decoration: none;
        padding: 10px;
        border-left: 10px solid #FFF;
      }
      .sidebar .menu a.active {
        color: #25438C;
        border-left: 10px solid #2D1967;
      }
      .sidebar .menu a span {
        padding-left: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="topnav">
        <div class="header">
          <i class='bx bx-menu bx-sm'></i>
          <img src="{{ url('img/bfp-logo.png')}}" alt="BFP Logo" width="40px" height="40px">
          <h2>Bureau of Fire Protection - Apalit R3</h2>
        </div>
        <div class="user">
          <i class='bx bxs-user-circle'></i>
        </div>
      </div>

      <div class="sidebar-and-body">
        <div class="sidebar">
          <div class="menu">
            <a class="{{ Request::is('dashboard') ? 'active':'' }}" href="/dashboard">
              <i class='bx bx-home'></i>
              <span>Dashboard</span>
            </a>
          </div>
          <div class="menu">
            <a class="{{ Request::is('establishments') ? 'active':'' }}" href="/establishments">
              <i class='bx bx-buildings'></i>
              <span>Establishments</span>
            </a>
          </div>
          <div class="menu">
            <a class="{{ Request::is('fsic-sms-notification') ? 'active':'' }}" href="/fsic-sms-notification">
              <i class='bx bx-message-rounded-dots'></i>
              <span>FSIC SMS Notification</span>
            </a>
          </div>
          <div class="menu">
            <a class="{{ Request::is('closed-establishments') ? 'active':'' }}" href="/closed-establishments">
              <i class='bx bx-x-circle'></i>
              <span>Closed Establishments</span>
            </a>
          </div>
          <div class="menu">
            <a class="{{ Request::is('video-tutorial') ? 'active':'' }}" href="/video-tutorial">
              <i class='bx bxs-videos'></i>
              <span>Video Tutorial</span>
            </a>
          </div>
        </div>
        <div class="body-content">
          @yield('content')
        </div>
      </div>
      
    </div>
  </body>
</html>