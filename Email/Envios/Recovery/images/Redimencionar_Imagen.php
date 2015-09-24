<?php
$ruta_imagen = "foto.jpg";
//echo "Este es el nombre ".$nom." Este es el tipo ".$tipo." Aqui esta alojada ".$donde_esta." Este es su tamaño ".$tamaño;
$miniatura_ancho_maximo = 2732;
$miniatura_alto_maximo = 1200;
$info_imagen = getimagesize($ruta_imagen);
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );
switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( $ruta_imagen );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( $ruta_imagen );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( $ruta_imagen );
    break;
}
imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);
//bool imagecopyresampled ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h );
imagejpeg( $lienzo, "miniatura.jpg", 90 );

$proporcion_imagen = $imagen_ancho / $imagen_alto;
$proporcion_miniatura = $miniatura_ancho_maximo / $miniatura_alto_maximo;

if ( $proporcion_imagen > $proporcion_miniatura ){
  $miniatura_ancho = $miniatura_ancho_maximo;
  $miniatura_alto = $miniatura_ancho_maximo / $proporcion_imagen;
} else if ( $proporcion_imagen < $proporcion_miniatura ){
  $miniatura_ancho = $miniatura_alto_maximo * $proporcion_imagen;
  $miniatura_alto = $miniatura_alto_maximo;
} else {
  $miniatura_ancho = $miniatura_ancho_maximo;
  $miniatura_alto = $miniatura_alto_maximo;
}
$lienzo = imagecreatetruecolor( $miniatura_ancho, $miniatura_alto );
imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho, $miniatura_alto, $imagen_ancho, $imagen_alto);
imagejpeg($lienzo, "miniatura.jpg", 80);
?>
