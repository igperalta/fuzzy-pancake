{include file="header.tpl"}
<p class="servicestitle">REGISTRAR NUEVO USUARIO</p>
<div class="contactossstudio">
    <section class="form">
        <form class="reserva" id="formReserva" action="registerUser" method="POST">

            <span class="spanReserva">E-MAIL</span>
            <input type="email" name="input-email" placeholder="E-MAIL" id="email">
            <span class="spanReserva">PASSWORD</span>
            <input type="password" name="input-pass" placeholder="PASSWORD" id="pass">

            <div class="confirmaForm">
                <span class="spanReserva">Para completar su registro haga click en el logo</span>
                <div class="divconfirmaCaptcha">

                    <button type="submit" class="confirmarButton">
                        <img src="./css/images/botoncaptcha.png" alt=""></button>
                </div>
            </div>
            <div class="mensajeLogin">
                <span>{$message}</span>
            </div>
        </form>

        <img class="studiodrums" src="./css/images/studiodrums.png" alt="Bateria
                    de Estudio">
        {include file="footer.tpl"}