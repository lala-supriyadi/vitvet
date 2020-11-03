<div class="row">
    <div class="col-lg-12">
        <h1>Menu</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-th-large"></i> Menu</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <a href="<?php echo PATH; ?>?page=menu&&action=insert" class="btn btn-primary">+ Tambah Data Baru</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header" style="width: 40px;">No</th>
                    <th class="header">Menu</th>
                    <th class="header" style="width:100px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["menu"] as $menu) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $menu->menu_name; ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="<?php echo SITE_URL; ?>?page=menu&&action=update&&id=<?php echo $menu->menu_id; ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="<?php echo SITE_URL; ?>?page=menu&&action=delete&&id=<?php echo $menu->menu_id; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
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