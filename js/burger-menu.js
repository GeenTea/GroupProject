// Function to toggle the visibility of the burger menu
const burger_menu = () => {
    // Get the navigation bar element
    const menu = document.getElementById('nav-bar');

    // Check if the menu is currently hidden
    if (menu.style.visibility === 'hidden') {
        // Make the menu and related elements visible
        menu.style.visibility = 'visible';
        document.getElementById('nav-bar-constructor').style.visibility = 'visible';
        document.getElementsByClassName('white-scene')[0].style.visibility = 'visible';
    } else {
        // Hide the menu and related elements
        menu.style.visibility = 'hidden';
        document.getElementById('nav-bar-constructor').style.visibility = 'hidden';
        document.getElementsByClassName('white-scene')[0].style.visibility = 'hidden';
    }
}