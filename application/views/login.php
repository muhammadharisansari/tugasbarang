<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="card mt-5 col-lg-4">
            <div class="card-header">
                <h3 class="text-center">Login data barang</h3>
            </div>
            <div class="card-body">

                <?= $this->session->flashdata('pesan'); ?>

                <form action="login/cek" method="post">
                    <p>username :</p>
                    <input type="text" name="user" class="form-control mb-3">

                    <p>password :</p>
                    <input type="password" name="pass" class="form-control">
                    <br><br>
                    <button type="submit" class="btn btn-primary">login</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>