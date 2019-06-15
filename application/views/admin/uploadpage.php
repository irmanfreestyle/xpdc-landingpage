<div class="box-body">    
    <?php if($this->session->flashdata('alert') == 'success'): ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Berhasil</h4>            
        </div>
    <?php elseif($this->session->flashdata('alert') == 'error'): ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Gagal</h4>            
        </div>
    <?php endif; ?>
    <br>    
    <?php echo form_open_multipart('admin/uploadfile');?>
        <div class="form-group">
            <label class="text-success" for="gambar-judul">Pilih Gambar File (opsional)</label>
            <input type="file" id="gambar-judul" name="gambar_judul" onchange="uploadImage(this, '<?=base_url()?>')">          
            <div class="img-place">
                <!-- IMAGE PLACE HERE AFTER UPLOAD -->
            </div>
        </div>
        <div class="form-group">
            <label class="text-success">Pilih Kategori File</label>
            <select class="form-control">
                <option value="ebook">e-book</option>
                <option value="skripsi">skripsi</option>
                <option value="jurnal">jurnal</option>
            </select>
        </div>
        <div class="form-group">
            <label class="text-success" for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Masukan Judul">
        </div>
        <div class="form-group">
            <label class="text-success" for="pengarang">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" placeholder="Masukan Pengarang">
        </div>
        <div class="form-group">
            <label class="text-success" for="dosen-pembimbing">Dosen Pembimbing</label>
            <input type="text" class="form-control" id="dosen-pembimbing" placeholder="Masukan Dosen Pembimbing">
        </div>
        <div class="form-group">
            <label class="text-success" for="kata-kunci">Kata Kunci</label>
            <input type="text" class="form-control" id="kata-kunci" placeholder="Masukan Kata Kunci">
        </div>        
        <div class="form-group">
            <label class="text-success" for="file">Pilih File</label>
            <input type="file" id="file" required name="file">
            <p class="help-block">Pilih file yang ingin diupload</p>
        </div>    
        <div class="form-group">
            <button type="submit" class="btn btn-success">Upload</button>
        </div>
    </form>    
</div>
