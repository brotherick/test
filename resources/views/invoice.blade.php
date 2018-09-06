
<div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th># Factura</th>
                    <th>Serie</th>
                    <th>Monto</th>
                    <th>Balance</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
            @foreach($invoices as $invoice)
                <tr>
                    <td>{{ $invoice['id'] }}</td>
                    <td>{{ $invoice['serie'] }}</td>
                    <td>{{ $invoice['monto'] }}</td>
                    <td>{{ $invoice['balance'] }}</td>
                    <td>{{ $invoice['cliente'] }}</td>
                    <td>{{ $invoice['created_at']->format('d-m-Y') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
</div>
