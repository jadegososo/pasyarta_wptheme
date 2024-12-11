function toggleMenu() {
    const menuItems = document.querySelector('.menu-items');
    
    if (menuItems.style.right === '-500px') {
        menuItems.style.right = '0'; // Show the menu
    } else {
        menuItems.style.right = '-500px'; // Hide the menu
    }
}




