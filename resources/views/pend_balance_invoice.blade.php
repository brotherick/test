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
          <th>Id Cliente</th>
          <th>Fecha</th>
        </tr>
      </thead>
      <tbody>
        @foreach(json_decode($invoices,true) as $invoice)
        @php $date = date('Y-m-d',strtotime($invoice['created_at'])); @endphp
        <tr>
          <td>{{ $invoice['id'] }}</td>
          <td>{{ $invoice['serie'] }}</td>
          <td>{{ $invoice['monto'] }}</td>
          <td>{{ $invoice['balance'] }}</td>
          <td>{{ $invoice['client_id'] }}</td>
          <td>{{ $date }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
