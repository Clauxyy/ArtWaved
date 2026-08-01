document.addEventListener('DOMContentLoaded', function() {
    // Funcția care controlează vizibilitatea
    function handleToggle(checkbox) {
        var container = checkbox.closest('.aw-checkbox-option');
        if (!container) return;
        var input = container.querySelector('.aw-input-conditional');
        if (!input) return;

        if (checkbox.checked) {
            container.classList.add('bifat');
            input.style.display = 'inline-block'; // forțează afișarea
        } else {
            container.classList.remove('bifat');
            input.style.display = 'none';
        }
    }

    // Găsește toate checkbox-urile cu clasa .aw-toggle-conditional
    var toggles = document.querySelectorAll('.aw-toggle-conditional');
    toggles.forEach(function(checkbox) {
        // Setează starea inițială
        handleToggle(checkbox);

        // Ascultă evenimentul change
        checkbox.addEventListener('change', function() {
            handleToggle(this);
        });
    });
});