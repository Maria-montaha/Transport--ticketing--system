
<x-admin-layout>
   
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
  
</x-admin-layout>


