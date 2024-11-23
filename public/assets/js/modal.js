// Get the select elements
const locationSelect = document.getElementById('location-select');
const subjectSelect = document.getElementById('subject-select');

// Function to show the Bootstrap modal if "Other.." is selected
function checkForOtherOption(selectElement) {
    if (selectElement.value === '5' || selectElement.value === '4') {
        var myModal = new bootstrap.Modal(document.getElementById('otherModal'));
        myModal.show(); // Show the modal

        // Reset the select element when modal is hidden
        document.getElementById('otherModal').addEventListener('hide.bs.modal', function () {
            selectElement.selectedIndex = 0; // Reset to the first option
        });
    }
}

// Listen for changes in both select elements
locationSelect.addEventListener('change', function() {
    checkForOtherOption(this);
});

subjectSelect.addEventListener('change', function() {
    checkForOtherOption(this);
});
