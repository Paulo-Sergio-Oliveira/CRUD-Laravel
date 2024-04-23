<div class="modal fade mt-4" id="createRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"><b>New Register</b></h>
        </div>
        <div class="modal-body">
                <form action="{{ route('employee.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" 
                    @auth 
                    value="{{ auth()->user()->id }}" 
                    @endauth>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mb-1"><b>Full Name</b></label>
                            <input type="text" name="emp_name" class="form-control mb-2">
                        </div>
                        <div class="col-md-6">
                            <label class="mb-1"><b>Date of Birth</b></label>
                            <input type="date" name="dob" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="mb-1"><b>Phone Number</b></label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><b>Close</b></button>
            <button type="submit" class="btn btn-light"><b>Create</b></button>
        </form>
        </div>
      </div>
    </div>
</div>

@stack('create')