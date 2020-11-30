"use strict"
let form_comment = document.querySelector("#js-form-comment");
let current_user = document.querySelector("#js-current-user");
let input_content = document.querySelector("#js-content");
let input_score = document.querySelector("#js-score");
let btn_comment_submit = document.querySelector("#js-btn-postComment");
let btns_comment_delete = document.querySelectorAll('button[data-comment-id]');

let comment_app = new Vue({
    el: '#app-comment',
    data: {
        comments: [],
        admin: false,
        not_empty: false
    },
    methods: {
        deleteComment(commentID) {
            fetch("api/comments/" + commentID, {
                method: 'DELETE',
                headers: { "Content-Type": "application/json" },
            })
                .then(response => console.log(response))
                .then(getCommentsByComponentID(form_comment.dataset.componentId))
                .catch(error => console.log(error));
        }
    }
})

document.addEventListener("DOMContentLoaded", () => {
    if (form_comment) {
        form_comment.addEventListener("submit", e => {
            e.preventDefault();
            postComment();
        });
        if (form_comment.dataset.userLvl == 1) {
            comment_app.admin = true;
        }
    }
    getCommentsByComponentID(form_comment.dataset.componentId);
});


function getComments() {
    fetch("api/comments")
        .then(response => response.json())
        .then(comments => comment_app.comments = comments)
        .catch(error => console.log(error));
}

async function getCommentsByComponentID(componentID) {
    let response = await fetch("api/comments/component/" + componentID);
    try {
        if (response.status === 200) {
            let newComments = await response.json();
            comment_app.comments = newComments;
            comment_app.not_empty = true;
        }
        else{
            console.log(response.status);
            comment_app.comments = [];
            comment_app.not_empty = false;
        }

    }
    catch (error) {
        console.log(error);
    }
}

/*
function getCommentsByComponentID(componentID) {
    fetch("api/comments/component/" + componentID)
        .then(response => response.json())
        .then(comments => {
            if(comments.ok) {
                comment_app.comments = comments;
                comment_app.not_empty = true;
            }
        })
        .catch(error => console.log(error));

}
*/

function postComment() {
    let comment = {
        content: input_content.value,
        score: input_score.value,
        user_id: form_comment.dataset.userId,
        id_component: form_comment.dataset.componentId
    };

    fetch("api/comments", {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(comment)
    })
        .then(response => response.json())
        .then(comment => {
            getCommentsByComponentID(comment.id_component);
            comment_app.comments.push(comment);
        })
        .catch(error => console.log(error));
}
