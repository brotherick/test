
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
                    <td>{{ $client['nombre'] }}</td>
                    <td>{{ $client['nit'] }}</td>
                    <td>{{ $client['direccion'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
</div>
