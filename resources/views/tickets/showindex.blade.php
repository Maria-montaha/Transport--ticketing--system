<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEva6P9RGNhf6H7P7EYcCWt4eHiBfTTbfIL6pVoS8ZRbY" crossorigin="anonymous">
    <title>Ticket Page</title>
</head>
<body>
    <h1>Ticket Page</h1>
    <div class="container">
        <h1>Ticket Page</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Route ID</th>
                    <th scope="col">Purchase Date</th>
                    <th scope="col">Travel Date</th>
                    <th scope="col">Travel Time</th>
                    <th scope="col">Seat Number</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                <tr>
                    <th scope="row">{{ $ticket->id }}</th>
                    <td>{{ $ticket->user_id }}</td>
                    <td>{{ $ticket->route_id }}</td>
                    <td>{{ $ticket->purchaseDate }}</td>
                    <td>{{ $ticket->traveldate }}</td>
                    <td>{{ $ticket->traveltime }}</td>
                    <td>{{ $ticket->seatnumber }}</td>
                    <td>{{ $ticket->price }}</td>
                    <td>{{ $ticket->created_at }}</td>
                    <td>{{ $ticket->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
       
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6HV2Tqx4YXbwWiG+J5bMOYeYZWOyU85jhj9JZNMmXLwGj4tW+5oCqxb6Jxn" crossorigin="anonymous"></script>
</body>
</html>
</table>

