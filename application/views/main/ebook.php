<div class="container pt-5">
    <h4 class="text-center text-success font-weight-bold">Semua E-book</h4>
    <div class="d-flex flex-wrap justify-content-around">
        <?php for($i=0;$i<5;$i++): ?>     
            <a href="ebook/Jurnal-Ilmiah-Widya-Sosiopolitika">
                <div class="card my-3" style="width: 14rem;">
                    <img src="<?=base_url()?>assets/images/default/book.png" class="card-img-top">
                    <div class="card-body">
                        <h6 class="font-weight-bold text-success">
                            Jurnal Ilmiah Widya Sosiopolitika
                        </h6>
                        <button class="btn btn-block bg-success text-light">Lihat</button>
                    </div>
                </div>
            </a>
        <?php endfor; ?>
    </div>
</div>