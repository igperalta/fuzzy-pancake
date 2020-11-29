{literal}
<div class="row" id="app-comment">
            <div class="offset-1 col-md-10">
                <ul id="js-comment-list">
                    <li class="list-group-item list-group-item-dark" v-for="comment in comments">{{comment.email}} dijo: "{{comment.content}}" con un puntaje de {{comment.score}} </li>
                </ul>
            </div>
</div>
{/literal}