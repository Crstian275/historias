<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/estilos.css')}}">


  </head>
  <body>
 
<a href="{{ route('main') }}" class="text-decoration-none text-dark">
	<div class="container">
                <div class="py-4">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if(isset($errors) && $errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
            </div>

	<h1 class="text-center">HISTORIAS DE TERROR</h1>
	</a>
   
		@yield('content')
	<script src="/js/app.js"></script>
  </body>
</html>
