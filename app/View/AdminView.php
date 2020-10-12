<?php

class AdminView {

    private $titleLogin;
    private $titleAdministrador;

    public function __construct() {
        $this->titleLogin = "Silver Sea Studio | Login";
        $this->titleAdministrador = "Silver Sea Studio | Administrador";
    }

    function renderLogin() {
        $html = '
        <!DOCTYPE html>
        <html lang="en">
        
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$this->titleLogin.'</title>
                <link rel="stylesheet" href="./css/style.css">
                <link rel="stylesheet" href="./css/bootstrap.min.css">
                <script src="./js/tpe.js"></script>
                <link rel="shortcut icon" href="./css/images/favicon.ico"
                    type="image/x-icon">
            </head>
        
            <body>
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


                <p class="servicestitle">INICIAR SESIÓN</p>
                <div class="contactossstudio">
                <section class="form">
                    <form class="reserva" id="formReserva">

                        <span class="spanReserva">E-MAIL</span>
                        <input type="text" name="input-email"placeholder="E-MAIL">
                        <span class="spanReserva">PASSWORD</span>
                        <input type="text" name="input-email" placeholder="PASSWORD">

                        <div class="confirmaForm">
                            <span class="spanReserva">Para ingresar clickee el logo</span>
                            <div class="divconfirmaCaptcha">

                            <button type="button" id="js-confirmarButton" class="confirmarButton">
                            <img src="./css/images/botoncaptcha.png" alt=""></button>
                            </div>

                            <div class="mensajeCAPTCHA">
                                <span id="js-mensajeCAPTCHA" class="hidden"></span>
                            </div>
                        </div>
                    </form>

                    <img class="studiodrums" src="./css/images/studiodrums.png" alt="Bateria
                    de Estudio">



                <section class="formAltaMarca">
                <p class="servicestitle">ALTA DE NUEVA MARCA</p>

                <form class="reserva" id="formReserva" method="POST" action="altaMarca>

                <span class="spanReserva">Tipo de componente</span>
                <input type="text" name="input-tipoComponente" placeholder="Tipo de componente">

                <span class="spanReserva">Modelo</span>
                <input type="text" name="input-modeloComponente" placeholder="Modelo">

                <span class="spanReserva">Precio en USD</span>
                <input type="number" name="input-precio" placeholder="Precio en USD">

                <span class="spanReserva">Gama</span>
                <input type="text" name="input-gama" placeholder="Gama">

                <span class="spanReserva">Marca</span>
                <select type="number" name="input-idMarca">
                <option>Shure</option>
                <option>Sennheiser</option>
                </select

                <br> 
                <button type="submit" name="insert" id="js-confirmarButton" class="confirmarButton">Agregar</button>
                </form>



                <section class="formAltaComponente">
                <p class="servicestitle">ALTA DE NUEVO COMPONENTE</p>

                <form class="reserva" id="formReserva" method="POST" action="altaComponente>

                <span class="spanReserva">Tipo de componente</span>
                <input type="text" name="input-tipoComponente" placeholder="Tipo de componente">

                <span class="spanReserva">Modelo</span>
                <input type="text" name="input-modeloComponente" placeholder="Modelo">

                <span class="spanReserva">Precio en USD</span>
                <input type="number" name="input-precio" placeholder="Precio en USD">

                <span class="spanReserva">Gama</span>
                <input type="text" name="input-gama" placeholder="Gama">

                <span class="spanReserva">Marca</span>
                <select type="number" name="input-idMarca">
                <option>Shure</option>
                <option>Sennheiser</option>
                </select

                <br> 
                <button type="submit" name="insert" id="js-confirmarButton" class="confirmarButton">Agregar</button>
                </form>

        


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

    function renderAltaNuevoComponente($tipo, $modelo, $precio, $gama, $id_marca) {
        $html = '
                <p class="servicestitle">ALTA DE NUEVO COMPONENTE</p>


                <section class="form">
                <form class="reserva" id="formReserva">

                    <span class="spanReserva">Tipo de componente</span>
                    <input type="text" name="input-tipoComponente" placeholder="Tipo de componente">

                    <span class="spanReserva">Modelo</span>
                    <input type="text" name="input-modeloComponente" placeholder="Modelo">

                    <span class="spanReserva">Precio en USD</span>
                    <input type="number" name="input-precio" placeholder="Precio en USD">

                    <span class="spanReserva">Gama</span>
                    <input type="text" name="input-gama" placeholder="Gama">

                    <span class="spanReserva">ID de marca</span>
                    <input type="number" name="input-idMarca" placeholder="ID de marca">

                    <div class="confirmaForm">
                        <span class="spanReserva">Agregar</span>

                        <div class="divconfirmaCaptcha">
                        <button type="button" id="js-confirmarButton" class="confirmarButton">Agregar</button>
                        </div>
        ';

        echo $html;
    }





}