<?php
 include 'CalculaTemp.php';
 
 if(isset($_POST['opcion1'])){

 try{
     $objCon = new CalculaTemp();
     $objCon->ConvertirCentigrados($_POST['cent']);
     echo '<div>';
     echo 'El resultado de la conversión<br />';
     print_r ($_POST['cent']);
     echo ' °C = '.$objCon->convercion.'°F<br>';
     echo "<input type='button' value='Calcular de nuevo' onClick='history.go(-1);'>";
     echo '</div>';

 }catch(Exception $e){
    echo 'ERROR: ',  $e->getMessage(), "\n";
 }
 
 }
 
 if(isset($_POST['opcion2'])){
 try{
    $objCon = new CalculaTemp();
     $objCon->ConvertirFarenheit($_POST['far']);
     echo '<div>';
     echo 'El resultado de la conversión<br />';
     print_r ($_POST['far']);
     echo ' °F = '.$objCon->convercion.'°C<br>';
     echo "<input type='button' value='Calcular de nuevo' onClick='history.go(-1);'>";
     echo '</div>';
 }catch(Exception $e){
    echo 'ERROR: ',  $e->getMessage(), "\n";
 }
 
 } 
?>
 </body>
 </html>