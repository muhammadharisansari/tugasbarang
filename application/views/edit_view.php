<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            Edit data
        </div>
        <div class="card-body">
            <?php foreach ($barang as $b) : ?>
                <form action="<?= base_url() . 'dash/edit_aksi/' . $b->id ?>" method="post">

                    <a href="<?= base_url('dash'); ?>" class="btn btn-primary mb-3">Kembali</a>

                    <div class="mb-3">
                        <select class="form-select" name="kategori" aria-label="Default select example">
                            <option selected hidden><?= $b->kategori; ?></option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k->id_kat; ?>"><?= $k->kategori; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama barang</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $b->nama_barang; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga</label>
                        <input type="number" class="form-control" name="harga" id="harga" value="<?= $b->harga; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>

</body>

</html>