<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('assets/img/logoVivaBem.svg') }}" width="192" height="192">

    <title>Login Viva Bem</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/signin.css') }}" rel="stylesheet">
  </head>

  <body class="text-center">
    <form action="{{ route('login') }}" method="POST" class="form-signin">
        @csrf
      <img class="mb-4" src="{{ asset('assets/img/logoVivaBem.svg') }}" alt="" width="192" height="192">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="inputEmail" class="sr-only">Email </label>
      <input type="email" name="email" class="form-control" placeholder="Informe seu e-mail" value="{{ old('email') }}">
      {{ $errors->has('email') ? $errors->first('email') : '' }}
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password"  name="password" class="form-control" placeholder="Informe sua senha" value="{{ old('password') }}" >
      {{ $errors->has('password') ? $errors->first('password') : '' }}
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembre-me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" idform="formLogin" value="Login">Acessar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2023-20124</p>
    </form>
  </body>
</html>
