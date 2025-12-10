/**
 * Main JavaScript File
 * Simple interactive features
 */

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('Hello PHP + MySQL - Page loaded successfully!');
    
    // Add some interactivity
    const statusElement = document.getElementById('db-status');
    if (statusElement) {
        // Add a subtle animation when page loads
        statusElement.style.transition = 'color 0.3s ease';
        
        // Example: Change color on hover (if you want to add more interactivity)
        statusElement.addEventListener('mouseenter', function() {
            this.style.color = '#2c3e50';
        });
        
        statusElement.addEventListener('mouseleave', function() {
            this.style.color = '#27ae60';
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});

// Display a welcome message
window.addEventListener('load', function() {
    console.log('Welcome to PHP + MySQL Project!');
});

