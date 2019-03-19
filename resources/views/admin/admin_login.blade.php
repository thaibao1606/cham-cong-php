<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Đăng Nhập ADMIN</title>
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href=" {{asset('css/teamplet_login_css/style.css')}}">

    </head>

    <body>
        <div id="login-button">
            <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png"></img>
        </div>
        <div id="container">
            <h1>Tài Khoản</h1>
            <span class="close-btn">
                <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
            </span>
            <form method="post" action="{{ url('admin') }}">{{ csrf_field() }}
                <!--<input type="username" name="username" placeholder="Tên Đăng Nhập">-->
                 <input type="text" name="username" placeholder="Tên Đăng Nhập" required="">
                <input type="password" name="password" placeholder="Password" required="">

                <input type="submit" class="btn btn-primary block full-width m-b" value="Đăng Nhập">
               <!--  <div id="remember-container">
                  <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
                  <span id="remember">Ghi Nhớ</span>
                 <span id="forgotten">Quên Mật Khẩu</span>
                </div>-->
            </form>
        </div>
        <!-- Forgotten Password Container
        <div id="forgotten-container">
           <h1>Forgotten</h1>
          <span class="close-btn">
            <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
          </span>

          <form>
            <input type="email" name="email" placeholder="E-mail">
            <a href="#" class="orange-btn">Get new password</a>
          </form>
        </div>-->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script  src="{{ asset('js/teamplet_login_js/index.js') }}"></script>
    </body>

</html>
