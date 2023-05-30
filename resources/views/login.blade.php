<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
     <div class="login-page">
        <div class="form">
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            
          <form class="login-form" method="POST" action="{{route('login.store')}}">
            @csrf
            <input name="number_control" type="text" placeholder="numero de control"/>
            @error('number_control')
                <small style="color: red">*{{$message}}</small>
                <br>
            @enderror

            <input name="password" type="password" placeholder="password"/>
            @error('password')
               <small style="color: red">*{{$message}}</small>
               <br>
            @enderror
            <button type="submit">login</button>
          </form>
        </div>
      </div>
  </body>
</html>