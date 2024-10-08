/*
 * Header - Height - JavaScript

// FIEL - javascript.js - for just js things, not jq
*/
// not being used yet here in { eurolab }, as it wasnt being used in wp_cowowo - it actually came fomr egiptlogia.online blankslate version .. 
// JS function to retrieve (header)#header height and set it as a CSS custom property, in order to use it in the (main)#content padding-top .. .aaaah nice, but I was referiing to use it to calc the hero banner image thingee...
(function() {
    // Function to set the CSS custom property
    function setHeaderHeight() {
        const header = document.getElementById('header');
        if (header) {
            const headerHeight = header.offsetHeight;
            document.documentElement.style.setProperty('--header-height', `${headerHeight}px`);
        }
        // alert('Hello World !');
    }

    // Event listeners for load, resize, and scroll
    window.addEventListener('load', setHeaderHeight);
    window.addEventListener('resize', setHeaderHeight);
    window.addEventListener('scroll', setHeaderHeight);

    // Initial call to set the custom property
    setHeaderHeight();
})();