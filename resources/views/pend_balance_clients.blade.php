@extends('layouts.base');
@section('content')
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Nit</th>
          <th>Direccion</th>
        </tr>
      </thead>
      <tbody>
        @foreach(json_decode($clients,true) as $client)
        <tr>
          <td>{{ $client['name'] }}</td>
          <td>{{ $client['nit'] }}</td>
          <td>{{ $client['address'] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
