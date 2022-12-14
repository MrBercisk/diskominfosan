<div class="modal fade" id="modalAdd">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Input Data Kategori <?=$nama_bidang; ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formInputDataKategori">
        <input type="hidden" name="bidang_id" value="<?php echo $id_bidang; ?>">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori">
            <small id="nama_kategori_error" class="text-danger"> </small>
          </div>
          <div class="form-group">
            <label for="syarat">Syarat Magang</label>
            <input type="text" class="form-control" name="syarat" placeholder="Syarat Magang">
            <small id="syarat_error" class="text-danger"> </small>
          </div>
          <div class="form-group">
            <label for="tugas">Tugas Magang</label>
            <input type="text" class="form-control" name="tugas" placeholder="Tugas Magang">
            <small id="tugas_error" class="text-danger"> </small>
          </div>
        </div>
      </form>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btn-saveDataKategori"class="btn btn-primary">Save</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>