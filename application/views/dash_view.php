<div class="container">
    <div class="row justify-content-center">
        <div class="card mt-5 col-lg-10">
            <div class="card-header">
                <?php foreach ($user as $u) : ?>
                    Selamat datang <?= $u->username; ?>!
                <?php endforeach; ?>
            </div>
            <div class="card-body">

                <?= $this->session->flashdata('pesan'); ?>

                <?php if ($this->session->userdata('lvl') == '1') : ?>
                    <a href="<?= base_url('dash/tambah'); ?>" class="btn btn-primary">tambah barang</a>
                <?php endif; ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama barang</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <?php if ($this->session->userdata('lvl') == '1') : ?>
                                <th scope="col" colspan="2">Aksi</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($barang as $b) :
                        ?>
                            <tr>
                                <td scope="row"><?= $no++; ?></td>
                                <td scope="row"><?= $b->nama_barang; ?></td>
                                <td scope="row"><?= $b->kategori; ?></td>
                                <td scope="row">Rp.<?= $b->harga; ?></td>
                                <?php if ($this->session->userdata('lvl') == '1') : ?>
                                    <td scope="row">
                                        <?php echo anchor(base_url() . 'dash/edit/' . $b->id, '<button class ="btn btn-primary">edit</button>') ?>
                                    </td>
                                    <td scope="row">
                                        <a class="btn btn-primary" onclick="return confirm('Yakin ingin menghapus data ?')" href="<?= base_url() . 'dash/hapus/' . $b->id ?>">Hapus</a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <a href="<?= base_url(); ?>login/logout" class="btn btn-danger">logout</a>
            </div>
        </div>
    </div>
</div>

</body>

</html>