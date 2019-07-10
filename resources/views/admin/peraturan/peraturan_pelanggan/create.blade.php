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
            <form action="/peraturanpelanggan" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                 <div class="form-group">
                    <label for="id">No</label>
                    <div class="input-group">    
                        <input name="id" type="number" class="form-control" placeholder="No">
                    </div>
                </div>
                <div class="form-group">
                    <label for="peraturan">Peraturan</label> 
                    <div class="input-group">  	
                        <input name="peraturan" type="text" class="form-control" placeholder="Peraturan" required>  	
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