/**
 * Created by modonnell on 5/14/16.
 */
$(document).ready(function() {
    var data;
    $('#newTopicForm').hide();

    $.getJSON("./../data/forum.json", function(inData) {
        data = inData;
        renderForum(data);
    });
    $('#addNewTopic').click(function() {
        $('#newTopicForm').show();
        $('#addNewTopic').hide();
    });

    $('#cancelTopic').click(function() {
        hideAndClear();
    });
    $('#submitTopic').click(function() {
        var newTopic = $('#topic').val();
        var newMessage = $('#message').val();
        data.posts.push({"topic": newTopic, "message": newMessage, "replies": [], "user": "Guest"});
        renderForum(data);
        hideAndClear();
    });
    $('#forumBody').on('click', 'a.expandPost', function(event) {
        event.preventDefault();
        var postID = $(event.target).data('post');
        renderPost(data.posts[postID]);
    });

    $('#forumBody').on('click', '#replyToTopic', function(event) {
        event.preventDefault();
        $('#replyForm').show();
    });

    $('#forumBody').on('click', '#cancelReply', function() {
        hideAndClearReply();
    });
});

var forumTemplate = _.template(
    '<h3>Discussion</h3>'+
    '<table class="bordered highlight"><thead><tr><th>Topic</th><th>Replies</th></tr></thead><tbody>' +
    '<% _.forEach(posts, function(post, index) { %> ' +
    '   <tr><td><a href="#" class="expandPost" data-post="<%- index %>"><%- post.topic %></a></td>' +
    '   <td><%- post.replies.length %></td>' +
    '   </tr><% }); %>' +
    '</tbody></table>'
);

var postTemplate = _.template(
    '<div class=""><h3><%- topic %></h3><p><strong><%- user %></strong></p><p><%- message %></p></div>'+
    '<% _.forEach(replies, function(reply, index) { %> ' +
    '<div class="card"><p><strong><%-reply.user%></strong></p><p><%-reply.message%></p></div>'+
    '<% }); %>'+
    '<div class="row">'+
        '<a class="waves-effect waves-light btn col s12" id="replyToTopic"><i class="material-icons left">add</i>Reply</a>'+
    '</div>'+
    '<div class="row">'+
        '<form class="col s12" id="replyForm">'+
            '<div class="row">'+
                '<div class="input-field col s12">'+
                    '<input id="reply" type="text">'+
                    '<label for="reply">Reply</label>'+
                '</div>'+
            '</div>'+
            '<div class="row">'+
                '<a class="waves-effect waves-light btn" id="submitReply">Post</a>'+
                '<a class="waves-effect waves-light btn" id="cancelReply">Cancel</a>'+
            '</div>'+
        '</form>'+
    '</div>'
);

var renderForum = function(data) {
    $('#forumBody').html(forumTemplate(data));
};

var renderPost = function(data) {
    console.log('data in renderPost: ', data);
    $('#forumBody').html(postTemplate(data));
    $('#replyForm').hide();
};

var hideAndClear = function() {
    $('#newTopicForm').hide();
    $('#addNewTopic').show();
    $('#topic').val('');
    $('#message').val('');
};

var hideAndClearReply = function() {
    console.log('derpa derpa');
    $('#replyForm').hide();
    $('#reply').val('');
};


