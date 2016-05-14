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



});

var postRowTemplate = _.template(
    '<% _.forEach(posts, function(post) { %> ' +
    '<tr><td><%- post.topic %></td>' +
    '<td><%- post.replies.length %></td>' +
    '</tr><% }); %>'
);

var renderForum = function(data) {
    $('#forumBody').html(postRowTemplate(data));
};

var hideAndClear = function() {
    $('#newTopicForm').hide();
    $('#addNewTopic').show();
    $('#topic').val('');
    $('#message').val('');
};


