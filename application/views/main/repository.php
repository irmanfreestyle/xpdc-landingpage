<div class="container pt-5">    
    <h4 class="text-center text-success font-weight-bold">Repository Teknik Elektro Unjani</h4>
    <br><br>
    <div class="row py-3">
        <div class="col sm-12 md-6">
            <p class="font-weight-bold text-info text-center bg-light">
                Jurnal Teknik Elektro Unjani
            </p>
            <div class="d-flex flex-wrap flex-column align-items-center">
                <?php foreach($files as $file): ?>     
                    <?php if($file->kategori == 'jurnal'): ?>
                        <div class="card" style="width:14rem">
                            <a href="<?=base_url()?>detail?id_file=<?=$file->id_file?>" class="d-flex flex-column align-items-center text-center py-2 my-2 mx-2">
                                <?php if(strlen($file->gambar_file)): ?>
                                    <img src="<?=base_url()?>assets/images/upload/<?=$file->gambar_file?>" class="rounded float-left" width="100%" height="200px">
                                <?php else: ?>
                                    <img src="<?=base_url()?>assets/images/default/book.png" class="rounded float-left" width="100%" height="200px">
                                <?php endif; ?>
                                <p class="font-weight-bold text-success mb-0">
                                    <?=$file->judul?>
                                </p>   
                                <a href="<?=base_url()?>detail?id_file=<?=$file->id_file?>" class="btn btn-block bg-success text-light">Lihat</a>              
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col sm-12 md-6">
            <p class="font-weight-bold text-info text-center bg-light">
                Skripsi Teknik Elektro Unjani
            </p>
            <div class="d-flex flex-wrap flex-column align-items-center">
                <?php foreach($files as $file): ?>     
                    <?php if($file->kategori == 'skripsi'): ?>
                        <div class="card" style="width:14rem">
                            <a href="<?=base_url()?>detail?id_file=<?=$file->id_file?>" class="d-flex flex-column align-items-center text-center py-2 my-2 mx-2">
                                <?php if(strlen($file->gambar_file)): ?>
                                    <img src="<?=base_url()?>assets/images/upload/<?=$file->gambar_file?>" class="rounded float-left" width="100%" height="200px">
                                <?php else: ?>
                                    <img src="<?=base_url()?>assets/images/default/book.png" class="rounded float-left" width="100%" height="200px">
                                <?php endif; ?>
                                <p class="font-weight-bold text-success mb-0">
                                    <?=$file->judul?>
                                </p>   
                                <a href="<?=base_url()?>detail?id_file=<?=$file->id_file?>" class="btn btn-block bg-success text-light">Lihat</a>              
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>