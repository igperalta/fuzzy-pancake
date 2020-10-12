<?php
    //require_once './libs/smarty/Smarty.class.php';

class PublicView {

    private $titleHome;
    private $titleServicios;

    public function __construct() {
        $this->titleHome = "Silver Sea Studio | Home";
        $this->titleServicios = "Silver Sea Studio | Servicios";
    }

    function renderHome() {
        $html = '
        <!DOCTYPE html>
        <html lang="en">
        
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$this->titleHome.'</title>
                <link rel="stylesheet" href="./css/style.css">
                <link rel="stylesheet" href="./css/bootstrap.min.css">
                <link rel="shortcut icon" href="./css/images/favicon.ico" type="image/x-icon">
                <script src="./js/tpe.js"></script>
            </head>
        
            <body class="homep">
                <header>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand navbar-logo" href="#"><img
                                src="./css/images/logo_double_arrow2.jpg"
                                alt="Silver Sea Studios Logo"></a>
                        <button class="navbar-toggler collapsed bg-dark" type="button"
                            data-toggle="collapse"
                            data-target="#navbarCollapsed"
                            aria-controls="navbarCollapsed" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarCollapsed">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./administrador">Administrador</a>
                        </li>
                    </ul>
                        </div>
                    </nav>
                </header>
                
                <section class="content">
            <section class="intro">
                <img class="nosotrosimg" src="css/images/nosotrosimg2.jpg"
                    alt="intro">
                <img class="nosotros_desktop"
                    src="css/images/nosotros_desktop.jpg" alt="intro">
                <p class="nosotrostitle">NOSOTROS</p>
                <p class="nosotrostext">
                    LA MÚSICA, EL SONIDO Y LOS DETALLES SON
                    NUESTRA PASIÓN.
                    POR ESO CREAMOS UN ESPACIO RELAJADO, CÁLIDO Y
                    PROFESIONAL, PARA QUE ARTISTAS, TÉCNICOS Y PRODUCTORES
                    HAGAN SU MAGIA CON LAS HERRAMIENTAS NECESARIAS PARA
                    CREAR BAJO LAS MAS ALTAS NORMAS DE CALIDAD.<br />
                    <span class="nosotrosspan">SOMOS SILVER SEA STUDIO.</span></p>
            </section>

            <section class="artistas">
                <p class="artistastitle">ARTISTAS</p>
                <div class="citrico">
                    <img class="citricoimg" src="./css/images/citrico.png">
                    <p class="citricotext">
                        <span class="citricotitle">CITRICO</span>
                        Es el alter ego del argentino Marco Otranto,
                        quién en 2014 decidió abandonar Buenos Aires y los
                        proyectos musicales en los que venía incursionando
                        como guitarrista para estudiar producción musical en
                        Londres, Inglaterra. Luego de ese tiempo en Europa,
                        de
                        regreso a nuestro país, le dio vida a Cítrico y a su
                        primer
                        disco “Jungla Estelar” (2015), con el que se insertó
                        en la
                        escena de la nueva generación de artistas
                        argentinos.
                        Luego en el 2018 lanzó su segundo disco "Retorno
                        Acuario” que fue grabado en el mítico Silver Sea, y
                        cuenta con
                        invitados como Emmanuel Horvilleur (Illya Kuriaki
                        and The Valderramas), Juan Saieg (Usted Señalemelo)
                        y
                        Yeyo (Jvlian).
                    </p>
                </div>
                <div class="indios">
                    <img class="indiosimg" src="./css/images/indios.png">
                    <p class="indiostext">
                        <span class="indiostitle">INDIOS</span>
                        Es una banda de pop rock formada en 2009 en
                        Rosario, provincia de Santa Fe, Argentina. Sus
                        sonidos varían entre lo indie - alternativo, con
                        letras que
                        recorren el sentir de la generación nacida en los
                        ´90. Su disco
                        debut de nombre homónimo fue editado en 2013,
                        grabado en nuestros estudios y tuvo un
                        desembarco contundente en la escena emergente de
                        Argentina. El álbum fue distinguido con un Premio
                        Gardel en la categoría Mejor Álbum Pop.
                    </div>
                </p>
                <div class="elmato">
                    <img class="elmatoimg" src="./css/images/el_mato.png">
                    <p class="elmatotext">
                        <span class="elmatotitle">EL MATO A UN POLICIA
                            MOTORIZADO</span>
                        La banda nació en La Plata, Argentina, a mediados
                        del año 2003. Es una de las
                        bandas más representativas de la nueva ola de bandas
                        independientes alternativas del nuevo siglo en
                        Argentina y Latinoamérica. La síntesis O`konor fue
                        lanzado en 2017 y rankeado como uno de los mejores
                        albumes del año por la revista Rolling Stone
                        Argentina, grabado y mezclado en nuestros estudios
                        entre febrero y diciembre del 2016.
                    </p>
                </div>
                <div class="bandadeturistas">
                    <img class="bandadeturistasimg"
                        src="./css/images/banda_de_turistas.png">
                    <p class="bandadeturistastext">
                        <span class="bandadeturistastitle">BANDA DE TURISTAS</span>
                        Formados en la Ciudad de Buenos Aires, durante fines
                        del año 2005. "Lo que mas queres" contiene diez
                        canciones cuya variedad remonta a la primera época
                        del grupo, resignificando todos los estilos que
                        conviven en la imaginación de Banda de Turistas
                        desde el comienzo: Rock, Pop, Psicodelia,
                        Electrónica, Baladas. Ocho de esas canciones fueron
                        grabadas en SS Studio y producidas por Juanchi
                        Baleirón,
                        quien produjo el single "Química", alcanzando el
                        puesto número 1 durante diez semanas consecutivas en
                        Radio y Televisión de Argentina.
                    </p>
                </div>
            </section>
        </section>
                <footer>
            <section class="socialmedia">
                <ul class="socialbuttons">
                    <li><a href="https://www.instagram.com"><img
                                src="css/icons/icoinstagram.png"></a></li>
                    <li><a href="https://twitter.com"><img
                                src="css/icons/icotwitter.png"></a></li>
                    <li><a href="https://mail.google.com"><img
                                src="css/icons/icomail.png"></a></li>
                    <li><a href="https://goo.gl/maps/xQvyUaujGipUyeu66"><img
                                src="css/icons/icolocation.png"></a></li>
                </ul>
            </section>
            <span class="copyright">Orellano &amp; Peralta 2020 &copy; todos
                los derechos reservados</span>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
        </body>
        </html>
        ';

        echo $html;
    }

    function renderServicios($componentes, $marcas) {
        $html = '
        <!DOCTYPE html>
        <html lang="en">
        
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$this->titleServicios.'</title>
                <link rel="stylesheet" href="./css/style.css">
                <link rel="stylesheet" href="./css/bootstrap.min.css">
                <link rel="shortcut icon" href="./css/images/favicon.ico" type="image/x-icon">
                <script src="./js/tpe.js"></script>
            </head>
        

            <body>
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand navbar-logo" href="#"><img src="./css/images/logo_double_arrow2.jpg"
                            alt="Silver Sea Studios Logo"></a>
                    <button class="navbar-toggler collapsed bg-dark" type="button" data-toggle="collapse"
                        data-target="#navbarCollapsed" aria-controls="navbarCollapsed" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarCollapsed">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./administrador">Administrador</a>
                    </li>
                </ul>
                    </div>
                </nav>
            </header>


            <section class="content">
            <section class="introServicios">
                <h1 class="serviciostitle">EL ESTUDIO</h1>
                <article>
                    <div class="controlroom">
                        <img class="imgControlRoom" src="css/images/controlroom.jpg" alt="Control Room">
                        <p class="controlroomtext">
                            <span class="controlroomtitle">Control Room</span>
                            El estudio cuenta con un cómodo control room con vistas
                            al
                            exterior y a la sala de grabación. Amplio espacio, tanto
                            para los técnicos como para músicos y productores.
                            Nuestro
                            equipamiento permite la captura fiel, elección de
                            distintos "colores" y una excelente audición desde todos
                            los
                            ángulos, gracias al diseño de esta parte de la
                            sala.
                            También cuenta con una antesala, kitchenette, baño y
                            servicios que permiten una estancia cómoda y relajada.
                        </p>
                </article>
                </div>
                <article>
                    <div class="recordroom">
                        <img class="imgGrabacion" src="css/images/saladegrabacion1.jpg" alt="Microfonos">
                        <p class="salagrabaciontext">
                            <span class="salagrabaciontitle">Sala de Grabacion</span>
                            Sus dimensiones permiten una
                            aislación adecuada para realizar grabaciones solistas o
                            en
                            grupos de músicos que deseen tocar al mismo tiempo. Los
                            trabajos de acústica realizados le brindan un exacto
                            reflejo del sonido de origen, permitiendo de este modo
                            la
                            captura pura de la personalidad de cada ejecutante.
                            Espaciosa y equipada con instrumentos básicos, permite
                            el
                            trabajo de una amplia variedad de intérpretes y estilos.
                            Cuenta con aire acondicionado y soporte técnico para una
                            amplísima variedad de instrumentos.
                        </p>
                </article>
                </div>
            </section>

            <!-- MUESTRO COMPONENTES -->
            <section class "componentes">
            <h1 class="serviciostitle">NUESTRO EQUIPAMIENTO</h1>

            <table>
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Modelo</th>
                        <th>Precio</th>
                        <th>Gama</th>
                    </tr>
                </thead>
                <tbody>
        ';

        foreach($componentes as $componente) {
                $html .= '
                    <tr>
                        <td>'.$componente->tipo.'</td>
                        <td>'.$componente->modelo.'</td>
                        <td>'.$componente->precio.'</td>
                        <td>'.$componente->gama.'</td>
                    </tr>
                ';
        }
            $html .=
            ' </tbody>
                </table>
            
            <!-- MUESTRO MARCAS -->
            <section class="marcas"> 
            <h1 class="serviciostitle">MARCAS AMIGAS</h1>
            <ul>';
            foreach($marcas as $marca) {
                $html .= '<li class="controlroomtext">'.$marca->nombre.'</li>';
            }
                $html .= 
            '</ul>
            </section>


            <footer>
            <section class="socialmedia">
                <ul class="socialbuttons">
                    <li><a href="https://www.instagram.com"><img src="css/icons/icoinstagram.png"></a></li>
                    <li><a href="https://twitter.com"><img src="css/icons/icotwitter.png"></a></li>
                    <li><a href="https://mail.google.com"><img src="css/icons/icomail.png"></a></li>
                    <li><a href="https://goo.gl/maps/xQvyUaujGipUyeu66"><img src="css/icons/icolocation.png"></a></li>
                </ul>
            </section>
            <div class="copyright">
                <span>Orellano &amp; Peralta 2020 &copy; <br> Todos los derechos reservados</span>
            </div>
        </footer>
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
        </body>
    
        </html>
        ';

        echo $html;
    }
    

    //muestra la lista de componentes
    /*function renderComponentes($componentes) {
        echo "<h1>Todos los componentes</h2>";

        //imprime la tabla de componentes
        echo "<table>
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Modelo</th>
                        <th>Precio</th>
                        <th>Gama</th>
                    </tr>  
                </thead>
                <tbody>
        ";

        foreach($componentes as $componente) {
                echo "
                    <tr>
                        <td>$componente->tipo</td>
                        <td>$componente->modelo</td>
                        <td>$componente->precio</td>
                        <td>$componente->gama</td>
                    </tr>
                ";
        }
            echo " </tbody>
                </table>";
        echo "<a href='index.html'> Volver </a>";
    }*/

    //muestra la lista de componentes
    /*function renderMarcas($marcas) {
        echo "<h1>Todas las marcas</h2>";
    
            //imprime la tabla de componentes
            echo "<ul>";
    
            foreach($marcas as $marca) {
                    echo "
                        <li>
                            $marca->nombre
                        </li>
                    ";
            }
                echo "</ul>";
            echo "<a href='index.html'> Volver </a>";
    }*/

    function renderComponentesPorMarca($marca, $componentes) {
        echo "<h1>Filtrar componentes por marca: $marca</h2>";

        //imprime la tabla de componentes
        echo "<table>
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Modelo</th>
                        <th>Precio</th>
                        <th>Gama</th>
                    </tr>
                </thead>
                <tbody>
        ";

        foreach($componentes as $componente) {
                echo "
                    <tr>
                        <td>$componente->tipo</td>
                        <td>$componente->modelo</td>
                        <td>$componente->precio</td>
                        <td>$componente->gama</td>
                    </tr>
                ";
        }
            echo " </tbody>
                </table>";
        echo "<a href='index.html'> Volver </a>";
    }


    function renderError() {
        echo "<h2>¡Error!, marca no especificada</h2>";
    }
}