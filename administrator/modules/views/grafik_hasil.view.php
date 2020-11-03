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
<div class="row">
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
    <div class="col-lg-12">
       
      <?php
 

                                 
                                 $dataPoints = $data["grafik"];
                                 $dataPoints2 = $data["GetPieSearchByJenisPet"];
                                 $dataPoints3 = $data["GetPieSearchByPenyakit"];
                                  // echo "<pre>";print_r($dataPoints);die();

                                ?>
                                 <!DOCTYPE HTML>
                                <html>
                                <head>  
                                <script>
                                window.onload = function () {

                                  var chart = new CanvasJS.Chart("chartContainer", {
                                  animationEnabled: true,
                                  //theme: "light2",
                                  title:{
                                    text: "Data Pengujung Berdasarkan alamat"
                                  },
                                  axisX:{
                                    crosshair: {
                                      enabled: true,
                                      snapToDataPoint: true
                                    }
                                  },
                                  axisY:{
                                    title: "Jumlah Pengujung",
                                    crosshair: {
                                      enabled: true,
                                      snapToDataPoint: true
                                    }
                                  },
                                  toolTip:{
                                    enabled: false
                                  },
                                  data: [{
                                    type: "area",
                                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                  }]
                                });
                                chart.render();

                                var chart2 = new CanvasJS.Chart("chartContainer2", {
                                  animationEnabled: true,
                                  //theme: "light2",
                                  title:{
                                    text: "Data Pengujung Berdasarkan Jenis Pet"
                                  },
                                  axisX:{
                                    crosshair: {
                                      enabled: true,
                                      snapToDataPoint: true
                                    }
                                  },
                                  axisY:{
                                    title: "Jumlah Pengujung",
                                    crosshair: {
                                      enabled: true,
                                      snapToDataPoint: true
                                    }
                                  },
                                  toolTip:{
                                    enabled: false
                                  },
                                  data: [{
                                    type: "area",
                                    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                                  }]
                                });

                                  var chart3 = new CanvasJS.Chart("chartContainer3", {
                                  animationEnabled: true,
                                  //theme: "light2",
                                  title:{
                                    text: "Data Pengujung Berdasarkan Penyakit"
                                  },
                                  axisX:{
                                    crosshair: {
                                      enabled: true,
                                      snapToDataPoint: true
                                    }
                                  },
                                  axisY:{
                                    title: "Jumlah Pengujung",
                                    crosshair: {
                                      enabled: true,
                                      snapToDataPoint: true
                                    }
                                  },
                                  toolTip:{
                                    enabled: false
                                  },
                                  data: [{
                                    type: "area",
                                    dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
                                  }]
                                });

                                chart2.render();
                                chart3.render();
                                 
                                }
                                </script>

                                <script>
                                /*window.onload = function () {
                                 
                                var chart = new CanvasJS.Chart("chartContainer3", {
                                  animationEnabled: true,
                                  //theme: "light2",
                                  title:{
                                    text: "Data Pengujung Berdasarkan Penyakit"
                                  },
                                  axisX:{
                                    crosshair: {
                                      enabled: true,
                                      snapToDataPoint: true
                                    }
                                  },
                                  axisY:{
                                    title: "Jumlah Pengujung",
                                    crosshair: {
                                      enabled: true,
                                      snapToDataPoint: true
                                    }
                                  },
                                  toolTip:{
                                    enabled: false
                                  },
                                  data: [{
                                    type: "area",
                                    dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
                                  }]
                                });
                                chart.render();
                                 
                                }*/
                                </script>
                                

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
                                      ?>
                                        ['<?php echo $row->label; ?>', <?php echo $row->total ?>],
                                      <?php    # code...
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
                                    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                                    chart.draw(data, options);
                                  }
                                </script>
                                
                                <div class="col-md-12">
                                  <div class="col-md-12">
                                      <div id="chartContainer" style="height: 370px; width: 100%;"></div><br/><br/>
                                      <div id="chartContainer2" style="height: 370px; width: 100%;"></div><br/><br/>
                                      <div id="chartContainer3" style="height: 370px; width: 100%;"></div>
                                  </div>
                                  <!-- <div class="col-md-5">
                                      <div id="chart_div"></div>
                                  </div> -->
                                </div>
    </div>
</div>