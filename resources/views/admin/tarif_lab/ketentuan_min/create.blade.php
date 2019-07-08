
<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="/ketentuanminimal" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                 <div class="form-group">
                    <label for="id">No<a class="text-danger">*</a></label>
                    <div class="input-group">    
                        <input name="id" type="number" class="form-control" placeholder="No" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenis_cth">Peraturan</label> 
                    <div class="input-group">  	
                        <input name="jenis_cth" type="text" class="form-control" placeholder="Jenis Minimal" required>  	
                    </div>
                </div>
                <div class="form-group">
                    <label for="jml_min">Peraturan</label> 
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