<div class="unjani-header">
    <div class="unjani-header-image" style="background-image: url('<?=base_url()?>assets/images/default/header.jpg'"></div>
    <div class="search-box">
        <input type="text" placeholder="Cari Jurnal atau E-book...">
        <div class="search-btn">
            <i class="fas fa-search"></i>
        </div>
    </div>
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
            <button class="btn btn-block bg-success text-light">Lihat Repository</button>
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
                <?php for($i=0;$i<6;$i++): ?>
                    <div class="card py-2 px-2 my-3">
                        <a href="">
                            <h6 class="text-secondary font-weight-bold">
                                PENGARUH ETIKA PROFESI AUDITOR TERHADAP PERTIMBANGAN TINGKAT MATERIALITAS DALAM PEMERIKSAAN LAPORAN KEUANGAN   
                            </h6>
                        </a>
                        <small class="text-secondary">
                            diupload pada 12 Juni 2019
                        </small>
                    </div>
                <?php endfor;?>
            </div>
        </div>
        <div class="col sm-12 md-6">
            <h5 class="text-info font-weight-bold">
                Repository Upload Terbaru
            </h5>
            <div>
                <?php for($i=0;$i<6;$i++): ?>
                    <div class="card py-2 px-2 my-3">
                        <a href="">
                            <h6 class="text-secondary font-weight-bold">
                            CAPITAL ASSET PRICING MODEL (CAPM) SEBAGAI SALAH SATU METODE UNTUK MENENTUKAN SAHAM EFISIEN
                            </h6>
                        </a>
                        <small class="text-secondary">
                            diupload pada 12 Juni 2019
                        </small>
                    </div>
                <?php endfor;?>
            </div>
        </div>    
    </div>
</div>