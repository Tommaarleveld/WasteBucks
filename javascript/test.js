function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

function fadeOut(el){el.style.opacity=1;(function fade(){if((el.style.opacity-=.1)<0){el.style.display="none";}else{requestAnimationFrame(fade);}})();}


animateValue("wb-ammount", 1200, 1210, 1200);
animateValue("wc-number", 322, 323, 200);
fadeOut("#plusNumber");

