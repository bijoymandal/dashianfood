<form action="{{route('admin.sliders.destroy',$slider->id)}}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
            <h5 class="text-center">Are you sure want to delete Slider ?</h5>
    </div>
    <div class="modal-footer" style="padding:0;">
        <button type="button" class="btn btn-secondary px-3 py-3" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
    </div>
</form>
