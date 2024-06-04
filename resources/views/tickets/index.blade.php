
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking</title>
    <style>
        table {
            width: 100%;
        }

        table,
        td {
            border-right: 1px solid gray;
            border-bottom: 1px solid gray;
        }
tr:nth-child(odd){background-color: rgb(182, 212, 144);}
tr:nth-child(even){background-color: rgb(240, 226, 233);}
        tr:hover{background-color:rgb(220, 202, 177)}

    </style>
</head>

<body>
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
  
</body>

</html>