$(document).ready(function() {
    $("#home").click(function() {
        location.reload();
    });
    $("#about").click(function() {
        $("#bodydiv").load("./pages/aboutschool.html")
    });
    $("#gallery").click(function() {
        $("#bodydiv").load("./pages/gallery.html")
    });
    $("#results").click(function() {
        $("#bodydiv").load("./pages/results.html")
    });
    $("#news").click(function() {
        $("#bodydiv").load("./pages/news.html")
    });
    $("#login").click(function() {
        $("#bodydiv").load("./pages/login.html")
    });
    $("#teacherpanel").click(function() {
        $("#bodydiv").load("./pages/teacherpanel.html")
    });
    $("#adminpanel").click(function() {
        $("#bodydiv").load("./pages/admindashboard.html")
    });
});