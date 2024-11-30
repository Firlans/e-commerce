document.addEventListener('DOMContentLoaded', function() {
    const decreaseBtn = document.getElementById('decreaseQuantity');
    const increaseBtn = document.getElementById('increaseQuantity');
    const quantityInput = document.getElementById('quantityInput');
    
    const min = parseInt(quantityInput.getAttribute('min')) || 1;
    const max = parseInt(quantityInput.getAttribute('max')) || 99;

    // Function to update button states
    function updateButtonStates() {
        const currentValue = parseInt(quantityInput.value);
        
        // Disable/enable decrease button
        if (currentValue <= min) {
            decreaseBtn.classList.add('opacity-50', 'cursor-not-allowed', 'bg-amber-50');
            decreaseBtn.classList.remove('hover:bg-amber-200');
        } else {
            decreaseBtn.classList.remove('opacity-50', 'cursor-not-allowed', 'bg-amber-50');
            decreaseBtn.classList.add('hover:bg-amber-200');
        }
        
        // Disable/enable increase button
        if (currentValue >= max) {
            increaseBtn.classList.add('opacity-50', 'cursor-not-allowed', 'bg-amber-50');
            increaseBtn.classList.remove('hover:bg-amber-200');
        } else {
            increaseBtn.classList.remove('opacity-50', 'cursor-not-allowed', 'bg-amber-50');
            increaseBtn.classList.add('hover:bg-amber-200');
        }
    }

    // Function to validate and update quantity
    function updateQuantity(newValue) {
        // Ensure the value is a number and within bounds
        newValue = Math.max(min, Math.min(max, parseInt(newValue) || min));
        quantityInput.value = newValue;
        updateButtonStates();
    }

    // Event Listeners
    decreaseBtn.addEventListener('click', () => {
        const currentValue = parseInt(quantityInput.value);
        if (currentValue > min) {
            updateQuantity(currentValue - 1);
        }
    });

    increaseBtn.addEventListener('click', () => {
        const currentValue = parseInt(quantityInput.value);
        if (currentValue < max) {
            updateQuantity(currentValue + 1);
        }
    });

    // Handle direct input
    quantityInput.addEventListener('change', (e) => {
        updateQuantity(e.target.value);
    });

    // Handle invalid input on blur
    quantityInput.addEventListener('blur', () => {
        updateQuantity(quantityInput.value);
    });

    // Initialize button states
    updateButtonStates();
});