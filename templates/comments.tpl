<section class="commentsSection container">
    {include file="vue/comments.vue"}
    {if $user}
        <div class="row">
            <div class="col-md-12">
                <form action="postComment" method="POST" class="reserva" id="js-form-comment" data-user-id="{$user->id}" data-component-id="{$component->id_componente}" data-user-lvl="{$user->is_admin}">
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
                            <span class="spanReserva col-5 offset-1">Para publicar su comentario haga click en el logo</span>
                            <div class="offset-2 col-3">
                                <button type="submit" class="commentButton" id="js-btn-postComment">
                                    <img src="./css/images/botoncaptcha.png" alt=""></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    {/if}
</section>
<script src="./js/comments.js"></script>