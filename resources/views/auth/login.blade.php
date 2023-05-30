<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
     <div class="login-page">
        <div class="form">
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            
          <form class="login-form" method="POST" action="{{route('login')}}">
            @csrf
            <input name="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus/>
            @error('email')
                <small style="color: red"><strong>*{{$message }}</strong></small>
                <br>
            @enderror

            <input name="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password"/>
            @error('password')
               <small style="color: red"><strong>*{{$message }}</strong></small>
               <br>
            @enderror

            <button type="submit">login</button>
          </form>
        </div>
      </div>
  </body>
</html>