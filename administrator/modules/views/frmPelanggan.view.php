<div class="row">
    <div class="col-lg-12">
        <h1><?php echo $data["title"]; ?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li><a href="<?php SITE_URL; ?>?page=pelanggan"><i class="fa fa-users"></i> Pelanggan</a></li>
            <li class="active"><i class="fa fa-pencil"></i> <?php echo $data["title"]; ?></li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <?php
        if(isset($data["error"]) && count($data["error"]) > 0) {
            ?>
            <div class="alert alert-danger" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul class="list-square">
                    <?php
                    foreach($data["error"] as $error) {
                        ?>
                        <li>
                            <?php echo $error; ?>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        <?php

        }else if(isset($data["success"])) {
            ?>

            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $data["success"]; ?>
            </div>
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=pelanggan">

        <?php } ?>


        <!-- <div class="alert alert-info">
            
        </div> -->

        <form method="post" role="form" enctype="multipart/form-data">
            <table class="table-responsive table">

                <tbody>
                <tr>
                    <td style="width: 200px;"><label>Nama Pemilik</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="nama_lengkap" <?php if(isset($data["pelanggan"])) echo 'value="' . $data["pelanggan"]->nama_lengkap . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="email" name="email" <?php if(isset($data["pelanggan"])) echo 'value="' . $data["pelanggan"]->email . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Nomor HP</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="no_hp" <?php if(isset($data["pelanggan"])) echo 'value="' . $data["pelanggan"]->no_hp . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label>Alamat</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <textarea name="alamat" class="form-control" rows="5"><?php if(isset($data["pelanggan"])) echo $data["pelanggan"]->alamat; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;"><label>Nama Pet</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="nama_pet" <?php if(isset($data["pelanggan"])) echo 'value="' . $data["pelanggan"]->nama_pet . '"'; ?> class="form-control">
                    </td>
                </tr>
                <!-- <tr>
                    <td style="width: 200px;"><label>Username</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="username" <?php if(isset($data["pelanggan"])) echo 'value="' . $data["pelanggan"]->username . '" disabled'; ?> class="form-control">
                    </td>
                </tr> -->
                
               <!--  <tr>
                    <td style="width: 200px;"><label>Re-Type Password</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="password" name="re_password" class="form-control">
                    </td>
                </tr> -->
                <tr>
                    <td style="width: 200px;"><label>Jenis Pet</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select class="form-control" name="jenis_pet" >
                        <!-- <option value="">pilih...</option> -->
                        <option value="Anjing">Anjing</option>
                        <option value="Kucing">Kucing</option>
                        
                               
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;"><label>Umur Pet (bulan)</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="umur_pet" <?php if(isset($data["pelanggan"])) echo 'value="' . $data["pelanggan"]->umur_pet . '" '; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;"><label>Jenis Kelamin Pet</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                    <select class="form-control" name="jk_pet">
                        <!-- <option value="">pilih...</option> -->
                        <option value="Jantan">Jantan</option>
                        <option value="Betina">Betina</option>
                        

                        </select>
                        
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;"><label>Penyakit</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="penyakit" <?php if(isset($data["pelanggan"])) echo 'value="' . $data["pelanggan"]->penyakit . '" '; ?> class="form-control">
                    </td>
                </tr>
                <?php
                if(isset($data["pelanggan"])) {
                ?>
                <?php

                }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-warning" href="<?php echo PATH; ?>?page=pelanggan">Kembali</a> </td>
                </tr>
                </tbody>

            </table>
        </form>

    </div>
</div>