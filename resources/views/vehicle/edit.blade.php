<x-admin-layout>
   
    <div class="container">
        <h1>Vehicle Page</h1> 
        <form action="{{ route('vehicle.update', $vehicle->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInputId" class="form-label">ID</label>
                <input name="id" type="number" class="form-control" id="exampleFormControlInputId" value="{{ $vehicle->id }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputVehicleNumber" class="form-label">Vehicle Number</label>
                <input name="vehiclenumber" type="number" class="form-control" id="exampleFormControlInputVehicleNumber" value="{{ $vehicle->vehiclenumber }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputCapacity" class="form-label">Capacity </label>
                <input name="capacity" type="number" class="form-control" id="exampleFormControlInputCapacity" value="{{ $vehicle->capacity }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputType" class="form-label">Type</label>
                <select name="type" class="form-select" id="exampleFormControlInputType" value="{{ $vehicle->type }}">
                    <option value="available">Bus</option>
                    <option value="booked">Train</option>
                    <option value="cancelled">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInputType" class="form-label">Type</label>
                <input name="type" type="text" class="form-control" id="exampleFormControlInputType" value="{{ $vehicle->type }}">
            </div>
          
            <
            <div><button name="submit" type="submit" value="update">Update</button></div>
        </form>
   
        
    </div>
  
</x-admin-layout>
