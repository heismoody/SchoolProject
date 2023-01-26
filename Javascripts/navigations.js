$(document).ready(function() {
    $("#home").click(function() {
        location.reload();
    });
    $("#about").click(function() {
        $("#bodydiv").load("./pages/aboutschool.html")
    });
    $("#gallery").click(function() {
        $("#bodydiv").load("./pages/gallery.php")
    });
    $("#results").click(function() {
        $("#bodydiv").load("./pages/results.html")
    });
    $("#news").click(function() {
        $("#bodydiv").load("./pages/news.php")
    });
    $("#login").click(function() {
        $("#bodydiv").load("./pages/login.php")
    });
    $("#teacherpanel").click(function() {
        $("#bodydiv").load("./pages/teacherpanel.html")
    });
    $("#adminpanel").click(function() {
        $("#bodydiv").load("./pages/admindashboard.html")
    });
    $("#applications").click(function() {
        $("#bodydiv").load("./pages/applications.php")
    });
});