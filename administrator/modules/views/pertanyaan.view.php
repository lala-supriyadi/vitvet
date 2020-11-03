<div class="row">
    <div class="col-lg-12">
        <h1>Pertanyaan</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-newspaper-o"></i> Pertanyaan</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <a href="<?php echo PATH; ?>?page=pertanyaan&&action=insert" class="btn btn-primary">+ Tambah Data Baru</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header">No</th>
                    <th class="header">Pertanyaan</th>
                    <th class="header" style="width:100px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["pertanyaan"] as $pertanyaan) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo substr(strip_tags($pertanyaan->pertanyaan), 0,100); ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="<?php echo SITE_URL; ?>?page=pertanyaan&&action=update&&id=<?php echo $pertanyaan->id_pertanyaan; ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="<?php echo SITE_URL; ?>?page=pertanyaan&&action=delete&&id=<?php echo $pertanyaan->id_pertanyaan; ?>" onclick="return confirm('Are you sure delete this data?');">Delete</a>
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