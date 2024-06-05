<x-admin-layout>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
    <div class="container">
        {{-- <h1>Ticket Page</h1> --}}
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Vehicle Number</th>
                    <th scope="col">Capacity</th>
                    <th scope="col">Type</th>
             
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                 
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicle as $vehicle)
                    <tr>
                        <th scope="row">{{ $vehicle->id }}</th>
                        <td>{{ $vehicle->vehiclenumber }}</td>
                        <td>{{ $vehicle->capacity }}</td>
                        <td>{{ $vehicle->type }}</td>
                      
                        <td>{{ $vehicle->created_at }}</td>
                        <td>{{ $vehicle->updated_at }}</td>
                        <td>
                            <a href="{{ route('vehicle.edit', $vehicle->id) }}" class="btn btn-warning outline"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('vehicle.destroy', $vehicle->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" value="delete" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
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