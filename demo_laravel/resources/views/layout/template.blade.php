<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" 
                    data-toggle="collapse" data-target="#navbar" 
                    aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Desplegar navegacion</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="#">Ejemplo Laravel</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li> 
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                   role="button" aria-haspopup="true" 
                   aria-expanded="false">Autores <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('autor.create') }}">Registrar autor</a></li>
                  <li><a href="{{ route('autor.index') }}">Ver lista de autores</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                   role="button" aria-haspopup="true" 
                   aria-expanded="false">Generos<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Registrar genero</a></li>
                  <li><a href="#">Ver lista de generos</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                   role="button" aria-haspopup="true" 
                   aria-expanded="false">Libros<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Registrar libro</a></li>
                  <li><a href="#">Ver lista de libros</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                   role="button" aria-haspopup="true" 
                   aria-expanded="false">Editoriales<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('editorial.create') }}">Registrar editorial</a></li>
                  <li><a href="{{ route('editorial.index') }}">Ver lista de editoriales</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Usuario(cerrar sesión)</a></li>
            </ul>
            
          </div>
        </div>
      </nav>
          
  

<div class="container">
    @yield('content')
</div> 

<body>
</html>