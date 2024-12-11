<table class="table table-hover">
    <thead>
        <tr>
            <th>Date</th>
            <th>Transaction</th>
            <th>Reference</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allTransactions as $transaction)
            <tr>
                <td>{{ $transaction->transaction_date }}</td>
                <td>{{ $transaction->transaction_type }}</td>
                <td>{{ $transaction->reference_number }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
