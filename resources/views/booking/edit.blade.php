<x-admin-layout>
   
    <div class="container">
        <h1>Ticket Page</h1> 
        <form action="{{ route('booking.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInputId" class="form-label">ID</label>
                <input name="id" type="number" class="form-control" id="exampleFormControlInputId" value="{{ $booking->id }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputUserId" class="form-label">User ID</label>
                <input name="user_id" type="number" class="form-control" id="exampleFormControlInputUserId" value="{{ $booking->user_id }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputScheduleId" class="form-label">Schedule ID</label>
                <input name="schedule_id" type="number" class="form-control" id="exampleFormControlInputScheduleId" value="{{ $booking->schedule_id }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputBookingDate" class="form-label">Booking Date</label>
                <input name="booking_date" type="date" class="form-control" id="exampleFormControlInputBookingDate" value="{{ $booking->booking_date }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputStatus" class="form-label">Status</label>
                <input name="status" type="text" class="form-control" id="exampleFormControlInputStatus" value="{{ $booking->status }}">
            </div>
            <div><button name="submit" type="submit" value="update">Update</button></div>
        </form>
   
        
    </div>
  
</x-admin-layout>