<div class="box-body">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#ebook_tab" data-toggle="tab">E-BOOK</a></li>
            <li><a href="#jurnal_tab" data-toggle="tab">JURNAL</a></li>
            <li><a href="#skripsi_tab" data-toggle="tab">SKRIPSI</a></li>        
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="ebook_tab">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Dosen Pembimbing</th>
                            <th>Kata Kunci</th>
                            <th>File</th>       
                            <th>Tanggal Upload</th>      
                            <th>Aksi</th>               
                        </tr>
                        <?php $no=1; foreach($files as $file): ?>
                            <?php if($file->kategori == 'ebook'):?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td>
                                        <?php if(strlen($file->gambar_file)): ?>
                                            <img src="<?=base_url()?>assets/images/upload/<?=$file->gambar_file?>" width="80">
                                            <?php else: ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo strlen($file->judul)? $file->judul : '-'?></td>
                                    <td><?php echo strlen($file->pengarang)? $file->pengarang : '-'?></td>
                                    <td><?php echo strlen($file->dosen_pembimbing)? $file->dosen_pembimbing : '-'?></td> 
                                    <td><?php echo strlen($file->kata_kunci)? $file->kata_kunci : '-'?></td>
                                    <td>
                                        <a href="<?=base_url()?>assets/files/<?=$file->nama_file?>" download>Download File</a>
                                    </td>
                                    <td>
                                        <?= date('d M Y', strtotime($file->tgl_upload)); ?>
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-sm">Edit</button>
                                        <a href="admin/deletefile?id_file=<?=$file->id_file?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endif;?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="jurnal_tab">
            The European languages are members of the same family. Their separate existence is a myth.
            For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
            in their grammar, their pronunciation and their most common words. Everyone realizes why a
            new common language would be desirable: one could refuse to pay expensive translators. To
            achieve this, it would be necessary to have uniform grammar, pronunciation and more common
            words. If several languages coalesce, the grammar of the resulting language is more simple
            and regular than that of the individual languages.
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="skripsi_tab">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
</div>
</div>