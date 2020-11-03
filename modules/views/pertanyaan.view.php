
<div id="body">
    <div style="padding-left: 70px;padding-right: 70px;">
        <div class="">
        <!-- INFORMASI TERBARU -->
            <br/><br/>
            <h2 class="title-top">Form Kepuasan</h2>
            <?php 
                if (empty($data["success"])) {
            ?>
                <h5>.</h5>
            <?php
                }else{
            ?>  
                <h5>Anda Sudah Mengisi kuesioner Untuk Hari ini </h5>
            <?php        
                }
            ?>
            
                <form method="post" role="form">
                    <table class="table table-bordered " border="0" width="100%">
                        <tr >
                            <td>Email</td>
                            <?php $tanggal = date("Y-m-d") ?>
                            <td colspan="2">
                                <input type="text" name="email" class="form-control" style="width:100%" required>
                                <input type="hidden" name="tanggal" value="<?php echo $tanggal ?>" class="form-control" style="width:100%" required>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No</td>
                            <td>Pertanyaan </td>
                            <td>Nilai</td>
                        </tr>
                        <?php
                        $no = 1; 
                        foreach($data["pertanyaan"] as $pertanyaan) {
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $pertanyaan->pertanyaan; ?></td>
                                <td>
                                    <input type="hidden" class="form-control" name="id_pertanyaan<?php  echo $no ?>" value="<?php echo $pertanyaan->id_pertanyaan; ?>">
                                    <label><input type="radio" name="nilai<?php  echo $no ?>" id="nilai<?php  echo $no ?>" value="1"> Tidak Puas</label>
                                    <label><input type="radio" name="nilai<?php  echo $no ?>" id="nilai<?php  echo $no ?>" value="2"> Kurang Puas</label>
                                    <label><input type="radio" name="nilai<?php  echo $no ?>" id="nilai<?php  echo $no ?>" value="3"> Biasa Saja</label>
                                    <label><input type="radio" name="nilai<?php  echo $no ?>" id="nilai<?php  echo $no ?>" value="4"> Puas</label>
                                    <label><input type="radio" name="nilai<?php  echo $no ?>" id="nilai<?php  echo $no ?>" value="5"> Sangat Puas</label>
                                </td>
                            </tr>
                        <?php $no++; } ?>

                    </table>
                    <input type="hidden" class="form-control" name="jumlah_data" value="<?php echo $no; ?>">
                    <button type="submit" class="btn btn-primary">Submit</button> 
                </form>
        </div>
    </div>
</div>
<br/><br/><br/>