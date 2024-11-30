document.addEventListener("DOMContentLoaded", function() {
    // Get the mobile menu button and the mobile menu itself
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    // Add event listener to toggle mobile menu visibility
    mobileMenuButton.addEventListener('click', function() {
        // Toggle the hidden class on the mobile menu
        mobileMenu.classList.toggle('hidden');
    });

    // Optional: Close the mobile menu when a link is clicked
    const menuLinks = document.querySelectorAll('#mobile-menu a');
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });
});
