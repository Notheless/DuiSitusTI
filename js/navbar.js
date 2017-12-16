
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("lowernav").style.display = "none";
        document.getElementById("logo").src = "img/logo_mini.png";
    } else {
        document.getElementById("lowernav").style.display = "block";
        document.getElementById("logo").src = "img/logo_unpad.png";
    }
}