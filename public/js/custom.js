// Add your custom scripts here

// Example: Display an alert on page load
document.addEventListener('DOMContentLoaded', function() {
    alert('Welcome to E_Ticket System!');
});

// Example: Toggle a class on click
document.addEventListener('click', function(event) {
    if (event.target.classList.contains('toggle-class-button')) {
        document.body.classList.toggle('dark-mode');
    }
});

