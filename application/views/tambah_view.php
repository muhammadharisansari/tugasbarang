<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            Tambah data
        </div>
        <div class="card-body">

            <form action="<?= base_url() ?>dash/tambah_aksi" method="post">

                <a href="<?= base_url('dash'); ?>" class="btn btn-primary mb-3">Kembali</a>

                <div class="mb-3">
                    <select class="form-select" name="kategori_id" aria-label="Default select example">
                        <option selected hidden>Pilih kategori</option>
                        <?php foreach ($kategori as $k) : ?>
                            <option value="<?= $k->id_kat; ?>"><?= $k->kategori; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama barang</label>
                    <input type="text" class="form-control" name="nama_barang" id="nama">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" id="harga">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>

        </div>
    </div>
</div>

</body>

</html>