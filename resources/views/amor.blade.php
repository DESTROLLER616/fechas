<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/amor.css')}}">
    <title>Dia del amor y amistad</title>
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
                <a href="{{url('dia-amor')}}"><li>Dia Guadalajara</li></a>
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

    <h1>Dia del la Fundacion de Guadalajara - 14 de febrero de 1542</h1>

    <main>

        <img class="main-img" src="{{asset('images/guadalajara.jpg')}}" alt="">

        <p>
            Como ya todos sabemos, la ciudad central de nuestro estado de Jalisco se fundo en el anio 1542.
            Fundaron esta ciudad en el Valle de Atemajac en un sitio llamado Tetlan, en que fundaron la ciudad por 4ta y ultima vez. Fundaron la ciudad debido a que este era un lugar seguro para los espanioles contra el ataque de los pobladores nativos de la zona.
        </p>

        <p>El estado de Jalisco fue habitado por distintos grupos indigenas como los coanos, cazcanes, y texcueces que habitaban un reino muy importante llamado Tonallan, que hoy en dia es llamado Tonala.</p>

        <p>Los espanioles buscaron la manera de conquistar la zona de Jalisco por lo que empezaron las conquistas en el anio de 1522 en la parte sur en Mazamitla y Tamazula que fue encomandada por Cristobal de Olid. En 1524 Hernan Cortez envio a su primo Francisco Cortez para buscar tesoros. En marzo de 1530 Nuño Beltrán de Guzmán acompaniado por 500 soldados espnioles y 15000 mexicas entraron por La Barca hacia Tonallan, en el que fue recibido por la cihualpilli.</p>

        <p>
            El interés era dominar las tierras de los grupos caxcanes, que estaban del otro lado de la Barranca de Huentitán. Nuño de Guzmán derrotó a los caciques de la región desde Michoacán hasta Zacatecas. Quería un asentamiento que le sirviera para afianzar sus conquistas y defenderse de los naturales, así fundó en Nochistlán –hoy estado de Zacatecas– Guadalajara en honor a la ciudad española del mismo nombre, de la que era él originario. Al poco tiempo decidieron mudarla a un lugar “en donde hubiera más agua, mejores vías de comunicación y menos tolvaneras”, al considerar que la zona de Tonalá tenía esas características se mudaron ahí. Dos años más tarde en 1535 Guadalajara volvió a moverse a Tlacotán, en lo que hoy es el municipio del Ixtlahuacán del Río. En esa zona, la población era constantemente atacada por los indígenas por lo que se reforzaron las defensas. Después de un ataque muy fuerte de siete días, en el que murió Pedro de Alvarado uno de los conquistadores de Tenochtitlán, se decidió volver a mudar el asentamiento. El grupo de españoles, portugueses e indígenas mexicas que integraban la ciudad cruzaron la barranca de Huentitán buscando un mejor lugar. En Tetlán se registró a los colonos que fundarían la ciudad que se instaló en el Valle de Atemajac, en la rivera de un río al que nombraron San Juan de Dios. El 14 de febrero de 1542 se asentó la ciudad en forma definitiva y se celebró la primera reunión de cabildo en la que se nombró primer alcalde mayor a don Miguel de Ibarra.
            La palabra Guadalajara, proviene del vocablo árabe "Wad-al-hidjara", que significa "río que corre entre piedras".
            Guadalajara había recibido el título de ciudad por Carlos I de España desde 1535. Un escudo de armas le fue concedido por el mismo rey el 8 de noviembre de 1539. Este escudo, con algunas modificaciones es el que hoy se usa para todo el estado de Jalisco.
        </p>
    </main>

    <footer>
        <p>Pagina creada por Cristopher Garcia Carmona para la materia de Desarrollo Web</p>
        <p>Contacto: <address>2121100557@soy.utj.edu.mx</address></p>
    </footer>
</body>
</html>