<div class="row">
    <div class="col-lg-12">
        <h1><?php echo $data["title"]; ?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li><a href="<?php SITE_URL; ?>?page=role"><i class="fa fa-th-large"></i> Role</a></li>
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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=role">

        <?php } ?>

        <form method="post" role="form">
            <table class="table-responsive table">

                <tbody>
                <tr>
                    <td style="width: 200px;"><label>Nama Role</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="role" <?php if(isset($data["role"])) echo 'value="' . $data["role"]->nama_role . '"'; ?> class="form-control">
                    </td>
                </tr>
                <tr>
                  <td  width="200px"><label class="control-label">Menu Yang dapat diakses</label></td>
                  <td style="width: 1px;">:</td>
                  <td><div class="checkbox-list">
                  <?php
                    if (!empty($data["menu"])) {
                      foreach ($data["menu"] as $parent) {
                        $ac_menu = array_search($parent->menu_id, $data["active_menu"]);
                        ?>
                        <ul class="list-unstyled parent-menu">
                          <li><label>
                            <input type="checkbox" class="group-check" name="parent[]" value="<?php echo $parent->menu_id; ?>" <?php echo (($data["edit"]) ? ((!empty($ac_menu) || $ac_menu === 0) ? "checked" : "") : ""); ?>>
                            <b><?php echo $parent->menu_name; ?></b></label>
                        <?php
                        if (!empty($parent->submenu)) {
                          echo "<ul class='list-unstyled child-menu'>";
                          foreach ($parent->submenu as $child) {
                            $ac_child = array_search($child->menu_id, $data["active_menu"]);
                            ?>
                            <li>
                              <input type="checkbox" class="group-check-sec" name="child[]" value="<?php echo $child->menu_id; ?>" <?php echo (($data["edit"]) ? ((!empty($ac_child) || $ac_child === 0) ? "checked" : "") : "") ?>>
                              <?php echo $child->menu_name; ?>
                            <?php
                            if (!empty($child->subsubmenu)) {
                              echo "<ul class='list-unstyled grand-menu'>";
                              foreach ($child->subsubmenu as $grandchild) {
                                $ac_grandchild = array_search($grandchild->menu_id, $data["active_menu"]);
                                ?>
                              <li><input type="checkbox" class="check-menu" name="grandchild[]" value="<?php echo $grandchild->menu_id; ?>" <?php echo (($data["edit"]) ? ((!empty($ac_grandchild) || $ac_grandchild === 0) ? "checked" : "") : "") ?>><?php echo $grandchild->menu_name; ?></li>
                                <?php
                              } echo "</ul>";
                            } echo "</li>";
                          } echo "</ul>";
                        } echo "</li></ul>";
                      }
                    }
                    ?>
                  
                  <?php //echo form_error('role_canlogin'); ?>
                  </div></td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" class="btn btn-primary">Submit</button> <a class="btn btn-warning" href="<?php echo PATH; ?>?page=role">Tampilkan Semua Role</a> </td>
                </tr>
                </tbody>

            </table>

            <table>
                
              </table> 
        </form>

    </div>
</div>