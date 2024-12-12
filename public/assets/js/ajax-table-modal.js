$('#viewAllTransactionsModal').on('show.bs.modal', function () {
    loadModalPage(1); // Automatically load the first page
});

function loadModalPage(page) {
    $.ajax({
        url: '/transactions?page=' + page, // Adjust URL as necessary
        type: 'GET',
        success: function(data) {
            $('#modal-body tbody').empty(); // Clear existing data
            data.transactions.forEach(function(transaction) {
                $('#modal-body tbody').append(`
                    <tr>
                        <td>${transaction.transaction_date}</td>
                        <td>${transaction.transaction_type}</td>
                        <td>${transaction.reference_number}</td>
                    </tr>
                `);
            });
        },
        error: function() {
            console.error('Error loading transactions');
        }
    });
}