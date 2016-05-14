/**
 * Created by modonnell on 5/14/16.
 */
$(document).ready(function() {
    $('#newTopicForm').hide();
    $.getJSON("./../data/forum.json", function(data) {
        console.log("DATA ", data);

    });
    $('#addNewTopic').click(function() {
        $('#newTopicForm').show();
        $('#addNewTopic').hide();
    });
    $('#cancelTopic').click(function() {
        $('#newTopicForm').hide();
        $('#addNewTopic').show();
    });
    $('#submitTopic').click(function() {

    });



});

var postRowTemplate = _.template(
    '<% _.forEach(posts, function(post) { %> }); %>'
    <tr>
        <td><%= topic %></td>
        <td><%= message %></td>
    </tr>
);