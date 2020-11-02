<div class="form-group">        
    <label>Created at</label>
    <input type="text" class="form-control" value="{{ $device->created_at ?? '' }}" placeholder="Created at" name="created_at">
</div>

<div class="form-group">        
    <label>Deleted at</label>
    <input type="text" class="form-control" value="{{ $device->deleted_at ?? '' }}" placeholder="Deleted at" name="deleted_at">
</div>

<div class="form-group">        
    <label>Device name</label>
    <input type="text" class="form-control" value="{{ $device->device_name ?? '' }}" placeholder="Device name" name="device_name">
</div>

<div class="form-group">        
    <label>Id</label>
    <input type="text" class="form-control" value="{{ $device->id ?? '' }}" placeholder="Id" name="id">
</div>

<div class="form-group">        
    <label>Lat</label>
    <input type="text" class="form-control" value="{{ $device->lat ?? '' }}" placeholder="Lat" name="lat">
</div>

<div class="form-group">        
    <label>Lng</label>
    <input type="text" class="form-control" value="{{ $device->lng ?? '' }}" placeholder="Lng" name="lng">
</div>

<div class="form-group">        
    <label>Phone number</label>
    <input type="text" class="form-control" value="{{ $device->phone_number ?? '' }}" placeholder="Phone number" name="phone_number">
</div>

<div class="form-group">        
    <label>Updated at</label>
    <input type="text" class="form-control" value="{{ $device->updated_at ?? '' }}" placeholder="Updated at" name="updated_at">
</div>
