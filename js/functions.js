/* CUSTOM ON LOAD FUNCTIONS */
function documentCustomLoad() {
    "use strict";
    console.log('Functions Correctly Loaded');

    document.addEventListener("scroll", (event) => {
        var headerSticky = document.getElementById('mainHead');
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > 120) {
            headerSticky.classList.add('header-overlay');
        } else {
            headerSticky.classList.remove('header-overlay');
        }
    });
}

document.addEventListener("DOMContentLoaded", documentCustomLoad, false);
