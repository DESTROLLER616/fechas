<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Index</title>
</head>
<body>
    
    <header>
        <div>
            <img class="nav-image" src="{{asset('images/clank.jpg')}}" alt="imagen no disponible">
        </div>

        <nav>
            <ul class="nav-links">
                <a href=""><li>Inicio</li></a>
                <a href="{{route('/nosotros')}}"><li>Nosotros</li></a>
                <a href=""><li>Articulos</li></a>
            </ul>
        </nav>

        @if (auth() -> check())
            
        @else
            
        @endif
    </header>

    <main>
        <h1>Las festividades de Jalisco</h1>

        <div class="cuadricula">
            <section class="items item1">
                <p>Las celebraciones de algun evento importante son algo que todos los jalisciences celebramos cada anio con toda la emocion y que cada quien puede hacerlo a su manera.</p>
                <br>
                <img src="{{asset('images/celebracion.jpg')}}" alt="Imagen no disponible">
            </section>

            <section class="items item2">
                <p>En Jalisco siempre destacan dos fechas muy importantes, el 14 de Febrero y el 8 de Marzo (el dia del amor y la amistad y el dia de la mujer respectivamente).</p>
                <br>
                <img src="{{asset('images/corazon.jpg')}}" alt="Imagen no disponible">
            </section>

            <section class="items item3">
                <p>En este blog te hablaremos de ellos a mas profundidad y como se llevan a cabo en nuestro bello estado y todo lo que puedes hacer en nuestro estdo estos dias.</p>
                <br>
                <img src="{{asset('images/idea.jpg')}}" alt="Imagen no disponible">
            </section>
        </div>

        <article>
            <p>Si quieres enterarte de nuestros articulos que escribimos, inicia sesion en nuestra pagina que es totalmente <span>!!GRATIS!!</span></p>
        </article>

    </main>

    <footer>
        <p>Pagina creada por Cristopher Garcia Carmona para la materia de Desarrollo Web</p>
        <p>Contacto: <address>2121100557@soy.utj.edu.mx</address></p>
    </footer>

</body>
</html>