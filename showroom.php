<?php

include_once('master1.php'); 
                
$pdo = new PDO('mysql:host=localhost;dbname=pherum_db','root');


?>

      
<div class = "meaning">
  
       <?php
       $select = $pdo->prepare("select count(Name) as n from register_customer");   
        $select->execute();  
         $row=$select->fetch(PDO::FETCH_OBJ); 
          $total_name=$row->n;  
        ?>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $total_name    ?></h3>

                <p>អតិថិជនសរុប</p>
              </div>
              <div class="icon">
               <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">
                ទិន្នន័យលំអិត<i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>0$<sup style="font-size: 20px"></sup></h3>

                <p>សាច់ប្រាក់បញ្ចេញ</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-bill"></i>
              </div>
              <a href="#" class="small-box-footer">
                ទិន្នន័យលំអិត <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>0$</h3>

                <p>សាច់ប្រាក់ត្រូវទទួល</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-minus"></i>
              </div>
              <a href="#" class="small-box-footer">
                ទិន្នន័យលំអិត <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>0$</h3>

                <p>អតិថិជនថ្មី</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                ទិន្នន័យលំអិត<i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">របាយការណ៍ចំនូលចំនាយ</h5>

                
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-center">
                      <strong><button type = "submit">ត្រួតពិនិត្យបំរែបំរួល </button> <input type = "number"><input type = "number"> </strong>
                    </p>

                    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">បា ឆាត</h3>

                
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="height:230px; min-height:230px"></canvas>
                </div>
              </div>
            </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                      <h5 class="description-header">$35,210.43</h5>
                      <span class="description-text">ចំណូលសរុប</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                      <h5 class="description-header">$10,390.90</h5>
                      <span class="description-text">ចំនាយសរុប</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                      <h5 class="description-header">$24,813.53</h5>
                      <span class="description-text">ចំនេញសរុប</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                      <h5 class="description-header">1200</h5>
                      <span class="description-text">GOAL COMPLETIONS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        </div>
       <section class="content">
      <div class="container-fluid">
        <div class="row">
            </div>
            </div>
    </section>
  </section>    
</div>          







<!-- page script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#barChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['មករា', 'កុម្ភះ', 'មិនា', 'មេសា', 'ឧសភា', 'មិថុនា', 'កក្តដា'],
      datasets: [
        {
          label               : 'សាច់ប្រាក់ចេញ',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $total_name    ?>, <?php echo $total_name    ?>, <?php echo $total_name    ?>, <?php echo $total_name    ?>, <?php echo $total_name    ?>, <?php echo $total_name    ?>, <?php echo $total_name    ?>]
        },
        {
          label               : 'សាច់ប្រាក់ត្រូវទទួល',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo $total_name    ?>, <?php echo $total_name    ?>, <?php echo $total_name    ?>, <?php echo $total_name    ?>, <?php echo $total_name    ?>, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false   
        
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = jQuery.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar', 
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>

<!-- jQuery --> 
<?php

include_once('footer.php');



?>
</body>
</html>
