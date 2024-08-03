<html>
<head>
  
   
  
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador de visitas</title>
    
    <link rel="stylesheet" href="js.java">
<body>
  

  
    <form   method="post" >
    
 <input  type="submit" name="boton1" value="Eliminar " onclick="return ConfirmDelete()"> 
    
  </form>
  
  
  
<?php 
  include('Fechas.php');
echo  "<b>TRABAJO DE CUENTAS EN GENERAL "."<br>";  

//SALTO DE LINEA
echo "<br>";
  
date_default_timezone_set('America/Toronto');

//Obtiene la fecha para crear la base de datos
echo "DATOS DEL SERVIDOR Y ZONA HORARIA - "."<font color='blue'>CANADA</font>"."<br>" ;
echo "Hora : $horaderegistro"."<br>";
echo  "<b>Fecha actual : </b>".$fechaActual."<br>";

//SALTO DE LINEA
echo "<br>";

echo "DATOS DE TRABAJO ACTUAL"."<br>" ;
  
//Obtiene el pais
$ip = $_SERVER['REMOTE_ADDR'];
//Ip del visitante
if ($_SERVER['REMOTE_ADDR']=='::1') $ipuser= ''; else $ipuser= $_SERVER['REMOTE_ADDR'];  
$geoPlugin_array = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ipuser) );

//Obtener el pais
echo ' Pais: '.$geoPlugin_array['geoplugin_countryName']."<br>";
//Obtener el IP
echo ' IP: '.$geoPlugin_array['geoplugin_request']."<br>";

$IPGUARDAR = $geoPlugin_array['geoplugin_request'];

$PAISCONDICION = $geoPlugin_array['geoplugin_countryName'];

$PAIS = $geoPlugin_array['geoplugin_countryName'];


if ( in_array( $geoPlugin_array['geoplugin_countryCode'], [ 'CO','RO' ]  )  ) {
    echo "El acceso a <font color='RED'>$PAISCONDICION</font>".' esta restringido '."<br>" ;




} 

else {

      //Creacion de carpeta donde se va a guardar toda la informacion del dia de trabajo
$directorio = __DIR__ . DIRECTORY_SEPARATOR . "Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño;
# Lo imprimo solo para depurar

if (!file_exists($directorio)) {
  mkdir($directorio);
}

 //crea el archivo de la base de datos
 $Abrir= fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/".$PAIS." ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt",'a');
 fclose($Abrir);



 //crea el archivo de la base de datos
 $Abrir= fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."IPS CUENTA ESTADOS UNIDOS ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt",'a');
 fclose($Abrir);
 
 $pagina1 = file_get_contents("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."IPS CUENTA ESTADOS UNIDOS ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt");
 $findme = "$IPGUARDAR";
 $pos1 = strpos($pagina1, $findme);  
 
  //crea el archivo de la base de datos
  $Abrir= fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."IPS CUENTA PABLO CLIENTE ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt",'a');
  fclose($Abrir);
  
  $pagina2 = file_get_contents("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."IPS CUENTA PABLO CLIENTE ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt");
  $findme = "$IPGUARDAR";
  $pos2 = strpos($pagina2, $findme);      
 







                       //condicion para contar las ips que han ingreso en las paginas y luego enviar mensaje por correo        
         
               
                   //condicion para verificar la ip
                   if ($pos1 === false)
                    {
                        //Proceso que abre el segundo proceso de la cuenta de reino unido
                   echo "<font color='gree'>✓</font>"."<br>" ;
                   echo "<font color='gree'>VISITA 1</font>"."<br>" ;
               
    
                    //escribe en el archivo las nuevas ips
                    $archivo = "Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."IPS CUENTA ESTADOS UNIDOS ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt";
                    $Abrir = fopen("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."IPS CUENTA ESTADOS UNIDOS ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt","a") or die("Imposible abrir el archivo\n");
                    $ip = $geoPlugin_array['geoplugin_request']." -  ".$geoPlugin_array['geoplugin_countryName']." -  ".$horaderegistro."\n";
                    fwrite($Abrir,$ip);
                    fclose($Abrir);

                     //escribe en el archivo las nuevas ips
                     $archivo = "Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/".$PAIS." ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt";
                     $Abrir = fopen("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/".$PAIS." ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt","a") or die("Imposible abrir el archivo\n");
                     $ip = $geoPlugin_array['geoplugin_request']." -  ".$geoPlugin_array['geoplugin_countryName']." -  ".$horaderegistro."\n";
                     fwrite($Abrir,$ip);
                     fclose($Abrir);

                    
    
                     //ABRE SIMULTANEAMENTE EL SITIO WEB 
                   echo "<script> window.open('http://localhost/CuentaDeEstadosUnidos/', '_blank')</script>";
                  } 

                  else          
      
                     //condicion para verificar la ip
                     if ($pos2 === false)
                      {
                          //Proceso que abre el segundo proceso de la cuenta de reino unido
                     echo "<font color='gree'>✓</font>"."<br>" ;
                     echo "<font color='gree'>VISITA 2</font>"."<br>" ;
                 
      
                      //escribe en el archivo las nuevas ips
                      $archivo = "Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."IPS CUENTA PABLO CLIENTE ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt";
                      $Abrir = fopen("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."IPS CUENTA PABLO CLIENTE ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt","a") or die("Imposible abrir el archivo\n");
                      $ip = $geoPlugin_array['geoplugin_request']." -  ".$geoPlugin_array['geoplugin_countryName']." -  ".$horaderegistro."\n";
                      fwrite($Abrir,$ip);
                      fclose($Abrir);
  
                     
  
      
                       //ABRE SIMULTANEAMENTE EL SITIO WEB 
                     echo "<script> window.open('http://localhost/CuentaDePabloCliente/', '_blank')</script>";
                   }
               
               
         
  }     
//-------------------------------------------------------------------
//abro el archivo para lectura
$archivo = fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."IPS CUENTA ESTADOS UNIDOS ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt", "r");

//inicializo una variable para llevar la cuenta de las líneas y los caracteres
$num_lineas1 = 0;
//Hago un bucle para recorrer el archivo línea a línea hasta el final del archivo
while (!feof ($archivo)) {
    //si extraigo una línea del archivo y no es false
    if ($linea = fgets($archivo)){
       //acumulo una en la variable número de líneas
       $num_lineas1++;
       
    }

}
fclose ($archivo);

//-------------------------------------------------------------------
//abro el archivo para lectura
$archivo = fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."IPS CUENTA PABLO CLIENTE ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt", "r");

//inicializo una variable para llevar la cuenta de las líneas y los caracteres
$num_lineas10 = 0;
//Hago un bucle para recorrer el archivo línea a línea hasta el final del archivo
while (!feof ($archivo)) {
    //si extraigo una línea del archivo y no es false
    if ($linea = fgets($archivo)){
       //acumulo una en la variable número de líneas
       $num_lineas10++;
       
    }

}
fclose ($archivo);

//-------------------------------------------------------------------
//abro el archivo para lectura
//Paises
$archivo = fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."United States"." ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt", "r");

//inicializo una variable para llevar la cuenta de las líneas y los caracteres
$num_lineas2 = 0;
//Hago un bucle para recorrer el archivo línea a línea hasta el final del archivo
while (!feof ($archivo)) {
    //si extraigo una línea del archivo y no es false
    if ($linea = fgets($archivo)){
       //acumulo una en la variable número de líneas
       $num_lineas2++;
       
    }

}
fclose ($archivo);
//-------------------------------------------------------------------
//abro el archivo para lectura
//Paises
$archivo = fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."Canada"." ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt", "r");

//inicializo una variable para llevar la cuenta de las líneas y los caracteres
$num_lineas3 = 0;
//Hago un bucle para recorrer el archivo línea a línea hasta el final del archivo
while (!feof ($archivo)) {
    //si extraigo una línea del archivo y no es false
    if ($linea = fgets($archivo)){
       //acumulo una en la variable número de líneas
       $num_lineas3++;
       
    }

}
fclose ($archivo);
//-------------------------------------------------------------------
//abro el archivo para lectura
//Paises
$archivo = fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."Germany"." ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt", "r");

//inicializo una variable para llevar la cuenta de las líneas y los caracteres
$num_lineas4 = 0;
//Hago un bucle para recorrer el archivo línea a línea hasta el final del archivo
while (!feof ($archivo)) {
    //si extraigo una línea del archivo y no es false
    if ($linea = fgets($archivo)){
       //acumulo una en la variable número de líneas
       $num_lineas4++;
       
    }

}
fclose ($archivo);
//-------------------------------------------------------------------
//abro el archivo para lectura
//Paises
$archivo = fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."Switzerland"." ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt", "r");

//inicializo una variable para llevar la cuenta de las líneas y los caracteres
$num_lineas5 = 0;
//Hago un bucle para recorrer el archivo línea a línea hasta el final del archivo
while (!feof ($archivo)) {
    //si extraigo una línea del archivo y no es false
    if ($linea = fgets($archivo)){
       //acumulo una en la variable número de líneas
       $num_lineas5++;
       
    }

}
fclose ($archivo);
//-------------------------------------------------------------------
//abro el archivo para lectura
//Paises
$archivo = fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."France"." ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt", "r");

//inicializo una variable para llevar la cuenta de las líneas y los caracteres
$num_lineas6 = 0;
//Hago un bucle para recorrer el archivo línea a línea hasta el final del archivo
while (!feof ($archivo)) {
    //si extraigo una línea del archivo y no es false
    if ($linea = fgets($archivo)){
       //acumulo una en la variable número de líneas
       $num_lineas6++;
       
    }

}
fclose ($archivo);
//-------------------------------------------------------------------
//abro el archivo para lectura
//Paises
$archivo = fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."The Netherlands"." ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt", "r");

//inicializo una variable para llevar la cuenta de las líneas y los caracteres
$num_lineas7 = 0;
//Hago un bucle para recorrer el archivo línea a línea hasta el final del archivo
while (!feof ($archivo)) {
    //si extraigo una línea del archivo y no es false
    if ($linea = fgets($archivo)){
       //acumulo una en la variable número de líneas
       $num_lineas7++;
       
    }

}
fclose ($archivo);
//-------------------------------------------------------------------
//abro el archivo para lectura
//Paises
$archivo = fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."Australia"." ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt", "r");

//inicializo una variable para llevar la cuenta de las líneas y los caracteres
$num_lineas8 = 0;
//Hago un bucle para recorrer el archivo línea a línea hasta el final del archivo
while (!feof ($archivo)) {
    //si extraigo una línea del archivo y no es false
    if ($linea = fgets($archivo)){
       //acumulo una en la variable número de líneas
       $num_lineas8++;
       
    }

}
fclose ($archivo);
//-------------------------------------------------------------------
//abro el archivo para lectura
//Paises
$archivo = fopen ("Dia de Trabajo ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño."/"."Sweden"." ". $fechaActualDialetra." ". $fechaActualDiaNumero." de ".$fechaActualMesletra." del ".$fechaActualAño.".txt", "r");

//inicializo una variable para llevar la cuenta de las líneas y los caracteres
$num_lineas9 = 0;
//Hago un bucle para recorrer el archivo línea a línea hasta el final del archivo
while (!feof ($archivo)) {
    //si extraigo una línea del archivo y no es false
    if ($linea = fgets($archivo)){
       //acumulo una en la variable número de líneas
       $num_lineas9++;
       
    }

}
fclose ($archivo);



echo "IPS REGISTRADAS GENERAL PROCESO CUENTA IPS ESTADOS UNIDOS : " . $num_lineas1."<br>";

echo"<br>";



//Contador total de las visitas sumas 
$TotalVistas=$num_lineas1; 

$TotalVistasPaises=$num_lineas2+$num_lineas3+$num_lineas4+$num_lineas5+$num_lineas6+$num_lineas7+$num_lineas8+$num_lineas9;

$OTROSPAIES = $TotalVistas - $TotalVistasPaises;

echo "IPS ESTADOS UNIDOS : " ."<font color='gree'> $num_lineas2</font>"." DE"."<font color='red'>  2012  </font> "."IPS"."<br>";
echo "IPS CANADA ------------- :" ."<font color='gree'> $num_lineas3</font>"." DE"."<font color='red'>  419  </font> "."IPS"."<br>";
echo "IPS ALEMANIA --------- : " ."<font color='gree'> $num_lineas4</font>"." DE"."<font color='red'>  308  </font> "."IPS"."<br>";
echo "IPS Suiza ------------------ : " ."<font color='gree'> $num_lineas5</font>"." DE"."<font color='red'>  295  </font> "."IPS"."<br>";
echo "IPS FRANCIA ------------- : " ."<font color='gree'> $num_lineas6</font>"." DE"."<font color='red'>  190  </font> "."IPS"."<br>";
echo "IPS PAISES BAJOS ------ : " ."<font color='gree'> $num_lineas7</font>"." DE"."<font color='red'>  170  </font> "."IPS"."<br>";
echo "IPS AUSTRALIA --------- : " ."<font color='gree'> $num_lineas8</font>"." DE"."<font color='red'>  148  </font> "."IPS"."<br>";
echo "IPS SUECIA --------------- : " ."<font color='gree'> $num_lineas9</font>"." DE"."<font color='red'>  71  </font> "."IPS"."<br>";
ECHO "OTROS PAISES ---------- : ".$OTROSPAIES."<br>";
echo"<br>";
ECHO "PABLO CLIENTE ---------- : ".$num_lineas10."<br>";


echo "TOTAL DE VISITAS : "."<font color='gree'>$TotalVistas</font>"."<br>";
  //boton para eliminar archivos de ip
  $boton1="";
  //boton para eliminar archivos de ip
  $boton1="";
  
  if(isset($_POST["boton1"]))$boton1=$_POST["boton1"];
  
  if($boton1)
  {
       echo"Elimie el archivo";
    unlink($fechaActual." IPS CUENTA REINO UNIDO 1".".txt");
    unlink($fechaActual." IPS CUENTA REINO UNIDO 2".".txt");
    unlink($fechaActual." IPS CUENTA CHILE,PERU,ESPAÑA".".txt");

  }




 ?>
  

  
</body>
</head>
</html>