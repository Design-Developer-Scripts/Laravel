require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.getElementById('menu_botton_botton').addEventListener('click',function(){
    var element = document.getElementById("menu_botton");
    element.classList.toggle("active");
});

document.getElementById('scrolltop').addEventListener('click',function(){
    // scrollt zu einer bestimmten id
    // menu closed
    element = document.getElementById("menu_botton");
    element.classList.remove("active");

    // scroll top
    var to = 0;
    var duration = 1000;

    var element = document.scrollingElement || document.documentElement,
    start = element.scrollTop,
    change = to - start,
    startTs = performance.now(),
    // t = current time
    // b = start value
    // c = change in value
    // d = duration
    easeInOutQuad = function(t, b, c, d) {
        t /= d/2;
        if (t < 1) return c/2*t*t + b;
        t--;
        return -c/2 * (t*(t-2) - 1) + b;
    },
    animateScroll = function(ts) {
        var currentTime = ts - startTs;
        element.scrollTop = parseInt(easeInOutQuad(currentTime, start, change, duration));
        if(currentTime < duration) {
            requestAnimationFrame(animateScroll);
        }
        else {
            element.scrollTop = to;
        }
    };
    requestAnimationFrame(animateScroll);
});