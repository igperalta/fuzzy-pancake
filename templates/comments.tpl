<section class="commentsSection container">
    {include file="vue/comments.vue"}
    <div class="row">
        <div class="col-md-12">
            <form method="POST" class="reserva" id="js-form-comment" {if $user}data-user-id="{$user->id}" data-user-lvl="{$user->is_admin}" {/if} data-component-id="{$component->id_componente}">
                {if $user}
                    <div class="formComments">
                        <span id="js-current-user">Comentando como {$user->email} </span>
                        <div class="row">
                            <label for="content" class="offset-1 col-1">Comentario:</label>
                            <input class="offset-2 col-8 contentInput" type="text" name="input-content" id="js-content">
                        </div>
                        <div class="row">
                            <label for="score" class="offset-1 col-2">Califique el equipo:</label>
                            <select name="input-score" id="js-score" class="offset-1 col-8">
                                <option value=""> --Calificacion-- </option>
                                <option value="1"> 1 - Malo </option>
                                <option value="2"> 2 - Regular </option>
                                <option value="3"> 3 - Bueno </option>
                                <option value="4"> 4 - Muy Bueno </option>
                                <option value="5"> 5 - Excelente </option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="d-flex flex-row align-items-center justify-content-center mt-3">
                                <span class="spanReserva col-5 offset-1">Para publicar su comentario haga click en el logo</span>
                                <button type="submit" class="commentButton" id="js-btn-postComment">
                                    <img src="./css/images/botoncaptcha.png" alt=""></button>
                            </div>
                        </div>
                    </div>
                {/if}
            </form>
        </div>
    </div>
</section>
<script src="./js/comments.js"></script>