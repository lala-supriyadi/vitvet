<div class="row">
    <div class="col-lg-12">
        <h1>Detail Pelanggan</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-users"></i> Detail Pelanggan</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">

        <table class="table-responsive table">

            <tbody>
            <tr>
                <td style="width: 200px;"><b>Nama Lengkap</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["pelanggan"]->nama_lengkap; ?>
                </td>
            </tr>
            <tr>
                <td><b>Email</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["pelanggan"]->email; ?>
                </td>
            </tr>
            <tr>
                <td><b>Nomor HP</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["pelanggan"]->no_hp; ?>
                </td>
            </tr>
            <tr>
                <td><b>Alamat</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["pelanggan"]->alamat; ?>
                </td>
            </tr>
            <tr>
                <td><b>Nama Pet</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["pelanggan"]->nama_pet; ?>
                </td>
            </tr>
            <tr>
                <td><b>Jenis Pet</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["pelanggan"]->jenis_pet; ?>
                </td>
            </tr>
            <tr>
                <td><b>Umur Pet (bulan)</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["pelanggan"]->umur_pet; ?>
                </td>
            </tr>
            <tr>
                <td><b>Jenis Kelamin Pet</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["pelanggan"]->jk_pet; ?>
                </td>
            </tr>
            <tr>
                <td><b>Penaykit</b></td>
                <td style="width: 1px;">:</td>
                <td>
                    <?php echo $data["pelanggan"]->penyakit; ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-primary" href="<?php echo SITE_URL; ?>?page=pelanggan">Kembali</a>
                    <a class="btn btn-warning" href="<?php echo SITE_URL; ?>?page=pelanggan&&action=update&&id=<?php echo $data["pelanggan"]->id_pelanggan; ?>">Edit</a>
                    <a class="btn btn-danger" href="<?php echo SITE_URL; ?>?page=pelanggan&&action=delete&&id=<?php echo $data["pelanggan"]->id_pelanggan; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
                </td>
            </tr>
            </tbody>

        </table>

    </div>
</div>