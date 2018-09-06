<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <title></title>
</head>
<body>
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
    <div class="col-md-2 col-md-offset-5">
      <a href="/">
      <button type="button" class="btn btn-lg btn-info"name="button">Home</button>
      </a>
    </div>
  </div>
</body>
</html>
