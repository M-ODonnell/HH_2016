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
        data.posts.push({"topic": newTopic, "message": newMessage, "replies": []});
        renderForum(data);
        hideAndClear();
    });
    $('#forumBody').click('a.expandPost', function(event) {
        event.preventDefault();
        console.log("EVENT: ", event);
        console.log('single post link clicked');
        var postID = $(event).data('post');
        renderPost(data.posts[postID]);
    });

});

var forumTemplate = _.template(
    '<table class="bordered highlight"><thead><tr><th>Topic</th><th>Replies</th></tr></thead><tbody>' +
    '<% _.forEach(posts, function(post, index) { %> ' +
    '   <tr><td><a href="#" class="expandPost" data-post="<%- index %>"><%- post.topic %></a></td>' +
    '   <td><%- post.replies.length %></td>' +
    '   </tr><% }); %>' +
    '</tbody></table>'
);

var postTemplate = _.template('<h3><%- post.topic %></h3><p><%- post.user %></p><p><%- post.message %></p>');

var renderForum = function(data) {
    $('#forumBody').html(forumTemplate(data));
};

var renderPost = function(data) {
    $('#forumBody').html(postTemplate(data));
};


var hideAndClear = function() {
    $('#newTopicForm').hide();
    $('#addNewTopic').show();
    $('#topic').val('');
    $('#message').val('');
};


