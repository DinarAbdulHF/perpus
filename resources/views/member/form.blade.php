<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
        {{ csrf_field() }} {{ method_field('POST') }}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"> &times; </span>
          </button>
          <h3 class="modal-title"></h3>
        </div>
        <div class="modal-body">
          <input type="hidden" id="id" name="id">
          <div class="form-group">
            <label for="name" class="col-md-3 control-label">No Anggota</label>
            <div class="col-md-6">
              <input type="text" id="no_member" name="no_member" class="form-control" autofocus required>
              <span class="help-block with-errors"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="col-md-3 control-label">Nama</label>
            <div class="col-md-6">
              <input type="text" id="name" name="name" class="form-control" autofocus required>
              <span class="help-block with-errors"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="city" class="col-md-3 control-label">Kota</label>
            <div class="col-md-6">
              <input type="city" id="city" name="city" class="form-control" required>
              <span class="help-block with-errors"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="photo" class="col-md-3 control-label">Alamat</label>
            <div class="col-md-6">
              <textarea class="form-control" name="address" id="address" rows="3"></textarea>
              <span class="help-block with-errors"></span>
            </div>
          </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-md-3 control-label">Nomer Telepone</label>
            <div class="col-md-6">
              <input type="tel" id="phone_number" name="phone_number" class="form-control" autofocus required>
              <span class="help-block with-errors"></span>
            </div>
          </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-save">OK</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>