// Get references to the relevant DOM elements
const locationSelect = document.getElementById('location-input');
const otherLocationInput = document.getElementById('otherLocation');
const saveLocationButton = document.getElementById('saveLocation');
const locationModal = document.getElementById('locationModal');
const closeButton = document.querySelector('.btn-close'); // Adjust the selector if necessary

// Flag to track if a custom location has been saved
let isCustomLocationSaved = false;

// Listen for the "Other" option being selected
locationSelect.addEventListener('change', function() {
    if (locationSelect.value === '5') { // '5' is the value for "Other"
        // Show the modal
        const modalInstance = new bootstrap.Modal(locationModal);
        modalInstance.show();

        // Clear the input field since "Other" was selected
        otherLocationInput.value = '';
    }
});

// When the user saves the location in the modal
saveLocationButton.addEventListener('click', function() {
    const newLocation = otherLocationInput.value;

    // If the input is not empty, update the select element with the new location
    if (newLocation) {
        // Create a new option with the entered location
        const newOption = new Option(newLocation, newLocation, true, true);

        // Clear existing custom locations (excluding preset ones like "Mindanao", "Luzon", and "Visayas")
        for (let i = locationSelect.options.length - 1; i >= 0; i--) {
            const option = locationSelect.options[i];
            // Keep preset options (by their value)
            if (option.value !== '0' && option.value !== '1' && option.value !== '2' && option.value !== '3' && option.value !== '4' && option.value !== '5') {
                locationSelect.remove(i); // Remove custom locations only
            }
        }

        // Add the new location option
        locationSelect.add(newOption); // Add the new option

        // Set the newly added location as the selected value
        locationSelect.value = newLocation; // Set the select to the new location

        // Set the flag to indicate that a custom location has been saved
        isCustomLocationSaved = true;
    }

    // Hide the modal
    bootstrap.Modal.getInstance(locationModal).hide();
});

// Listen for when the modal is hidden to reset the selector and input field
locationModal.addEventListener('hidden.bs.modal', function () {
    // Reset only if no custom location was saved
    if (!isCustomLocationSaved) {
        locationSelect.value = '0'; // Set to the default selected value (adjust if necessary)
    }

    // Clear the input field in the modal regardless
    otherLocationInput.value = ''; 
});

// Listen for the close button or cancel action
closeButton.addEventListener('click', function() {
    // This will also trigger the hidden event listener
    // Reset only if no custom location was saved
    if (!isCustomLocationSaved) {
        locationSelect.value = '0'; // Ensure the default value is set
    }
    otherLocationInput.value = ''; // Clear the input field
});
