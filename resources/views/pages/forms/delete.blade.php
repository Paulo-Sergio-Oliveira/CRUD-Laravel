<div class="modal fade mt-4" id="destroy-{{ $emp->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Register</h>
        </div>
        <div class="modal-body">
            Do you really want to delete this Register from the Database?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><b>Close</b></button>
          <form action="{{ route('employee.destroy', $emp->id) }}" method="post"
            style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-light shadow-none"><b>Confirm</b></button>
            </form>
        </div>
      </div>
    </div>
  </div>

@stack('delete')