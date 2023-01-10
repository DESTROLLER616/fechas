<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/nosotros.css')}}">
    <title>Document</title>
</head>
<body>
    <header>
        <div>
            <img class="nav-image" src="{{asset('images/clank.jpg')}}" alt="imagen no disponible">
        </div>
    
        <nav>
            <ul class="nav-links">
                <a href=""><li>Inicio</li></a>
                <a href="{{url('nosotros')}}"><li>Nosotros</li></a>
                @if (auth() -> check())
                <a href="{{url('dia-amor')}}"><li>Dia amor</li></a>
                <a href="{{url('dia-mujer')}}"><li>Dia mujer</li></a>
                @endif
            </ul>
        </nav>
    
        @if (auth() -> check())
            <p>Bienvenido {{auth() -> user() -> name}}</p>
        @else
            <form action="{{route('login')}}">
                <button><b>Iniciar sesion</b></button>
            </form>
        @endif
    </header>

    <h1>Sobre nosotros</h1>

    <main>
        <p>Esta pagina esta dirigida a todo aque que quiera ver la historia de nuestra ciudad y como es que hemos llegado hasta nuestros tiempos distopicos ademas de los que tienen curiosidad por saber de nuestro estado hermoso y enterate de todo lo que nuestro estado puede proveer a toda la gente de fuera. 
        </p>

        <p>En este blog participa gente que le gusta compartir con los demas las cosas raras, feas, hermosas y preciosas que ocurren en nuestra ciudad, cosas que puede que a todo aquel que visite nuestro blog le podria interesar y que podria orientar a alguien de afuera de nuestro estado a saber que puede hacer aqui y cuales son las mejores fechas para venir.</p>

        <p>En esta pagina puedes ver todos nuestros documentos si es que inicias sesion en nuestra pagina, solo pon tu nombre de usuario, correo y una contrasenia y todo estara listo para que inicies sesion cuando quieras ver todo lo que publicamos.</p>
        <br>

        <img class="img-main" src="{{asset('images/like.jpg')}}" alt="Imagen no disponible">
    </main>

    <footer>
        <p>Pagina creada por Cristopher Garcia Carmona para la materia de Desarrollo Web</p>
        <p>Contacto: <address>2121100557@soy.utj.edu.mx</address></p>
    </footer>
</body>
</html>