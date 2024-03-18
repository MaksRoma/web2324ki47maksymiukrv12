// style.js

// Wait for the DOM content to be fully loaded before executing the script
document.addEventListener("DOMContentLoaded", function () {
  
  // Get references to DOM elements
  const menuIcon = document.getElementById('menu-icon');  
  const closeMenu = document.getElementById('close-menu');  
  const sidebar = document.querySelector('.sidebar');  

  // Add a click event listener to the menu icon
  menuIcon.addEventListener('click', function () {
    // When the menu icon is clicked, move the sidebar to the left (showing the menu)
    sidebar.style.left = '0';
  });

  // Add a click event listener to the close menu button
  closeMenu.addEventListener('click', function () {
    // When the close menu button is clicked, move the sidebar to the left (hiding the menu)
    sidebar.style.left = '-250px';
  });
});
