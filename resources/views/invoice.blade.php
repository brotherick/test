@extends('layouts.base');
@section('content')
  <div class="container">
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
          <td>{{ $invoice['client_id'] }}</td>
          <td>{{ $invoice['created_at']->format('Y-m-d') }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
