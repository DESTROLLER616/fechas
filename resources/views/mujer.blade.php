<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/mujer.css')}}">
    <title>Dia de la mujer</title>
</head>
<body>
    <header>
        <div>
            <img class="nav-image" src="{{asset('images/clank.jpg')}}" alt="imagen no disponible">
        </div>
    
        <nav>
            <ul class="nav-links">
                <a href="{{url('/')}}"><li>Inicio</li></a>
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

    <h1>Dia de la mujer (8 de marzo)</h1>

    <main>
        <img src="{{asset('images/dia-mujer.jpg')}}" alt="">

        <p>El 8 de marzo es el Día Internacional de la Mujer y en ciudades de todo el mundo se realizan manifestaciones para evidenciar la violencia de género que aún se vive y exigir equidad. En Guadalajara habrá dos marchas, aquí te decimos cuál será el recorrido, el punto de reunión, la hora y el lugar.</p>

        <p>Una de las marchas es convocada por la red Yo Voy 8 de Marzo en la que participan diversas colectivas feministas. La red invita a reunirse a las 03:00 de la tarde en la Glorieta de los Desaparecidos y Desaparecidas para iniciar la jornada de protesta con talleres de stencil, batucada y tejer con la Colectiva Hilos, quienes desde 2018 tejen una malla roja como protesta contra las desapariciones y los feminicidios.</p>



        <p>Después de los talleres, la concentración saldrá de la glorieta a las 05:00 de la tarde con rumbo a la Plaza Imelda Virgen, bautizada así por las feministas tapatías en honor a una mujer que fue víctima de feminicidio, la plaza se encuentra en el andador Alcalde en el Centro Histórico de Guadalajara.</p>

        <p>La red YoVoy8M hace énfasis en que las familias de personas desaparecidas o víctimas de feminicidios, así como las disidencias sexuales, (como mujeres trans, personas no binarias, entre otras) y trabajadoras sexuales, “van al centro”, ya que según la red “estamos viviendo una crisis brutal en cuestión de desapariciones forzadas y feminicidios”.</p>



        <p>Por su parte colectivos de feministas radicales como Aquelarre Radical GDL y Frente Feminista Radical invitan a las mujeres a marchar iniciando desde el Parque Rojo o parque Revolución a las 2:00 de la tarde y llegará a la Secretaría de Igualdad Sustantiva, donde se hará una fogata a manera de protesta. Esta manifestación es separatista, es decir que solo mujeres cisgénero son bienvenidas, o sea mujeres que nacieron siendo mujeres. </p>
    </main>

    <footer>
        <p>Pagina creada por Cristopher Garcia Carmona para la materia de Desarrollo Web</p>
        <p>Contacto: <address>2121100557@soy.utj.edu.mx</address></p>
    </footer>
</body>
</html>