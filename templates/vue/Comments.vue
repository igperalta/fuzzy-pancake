{literal}
<div id="app-comment">
    <ul class="list-group" v-if="not_empty">
        <li class="list-group-item list-group-item-dark flex-row justify-content-center align-items-center" v-for="comment in comments">
            <div class="d-flex w-500 justify-content-between">
                <h5 class="mb-1">{{comment.email}} dijo:</h5>
                <small>{{comment.score}}/5</small>
            </div>
            <p class="mb-1">"{{comment.content}}"</p>
            <div v-if="admin" class="d-flex align-items-end flex-column">
                <button :data-comment-id="comment.id_comment" 
                type="button" 
                class="btn btn-danger mt-auto p-2"
                v-on:click="deleteComment(comment.id_comment)"
                >Delete</button>
            </div>
        </li>
    </ul>
    <h3 v-else> No se encontraron comentarios para este componente. </h1>
</div>
{/literal}