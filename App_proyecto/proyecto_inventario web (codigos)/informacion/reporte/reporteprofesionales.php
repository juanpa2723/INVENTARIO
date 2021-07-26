<?php ob_start(); ?>
<h2>Reportes</h2>
 <br>  


<table width="500px" cellpadding="5px" cellspacing="5px" border="1">
    <tr bgcolor="#00FF00">
        <td>Codigo</td>
        <td>Descripcion</td>
        <td>Cantidad</td>
        <td>Precio*Unidad</td>
    </tr>
    <tr >
    <td>1</td>
        <td>Arroz diana 1kilo</td>
        <td>20</td>
        <td>2300</td>
    </tr>
    <tr >
    <td>2</td>
        <td>Postobon gaseosa 2litros</td>
        <td>10</td>
        <td>2500</td>
    </tr>
    <tr>
    <td>3</td>
        <td>Refisal </td>
        <td>20</td>
        <td>1500</td>
    </tr>
    <tr>
    <td>4</td>
        <td>Azucar la morena</td>
        <td>20</td>
        <td>1200</td>
    </tr>       
    <tr>
    <td>5</td>
        <td>Huevos</td>
        <td>100</td>
        <td>300</td>
    </tr>
  
</table>
<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "profesionales.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
