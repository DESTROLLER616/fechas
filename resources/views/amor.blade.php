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

        <p>Los espanioles buscaron la manera de conquistar la zona de Jalisco por lo que empezaron las conquistas en el anio de 1522 en la parte sur en Mazamitla y Tamazula que fue encomandada por Cristobal de Olid. En 1524 Hernan Cortez envio a su primo Francisco Cortez para buscar tesoros. En marzo de 1530 Nu??o Beltr??n de Guzm??n acompaniado por 500 soldados espnioles y 15000 mexicas entraron por La Barca hacia Tonallan, en el que fue recibido por la cihualpilli.</p>

        <p>
            El inter??s era dominar las tierras de los grupos caxcanes, que estaban del otro lado de la Barranca de Huentit??n. Nu??o de Guzm??n derrot?? a los caciques de la regi??n desde Michoac??n hasta Zacatecas. Quer??a un asentamiento que le sirviera para afianzar sus conquistas y defenderse de los naturales, as?? fund?? en Nochistl??n ???hoy estado de Zacatecas??? Guadalajara en honor a la ciudad espa??ola del mismo nombre, de la que era ??l originario. Al poco tiempo decidieron mudarla a un lugar ???en donde hubiera m??s agua, mejores v??as de comunicaci??n y menos tolvaneras???, al considerar que la zona de Tonal?? ten??a esas caracter??sticas se mudaron ah??. Dos a??os m??s tarde en 1535 Guadalajara volvi?? a moverse a Tlacot??n, en lo que hoy es el municipio del Ixtlahuac??n del R??o. En esa zona, la poblaci??n era constantemente atacada por los ind??genas por lo que se reforzaron las defensas. Despu??s de un ataque muy fuerte de siete d??as, en el que muri?? Pedro de Alvarado uno de los conquistadores de Tenochtitl??n, se decidi?? volver a mudar el asentamiento. El grupo de espa??oles, portugueses e ind??genas mexicas que integraban la ciudad cruzaron la barranca de Huentit??n buscando un mejor lugar. En Tetl??n se registr?? a los colonos que fundar??an la ciudad que se instal?? en el Valle de Atemajac, en la rivera de un r??o al que nombraron San Juan de Dios. El 14 de febrero de 1542 se asent?? la ciudad en forma definitiva y se celebr?? la primera reuni??n de cabildo en la que se nombr?? primer alcalde mayor a don Miguel de Ibarra.
            La palabra Guadalajara, proviene del vocablo ??rabe "Wad-al-hidjara", que significa "r??o que corre entre piedras".
            Guadalajara hab??a recibido el t??tulo de ciudad por Carlos I de Espa??a desde 1535. Un escudo de armas le fue concedido por el mismo rey el 8 de noviembre de 1539. Este escudo, con algunas modificaciones es el que hoy se usa para todo el estado de Jalisco.
        </p>
    </main>

    <footer>
        <p>Pagina creada por Cristopher Garcia Carmona para la materia de Desarrollo Web</p>
        <p>Contacto: <address>2121100557@soy.utj.edu.mx</address></p>
    </footer>
</body>
</html>