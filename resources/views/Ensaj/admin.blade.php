@extends('master')

@section('content')
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['filiere', 'classe'],
         <?php
          $labels= ['Red', 'Orange', 'Yellow', 'Green', 'Blue'];
          $i=0;
           $con = mysqli_connect("localhost","root","","gestion");
           
         $sql = "SELECT filiere,count(code)as n FROM classes group by filiere";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['filiere']."',".$result['n']."],";
          }

         ?>
        ]);

           var options = {
        title: "Gestion Des Classes et Filieres",
        color : 'red',
        width: 800,
        height: 600,
        bar: {groupWidth: "70%"},
        legend: { position:"right"}
    
      };
         var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));

       // var chart = new google.visualization.BarChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
<html>
  <body>
      <div class="container-fluid" style="margin-top: 0%;">
     
        <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        
                        <a href="http://127.0.0.1:8000/admin/filieres" class="col-md-6">
                        <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">

  <div class="card-body">
                                <h2 >
                                    <?php 
                                $bdd = new PDO('mysql:host=localhost;dbname=gestion;charset=utf8', 'root', '');
                                $reponse = $bdd->query("SELECT count(*) as n FROM Filieres ");
                                 while ($donnees = $reponse->fetch()){
                                            echo $donnees['n'];}
                                ?>
                                </h2>
                                <span class="desc">Filiere</span>
                               
                            </div></div>
                        </a>
                        <a href="http://127.0.0.1:8000/admin/classes" class="col-md-6">
                        <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">

<div class="card-body">
                                <h2>                                  <?php 
                       
                                $reponse = $bdd->query("SELECT count(*) as n FROM classes ");
                                 while ($donnees = $reponse->fetch()){
echo $donnees['n'];} ?></h2>
                                <span class="desc">classe</span>
                             
                                </div>
                            </div>
                      
                       
                    </div>
                </div>
            </section>
    </div>


    <div id="piechart" style="width: 900px; height: 450px;margin:auto"></div>
  </body>
</html>

@endsection