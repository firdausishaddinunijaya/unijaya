<div class="modal fade" id="baseAjaxModalContent" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Device</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" name="name" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" name="email" />
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" />
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" id="status" name="status" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-action="{{ route('users.update', $id) }}" onClick="btnUpdate(this)">Update Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

@include('js/edit')