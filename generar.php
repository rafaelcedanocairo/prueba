
<?php



function conectar(){
    $contraseña = "mcmlxxx";
    $usuario = "zdpo";
    //$nombreBaseDeDatos = "reclamacion";
    # Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
    //$rutaServidor = "mysql:host=localhost;dbname=crymedweb;charset=utf8";
    $rutaServidor = "mysql:host=181.36.237.152;dbname=valida_inventarioxxxxxfgd61661;charset=utf8";
    //crymed.zapto.org
    try {
        $base_de_datos = new PDO($rutaServidor,$usuario,$contraseña);
        $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'conexion exitosa';
        return $base_de_datos;
        //echo "Connected to $nombreBaseDeDatos at $rutaServidor successfully.";
    } catch (Exception $e) {
        echo "error" . $e;
    }
}

function existeCedula($cadena){

        $stmt = conectar()->prepare("insert into licencia (clave) values (:clave)");
        $stmt->bindParam(':clave',$cadena,PDO::PARAM_STR);
        $stmt->execute();//y Ejectumos la consulta
        //$articulos = $stmt->fetchall();
    
    
        if($stmt -> rowCount() > 0)   { 
            echo 'Guardada:'. $cadena .'<br>'; 
                
        }else{
           echo 'No guardada';
        }   
    
}
 
 //$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
 // Output: 54esmdr0qf
 //echo substr(str_shuffle($permitted_chars), 0, 10);
  
 $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 // Output: video-g6swmAP8X5VG4jCi.mp

 for ($i=1; $i <= 100; $i++) { 
     existeCedula(substr(str_shuffle($permitted_chars), 0, 30));
    //echo substr(str_shuffle($permitted_chars), 0, 30).'<br>';
 }
 
 
?>