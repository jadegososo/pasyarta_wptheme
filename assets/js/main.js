function toggleMenu() {
    const menuItems = document.querySelector('.menu-items');
    
    if (menuItems.style.right === '-500px') {
        // Show the menu
        menuItems.style.right = '0';
                 
    } else {
         // Hide the menu
        menuItems.style.right = '-500px';
        
    }
}




