<div class="modal fade" id="baseAjaxModalContent" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModalLabel">Show Device</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" disabled />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="email" disabled />
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" class="form-control" id="gender" disabled />
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" id="status" disabled />
                </div>
            </div>
        </div>
    </div>
</div>

@include('js/show')