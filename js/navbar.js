
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("lowernav").style.display = "none";
    } else {
        document.getElementById("lowernav").style.display = "block";
    }
}