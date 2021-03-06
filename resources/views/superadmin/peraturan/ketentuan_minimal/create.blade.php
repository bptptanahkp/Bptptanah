
<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="/tambahketentuan" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="id">Nomor</label> 
                    <div class="input-group">   
                        <input name="id" type="text" class="form-control" placeholder="Nomor">      
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenis_cth">Jenis Contoh<a class="text-danger">*</a></label> 
                    <div class="input-group">  	
                        <input name="jenis_cth" type="text" class="form-control" placeholder="Jenis Contoh" required>  	
                    </div>
                </div>
                <div class="form-group">
                    <label for="jml_min">Jumlah Minimal</label>
                    <div class="input-group">  	
                        <input name="jml_min" type="text" class="form-control" placeholder="Jumlah Minimal" required>
                    </div>
                </div>
        <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>