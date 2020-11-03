<div class="row">
    <div class="col-lg-12">
        <h1>Statistik</h1>
        <ol class="breadcrumb">
            <li><a href="<?php SITE_URL; ?>"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-th-large"></i> Statistik</li>
        </ol>

    </div>
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<form method="post" role="form" enctype="multipart/form-data">
            <table class="table-responsive table">

                <tbody>
                <tr>
                    <td style="width: 200px;"><label>Bulan</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                         <select class="form-control select2me" name="bulan">
                                                <option>--Select Bulan--</option>
                                        <?php 
                                                echo "<option value='01'>Januari</option>";
                                                echo "<option value='02'>Febuari</option>";
                                                echo "<option value='03'>Maret</option>";
                                                echo "<option value='04'>April</option>";
                                                echo "<option value='05'>Mei</option>";
                                                echo "<option value='06'>Juni</option>";
                                                echo "<option value='07'>Juli</option>";
                                                echo "<option value='08'>Agustus</option>";
                                                echo "<option value='09'>September</option>";
                                                echo "<option value='10'>Oktober</option>";
                                                echo "<option value='11'>November</option>";
                                                echo "<option value='12'>Desember</option>";
                                        ?>
                                    </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Tahun </label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                                    <select class="form-control select2me" name="tahun">
                                                <option>--Select Tahun--</option>
                                        <?php 
                                                $year = date("Y");
                                                for ($x=$year+1;$x>=2010;$x--){
                                                    echo "<option value='".$x."'>".$x."</option>";
                                                }
                                        ?>
                                    </select>
                    </td>
                </tr>
                    <td>
                        <button type="submit" class="btn btn-primary">Cari</button>
                </tr>
                </tbody>

            </table>
        </form>
<div class="row">
    <div class="col-lg-12">
                              <?php
                                $no = 1;
                                foreach ($data['GetPertanyaan'] as $raw) {
                                  
                              ?>

                                <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                                <script type="text/javascript">

                                  // Load the Visualization API and the piechart package.
                                  google.load('visualization', '1.0', {'packages':['corechart']});

                                  // Set a callback to run when the Google Visualization API is loaded.
                                  google.setOnLoadCallback(drawChart);

                                  // Callback that creates and populates a data table,
                                  // instantiates the pie chart, passes in the data and
                                  // draws it.
                                  function drawChart() {

                                    // Create the data table.
                                    var data = new google.visualization.DataTable();
                                    data.addColumn('string', 'Topping');
                                    data.addColumn('number', 'Slices');
                                    //==============Format Data==================
                                    data.addRows([
                                      <?php

                                        foreach ($data['GetKuesioner'] as $row) {
                                          if ($row->id_pertanyaan == $raw->id_pertanyaan) {
                                      ?>
                                        ['<?php echo $row->label; ?>', <?php echo $row->total ?>],
                                      <?php    # code...
                                        }
                                      }
                                       ?>
                                    ]);
                                    //==============Format Data==================
                                
                                    // Set chart options
                                    //==============Setting Chart================
                                    var options = {'title':'Data Kuesioner',
                                                   'width':400,
                                                   'height':300};
                                    //==============Setting Chart================

                                    // Instantiate and draw our chart, passing in some options.
                                    <?php $id = "chart_div".$raw->id_pertanyaan ?>;
                                    // console.log(id);
                                    var chart = new google.visualization.PieChart(document.getElementById('<?php echo $id ?>'));
                                    chart.draw(data, options);
                                  }
                                </script>
                                 <div class="col-md-12">
                                  <div class="col-md-12">
                                      
                                      <table>
                                        <tr>
                                            <td><?php echo "<sup>".$no.". &nbsp;&nbsp;</sup>"; ?></td>
                                            <td><?php echo $raw->pertanyaan; ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b><?php echo $data['jumlah_data']." Responses"; ?></b></td>
                                        </tr>
                                      </table>

                                      <div id="chart_div<?php echo $raw->id_pertanyaan ?>"></div>
                                  </div>
                                </div>
                                
                              <?php
                                $no ++;
                                }
                              ?>

                             
                                

                                
    </div>
</div>