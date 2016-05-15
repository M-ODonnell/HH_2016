$(document).ready(function() {
    $("h3.name").click(function () {
        $(this).next().toggleClass("show");
        $(this).parent("li").find(".rightt").toggleClass("show");
        $(this).parent("li").find(".down").toggleClass("show");
    });

    $('#sendMessage').click(function (){
        $(".green").toggleClass("hide");
    });
});