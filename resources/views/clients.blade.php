
<div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Nit</th>
                    <th>Direccion</th>
                </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client['name'] }}</td>
                    <td>{{ $client['nit'] }}</td>
                    <td>{{ $client['address'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
</div>
