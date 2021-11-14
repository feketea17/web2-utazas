<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-3-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Szállodáink</h2>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              Nehezen tud választani? Segítünk a döntésben!
              <br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>

            <?php $conn=new mysqli("localhost","root","","utazas123");?>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load('current', {'packages':['bar']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Szállodák', 'Tengerpart', 'Reptér'],
                  <?php
                    $query="select * from szalloda";
                    $res=mysqli_query($conn,$query);
                    while($data=mysqli_fetch_array($res)){
                      $az=$data['az'];
                      $nev=$data['nev'];
                      $tengerp=$data['tengerpart_tav'];
                      $rept=$data['repter_tav'];
                  ?>
                  ['<?php echo $az;?>',<?php echo $tengerp;?>,<?php echo $rept;?>],   
                  <?php   
                    }
                  ?> 
                ]);

                var options = {
                  chart: {
                    title: 'SZÁLLODÁINK',
                    subtitle: 'távolság KM-ben a tengerparttól és a reptértől',
                    vAxis: {title: 'KM'},
                  },
                  bars: 'vertical' // Required for Material Bar Charts.
                };

                var chart = new google.charts.Bar(document.getElementById('barchart_material'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
              }
            </script>

            <div id="barchart_material" style="width: 900px; height: 500px;"></div>
                <table>
                  <?php
                  $dbh = new PDO('mysql:host=localhost;dbname=utazas123', 'root', '',
                                              array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                  $result = $dbh->query("SELECT * FROM szalloda ORDER BY az DESC")->fetchAll();
                  ?>
                  <?php foreach ($result as $r) {
                  echo '<tr><td>' . $r['az'] . "</td><td>" . $r['nev'] . "</td></tr>";
                  } ?>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
