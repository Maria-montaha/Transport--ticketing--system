<x-admin-layout>
   
    <div class="container">
        <h1>Ticket Page</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Schedule ID</th>
                    <th scope="col">Booking Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($booking as $booking)
                    <tr>
                        <th scope="row">{{ $booking->id }}</th>
                        <td>{{ $booking->user_id }}</td>
                        <td>{{ $booking->schedule_id }}</td>
                        <td>{{ $booking->BookingDate }}</td>
                        <td>{{ $booking->Status }}</td>
                        <td>{{ $booking->created_at }}</td>
                        <td>{{ $booking->updated_at }}</td>
                        <td>
                            <a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-warning outline">Edit</a>
                            <form action="{{ route('booking.destroy', $booking->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" value="delete" class="btn btn-danger"><i class="bi bi-trash3"></i>DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <table class="table table-striped">
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
       
        </table> --}}
    </div>
  
</x-admin-layout>