let deleteInProgress = false;

document.getElementById('delete-button').addEventListener('click', function() {
    const selectColumn = document.querySelectorAll('.select-column');
    const checkboxes = document.querySelectorAll('.form-check-input.records');
    const cancelButton = document.getElementById('cancel-button');

    if (!deleteInProgress) {
        // First click: Show the select column and checkboxes
        selectColumn.forEach(cell => {
            cell.style.display = 'table-cell';
        });
        checkboxes.forEach(checkbox => {
            checkbox.style.display = 'inline'; // Ensure checkboxes are visible
        });
        cancelButton.style.display = 'inline'; // Show the cancel button
        deleteInProgress = true; // Set the flag to true
    } else {
        // Second click: Confirm deletion
        const selectedIds = [];
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                selectedIds.push(checkbox.value); // Get the ID from the checkbox value
            }
        });

        // Confirm deletion
        if (selectedIds.length > 0) {
            const confirmation = confirm("Are you sure you want to delete the selected records?");
            if (confirmation) {
                // Send AJAX request to delete records
                fetch('{{ route("user-records.delete") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
                    },
                    body: JSON.stringify({ delete: selectedIds }) // Send selected IDs as JSON
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Redirect to user records page after successful deletion
                        window.location.href = '{{ route("user-records") }}';
                    } else {
                        alert("An error occurred while deleting records.");
                    }
                })
                .catch(error => console.error("Error:", error));
            }
        } else {
            alert("No records selected for deletion.");
        }
        deleteInProgress = false; // Reset the flag
    }
});

// Cancel button functionality
document.getElementById('cancel-button').addEventListener('click', function() {
    const selectColumn = document.querySelectorAll('.select-column');
    const checkboxes = document.querySelectorAll('.form-check-input.records');
    const cancelButton = document.getElementById('cancel-button');

    // Hide the select column and checkboxes
    selectColumn.forEach(cell => {
        cell.style.display = 'none';
    });
    checkboxes.forEach(checkbox => {
        checkbox.checked = false; // Uncheck all checkboxes
        checkbox.style.display = 'none'; // Hide checkboxes
    });
    cancelButton.style.display = 'none'; // Hide the cancel button
    deleteInProgress = false; // Reset the flag
});

// Select All functionality
document.getElementById('select-all').addEventListener('change', function() {
    const checkboxes = document.querySelectorAll('.form-check-input.records');
    checkboxes.forEach(checkbox => {
        checkbox.checked = this.checked; // Set each checkbox to the state of the "Select All" checkbox
    });
});