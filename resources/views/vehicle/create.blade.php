<x-admin-layout>
   
    <div class="container">
        <h1>Vehicle Page</h1> 
        <form action="{{ route('vehicle.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInputId" class="form-label">ID</label>
                <input name="id" type="number" class="form-control" id="exampleFormControlInputId">
            </div>
                
            <div class="mb-3">
                <label for="exampleFormControlInputVehicleNumber" class="form-label">Vehicle Number</label>
                <input name="vehiclenumber" type="number" class="form-control" id="exampleFormControlInputVehicleNumber">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputCapacity" class="form-label">Capacity </label>
                <input name="capacity" type="number" class="form-control" id="exampleFormControlInputCapacity">
            </div>
           
            
            <div class="mb-3">
                <label for="exampleFormControlInputType" class="form-label">Type</label>
                <select name="type" class="form-select" id="exampleFormControlInputType">
                    <option value="available">Bus</option>
                    <option value="booked">Train</option>
                    <option value="cancelled">Other</option>
                </select>
            </div>
           <div><button name="submit" type="submit" value="insert">Submit</button></div> 
        </form>
   
        
    </div>
  
</x-admin-layout>


