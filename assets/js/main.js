function toggleMenu() {
    const menuItems = document.querySelector('.menu-items');
    
    if (menuItems.classList.contains('visible')) {
        // Hide the menu
        menuItems.classList.remove('visible');
    } else {
        // Show the menu
        menuItems.classList.add('visible');
    }
}