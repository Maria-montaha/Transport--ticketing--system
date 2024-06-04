<x-admin-layout>
   
    <div class="container">
        <h1>Ticket Page</h1> 
        <form action="{{ route('booking.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInputId" class="form-label">ID</label>
                <input name="id" type="number" class="form-control" id="exampleFormControlInputId">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputUserId" class="form-label">User ID</label>
                <input name="user_id" type="number" class="form-control" id="exampleFormControlInputUserId">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputScheduleId" class="form-label">Schedule ID</label>
                <input name="schedule_id" type="number" class="form-control" id="exampleFormControlInputScheduleId">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputBookingDate" class="form-label">Booking Date</label>
                <input name="booking_date" type="date" class="form-control" id="exampleFormControlInputBookingDate">
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInputStatus" class="form-label">Status</label>
                <select name="status" class="form-select" id="exampleFormControlInputStatus">
                    <option value="available">Confirmed</option>
                    <option value="booked">Cancelled</option>
                    <option value="cancelled">Pending</option>
                </select>
            </div>
           <div><button name="submit" type="submit" value="insert">Submit</button></div> 
        </form>
   
        
    </div>
  
</x-admin-layout>


