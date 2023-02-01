<?php
function fechaActual($value){

    $date = date("d/m/Y", strtotime($value));

    return $date;

}

?>
