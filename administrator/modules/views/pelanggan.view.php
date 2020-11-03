<div class="row">
    <div class="col-lg-12">
        <h1>Kelola Pelanggan</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-users"></i> Pelanggan</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <a href="<?php echo PATH; ?>?page=pelanggan&&action=insert" class="btn btn-primary">+ Tambah Data Baru</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header" style="width: 40px;">No</th>
                    <th>Nama Pemilik</th>
                    <th>Nama pet</th>
                    <th>Jenis Pet</th>
                    <th>Jenis Kelamin Pet</th>
                    <th class="header" style="width:150px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["pelanggan"] as $pelanggan) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <!-- <td>

                                <?php
                                    if($pelanggan->images) {
                                ?>
                                    <img src="../public/images/pelanggan/<?php echo $pelanggan->images; ?>" style="width: 50px;" alt="<?php echo $pelanggan->images; ?>">
                                <?php
                                }else{
                                ?>
                                    <img src="../resources/images/no_pelanggan.jpg" style="width: 50px;" alt="<?php echo $pelanggan->images; ?>">
                                <?php
                                }
                                ?>

                            </td> -->
                            <td><?php echo $pelanggan->nama_lengkap; ?></td>
                            <td><?php echo $pelanggan->nama_pet; ?></td>
                            <td><?php echo $pelanggan->jenis_pet; ?></td>
                            <td><?php echo $pelanggan->jk_pet; ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?php echo SITE_URL; ?>?page=pelanggan&&action=detail&&id=<?php echo $pelanggan->id_pelanggan; ?>">Detail</a>
                                <a class="btn btn-warning btn-sm" href="<?php echo SITE_URL; ?>?page=pelanggan&&action=update&&id=<?php echo $pelanggan->id_pelanggan; ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="<?php echo SITE_URL; ?>?page=pelanggan&&action=delete&&id=<?php echo $pelanggan->id_pelanggan; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>