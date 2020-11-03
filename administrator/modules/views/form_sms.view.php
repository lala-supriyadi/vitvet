<div class="row">
    <div class="col-lg-12">
        <h1>SMS Gateway</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-th-large"></i> SMS Gateway</li>
        </ol>

    </div>
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div class="row">
  <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Kirim Promo</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Singel Send</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
        <form method="post" role="form" enctype="multipart/form-data">
            <table class="table-responsive table">

                <tbody>
                <tr>
                    <td style="width: 200px;"><label>Userkey</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" class="form-control" name="userkey" >
                    </td>
                </tr>
                <tr>
                    <td><label>Passkey </label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" class="form-control" name="passkey" >
                    </td>
                </tr>
                <tr>
                    <td><label>Isi Pesan </label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" class="form-control" name="isi_pesan" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </td>
                </tr>
                </tbody>

            </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
            <table class="table-responsive table">

                <tbody>
                <tr>
                    <td style="width: 200px;"><label>Userkey</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" class="form-control" name="userkey_singel" >
                    </td>
                </tr>
                <tr>
                    <td><label>Passkey </label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" class="form-control" name="passkey_singel" >
                    </td>
                </tr>

                <tr>
                    <td><label>No Telepon </label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" class="form-control" name="no_telepon" >
                    </td>
                </tr>

                <tr>
                    <td><label>Isi Pesan </label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" class="form-control" name="isi_pesan_singel" >
                    </td>
                </tr>
                    <td>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </td>
                </tr>
                </tbody>

            </table>
        </form>
    </div>
  </div>

</div>
  
  </div>