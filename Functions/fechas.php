<?php 
//$fecha='2015-11-04';

function ConvetidorFechas($fecha,$opcion)
{

switch ($opcion) {
  case 1:
    #En numero
  $year=substr($fecha,0,4); 
$month=substr($fecha,5,2); 
$day=substr($fecha,8,2); 
echo $fecha=$day."-".$month."-".$year;
    break;
  case 2:
    # Letras
$year=substr($fecha,0,4); 
$month=substr($fecha,5,2); 
$day=substr($fecha,8,2);
  switch ($month) {
          case 1: $month='Enero'; break;
          case 2: $month='Febrero'; break;
          case 3: $month='Marzo'; break;
          case 4: $month='Abril'; break;
          case 5: $month='Mayo'; break;
          case 6: $month='Junio'; break;
          case 7: $month='Julio'; break;
          case 8: $month='Agosto'; break;
          case 9: $month='Septiembre';  break;
          case 10: $month='Octubre'; break; 
          case 11: $month='Noviembre'; break;
          case 12: $month='Diciembre'; break;
    break;
 
}//END switch Letras
echo $fecha=$day." de ".$month." del ".$year;
break;
case 3:
#Dia y mes letras
$year=substr($fecha,0,4); 
$month=substr($fecha,5,2); 
$day=substr($fecha,8,2);

$dayN=date("D", strtotime($fecha)); 

switch ($dayN) {

  case 'Sun': $dayL='Domingo'; break;
  case 'Mon': $dayL='Lunes'; break;
  case 'Tue': $dayL='Martes'; break;
  case 'Wed': $dayL='Miercoles'; break;
  case 'Fri': $dayL='Viernes'; break;
   case 'Thu': $dayL='Jueves'; break;
   case 'Sat': $dayL='Sabado'; break;
   
   default:
     # code...
     break;
 } 

  switch ($month) {
          case 1: $month='Enero'; break;
          case 2: $month='Febrero'; break;
          case 3: $month='Marzo'; break;
          case 4: $month='Abril'; break;
          case 5: $month='Mayo'; break;
          case 6: $month='Junio'; break;
          case 7: $month='Julio'; break;
          case 8: $month='Agosto'; break;
          case 9: $month='Septiembre';  break;
          case 10: $month='Octubre'; break; 
          case 11: $month='Noviembre'; break;
          case 12: $month='Diciembre'; break;
    break;
 
}//END switch Letras
echo $fecha=$dayL." ".$day." de ".$month." del ".$year;
  break;
 default:
    echo "NULL";
    break;

}


}

//echo ConvetidorFechas($fecha,3);

?>