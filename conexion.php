<?php
    function conexion(){
        $servidor ='localhost';//127.0.0.1 loopback
        $usuario = 'root'; // por defecto tiene root
        $password = ''; // por defecto no tiene password
        $base='crud_paises';
        $puerto =3306;

        $conexion =mysqli_connect(
            $servidor,
            $usuario,
            $password,
            $base,
            $puerto
        );
        return $conexion;
    }

?>