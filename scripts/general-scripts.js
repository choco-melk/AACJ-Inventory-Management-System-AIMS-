// HTML elements
const mainNavigation = document.querySelector('#main-navigation');

/*
    Resets classes when resizing or changing from desktop to phone styles or vice versa.
    This is to remove saved states from the phone styles or the desktop styles  

    The states being reset are:
    [1] The navigation bar being hidden by default in mobile devices
*/
let phoneMediaQuery = window.matchMedia("(max-width: 600px)");
phoneMediaQuery.addEventListener('change', ({ matches }) => {
    if (!mainNavigation.classList.contains('hidden-mobile')) {
        mainNavigation.classList.add('hidden-mobile');
    }   
});

/*
    Hamburger is a clickable icon where it toggles the main navigation of the 
    site to be shown or hidden on click. 
    
    Notes:
        [1] This does not reload the website. 
*/
const navigationHamburger = document.querySelector('#main-navigation-hamburger');
navigationHamburger.addEventListener("click", e => {
    console.log(mainNavigation.classList.toggle('hidden-mobile'));
});
