var slideIndex = 1;
showSlides(slideIndex,0);

function plusSlides(n,x) {
    showSlides(slideIndex += n,x);
}

function currentSlide(n,x) {
    showSlides(slideIndex = n,x);
}

function showSlides(n,x) {
    var i;
    var slides = document.getElementsByClassName("presSlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    if(x==0){
        setTimeout(function() {
            plusSlides(1,0);
        },7000);
    }
}