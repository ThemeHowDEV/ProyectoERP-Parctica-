<?php 
mysql_connect('localhost','root','') or die (mysql_error().'No se puedo conectar');
mysql_select_db('ERPSHOES') or die (mysql_error()."No se pudo conectar a la base de datos");

$sql="SELECT * FROM CRR_USERS order by nivel";
$consult = mysql_query($sql) or die (mysql_error()."Error de la consulta".$sql);

while($result=mysql_fetch_object($consult))
{
 $Usuarios[]="['".$result->usuario."',".$result->nivel."]";
}
function arrayAString($miArray,$sep) {
    echo implode($sep,$miArray);
}
?>

<html>
  <head>
    <script type="text/javascript" src="jsapi.js"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
			['Tasks', 'Hours per Day'],
			<?php  echo arrayAString($Usuarios,',');
			?>
        ]);

        var options = {
          title: '<?php echo $x="Usuarios"; ?>'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>