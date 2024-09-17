<?php
class mysqlconex
{
    public function conex()
    {
        $enlace = mysqli_connect("localhost","root","","clinica_opti");
        return $enlace;
    }
}
?>
