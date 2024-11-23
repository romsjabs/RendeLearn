// number input
document.addEventListener('DOMContentLoaded', function () {
    const mobileInputField = document.getElementById('mobilenumber-input');
    const landlineInputField = document.getElementById('landlinenumber-input');

    // Function to allow special characters, one space, and prevent letters
    const validateInput = (inputField) => {
        inputField.addEventListener('input', function () {
            const originalValue = this.value; // Store the original value

            // Check if more than one consecutive space is attempted
            const hasMoreThanOneSpace = /\s{2,}/.test(this.value);

            // Remove leading spaces and ensure only one space between characters
            this.value = this.value.replace(/^\s+/, '') // Remove leading spaces
                                   .replace(/(?<=\S)\s{2,}/g, ' ') // Allow only one space between characters
                                   .replace(/[^0-9 @.#!$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g, ''); // Remove disallowed characters

            // Set custom validity messages based on conditions
            if (hasMoreThanOneSpace) {
                this.setCustomValidity('Cannot enter more than one consecutive space.');
            } else if (this.value !== originalValue) {
                this.setCustomValidity('Must be a number.');
            } else {
                this.setCustomValidity(''); // Clear the custom validity message
            }

            this.reportValidity(); // Trigger the popup
        });
    };

    // Apply validation to both inputs
    validateInput(mobileInputField);
    validateInput(landlineInputField);
});

// required field detect
document.addEventListener("DOMContentLoaded", function () {
    // Select all required input fields dynamically
    const requiredFields = document.querySelectorAll('input[required], select[required]');

    requiredFields.forEach(field => {
        // Create the warning message element and hide it initially
        const warning = document.createElement('div');
        warning.style.color = '#c01212';
        warning.style.fontSize = '12px';
        warning.style.position = 'absolute'; // Use absolute positioning
        warning.style.marginTop = '0'; // Adjust position below the field
        warning.style.display = 'none'; // Hidden initially
        warning.innerText = `This field is required.`;

        // Style the parent element as `relative` to ensure the warning positions correctly
        field.parentNode.style.position = 'relative';
        field.parentNode.appendChild(warning); // Append it after the field

        // Show warning on blur if the field is empty
        field.addEventListener('blur', function () {
            if (field.value.trim() === "" && !document.getElementById("same-add-yes").checked) {
                warning.style.display = 'block'; // Show the warning
                field.classList.add('invalid'); // Optional: add a red border
            } else {
                warning.style.display = 'none'; // Hide the warning
                field.classList.remove('invalid');
            }
        });

        // Remove warning on input (when user starts typing again)
        field.addEventListener('input', function () {
            if (field.value.trim() !== "") {
                warning.style.display = 'none'; // Hide the warning when the field is not empty
                field.classList.remove('invalid'); 
            }
        });
    });

    // Next Button Click Handler
    const nextButton = document.getElementById('next-button');
    nextButton.addEventListener('click', function (event) {
        let formIsValid = true;
        requiredFields.forEach(field => {
            // Check if field is empty and "Same Address" is not checked
            if (field.value.trim() === "" && !document.getElementById("same-add-yes").checked) {
                formIsValid = false;
                const warning = field.parentNode.querySelector('div');
                warning.style.display = 'block'; // Show the warning
                field.classList.add('invalid');
            }
        });

        // If the form is valid, proceed to the next page
        if (formIsValid) {
            window.location.href = "signup-step2.html"; // Navigate to the next page
        }
    });
});

// same address
function toggleAddressFields() {
    const sameAddYes = document.getElementById("same-add-yes").checked;
    const addressFields = [
        document.getElementById("customadd-input2"),
        document.getElementById("barangay-input2"),
        document.getElementById("city-input2"),
        document.getElementById("province-input2")
    ];

    // Enable or disable fields and required attribute based on the "Yes" radio button
    addressFields.forEach(field => {
        if (sameAddYes) {
            field.disabled = true; // Disable fields
            field.required = false; // Remove required attribute
            field.value = ''; // Clear the fields if they are disabled (optional)

            // Hide the warning message if displayed
            const warning = field.parentNode.querySelector('div');
            if (warning) {
                warning.style.display = 'none';
            }
        } else {
            field.disabled = false; // Enable fields
            field.required = true; // Add required attribute back
        }
    });
}

// if passport is selected
function toggleBackID() {
    const if_passport_yes = document.getElementById("if-passport-yes").checked;
    const back_id_input = document.getElementById("back-id-input");
    const back_id_preview = document.getElementById("back-id-preview"); // Get the preview element

    // Enable or disable the Back ID field based on the "Yes" radio button
    if (if_passport_yes) {
        back_id_input.disabled = true; // Disable the Back ID field
        back_id_input.required = false; // Remove the required attribute
        back_id_input.value = ''; // Clear the file input
        
        back_id_preview.src = ''; // Clear the preview image
        back_id_preview.style.display = 'none'; // Hide the preview image
    } else {
        back_id_input.disabled = false; // Enable the Back ID field
        back_id_input.required = true; // Make it required again
    }
}

// Function to preview uploaded image and adjust bottom margin
function previewImage(inputId, previewId) {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);

    const file = input.files[0];
    if (file) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result; // Set the image src to the file URL
            preview.style.display = 'block'; // Show the image

            // Center the image using JavaScript
            preview.style.margin = '10px auto'; // Horizontally center
            preview.style.display = 'block';    // Ensure block display for centering
            preview.style.marginBottom = '0'; // Modify bottom margin to 20px
        };
        
        reader.readAsDataURL(file); // Read the file
    } else {
        preview.src = ''; // Clear the src if no file is selected
        preview.style.display = 'none'; // Hide the image
    }
}

