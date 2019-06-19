<div class="unjani-header">
    <div class="unjani-header-image" style="background-image: url('<?=base_url()?>assets/images/default/header.jpg'"></div>    
    <form class="search-box" action="<?=base_url()?>home/search/" method="get">
        <input type="text" name="keyword" placeholder="Cari Jurnal atau E-book...">
        <button type="submit" class="search-btn">
            <i class="fas fa-search"></i>
        </button>
    </form>    
</div>


<div class="container py-5 text-center">
    <h3 class="font-weight-bold"><span class="text-success">REPOSITORY</span> FAKULTAS EKONOMI UNJANI</h3>
    <br>
    <div class="d-flex justify-content-around flex-wrap">
        <div class="unjani-main-card text-secondary py-3 px-3 my-3">
            <a href="<?=base_url()?>ebook" class="text-success"><h3>E-book Perkuliahan</h3></a>
            <i class="py-3 fas fa-book fa-3x"></i>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore eligendi officia possimus esse temporibus adipisci minus. Neque nesciunt magnam quae quo dolorum quis ipsam debitis asperiores pariatur
            </p>
            <a href="<?=base_url()?>ebook">
                <button class="btn btn-block bg-success text-light">Lihat E-book</button>
            </a>
        </div>

        <div class="unjani-main-card text-secondary py-3 px-3 my-3">
            <a href="" class="text-success"><h3>Repository</h3></a>
            <i class="py-3 fas fa-box-open fa-3x"></i>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore eligendi officia possimus esse temporibus adipisci minus. Neque nesciunt magnam quae quo dolorum quis ipsam debitis asperiores pariatur
            </p>
            <a href="<?=base_url()?>repository">
                <button class="btn btn-block bg-success text-light">Lihat Repository</button>
            </a>            
        </div>
    </div>
</div>

<div class="container-fluid d-flex justify-content-center">
    <div class="line"></div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col sm-12 md-6">
            <h5 class="text-success font-weight-bold">
                E-Book Upload Terbaru
            </h5>
            <div>
                <?php foreach($files as $file): ?>
                    <?php if($file->kategori == 'ebook'): ?>
                        <?php $ebook=1; ?>
                        <a class="card py-2 px-2 my-3" href="<?=base_url()?>detail?id_file=<?=$file->id_file?>">
                            <h6 class="text-secondary font-weight-bold">
                            <?=$file->judul?>
                            </h6>                            
                            <small class="text-secondary">
                                diupload pada <?= date('d M Y', strtotime($file->tgl_upload)); ?>
                            </small>
                            <div>
                                <button class="py-0 px-1 btn btn-sm btn-outline-success" disabled>
                                    <?=$file->kategori?>
                                </button>
                            </div>
                        </a>
                    <?php endif;?>
                <?php endforeach;?>
                <?php if(!isset($ebook)) {echo "<div class='text-secondary'>Tidak ada ebook</div>";} ?>
            </div>
        </div>
        <div class="col sm-12 md-6">
            <h5 class="text-info font-weight-bold">
                Repository Upload Terbaru
            </h5>
            <div>
                <?php foreach($files as $file): ?>
                    <?php if($file->kategori == 'skripsi' || $file->kategori == 'jurnal'): ?>
                        <?php $repo=1; ?>
                        <a class="card py-2 px-2 my-3" href="<?=base_url()?>detail?id_file=<?=$file->id_file?>">               
                            <h6 class="text-secondary font-weight-bold">
                            <?=$file->judul?>
                            </h6>                            
                            <small class="text-secondary">
                                diupload pada <?= date('d M Y', strtotime($file->tgl_upload)); ?>
                            </small>
                            <div>
                                <button class="py-0 px-1 btn btn-sm btn-outline-success" disabled>
                                    <?=$file->kategori?>
                                </button>
                            </div>
                        </a>
                    <?php endif;?>
                <?php endforeach;?>
                <?php if(!isset($repo)) {echo "<div class='text-secondary'>Tidak ada repository</div>";} ?>
            </div>
        </div>    
    </div>
</div>