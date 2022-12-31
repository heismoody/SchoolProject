$(document).ready(function () {
    $("#home").click(function(){
        location.reload();
    });
    $("#about").click(function(){
        $("#bodydiv").load("../pages/aboutschool.html")
    });
});
