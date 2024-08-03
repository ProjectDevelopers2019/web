<?php

  date_default_timezone_set('America/Toronto');
  //fechas para que el sistema funcione
  $fechaActual = date('d-m-Y');
  $fechaActualDialetra = date('N');
  $fechaActualDiaNumero = date('d');
  $fechaActualMesletra = date('n');
  $fechaActualAño = date('Y');
  $horaderegistro =  date('h:i: A'); 


//Condiciones para determinar dias
  if($fechaActualDialetra == 1)
    {
        $fechaActualDialetra ="Lunes";
    }
else
   if($fechaActualDialetra == 2)
    {
        $fechaActualDialetra ="Martes";
    }
else
   if($fechaActualDialetra == 3)
    {
        $fechaActualDialetra ="Miércoles";
    }
else  
   if($fechaActualDialetra == 4)
    {
        $fechaActualDialetra ="Jueves";
    }
else  
   if($fechaActualDialetra == 5)
    {
        $fechaActualDialetra ="Viernes";
    }
else  
    if($fechaActualDialetra == 6)
     {
         $fechaActualDialetra ="Sábado";
     }
else  
    if($fechaActualDialetra == 7)
     {
         $fechaActualDialetra ="Domingo";
     }

//condiciones para determinar mes 
    if($fechaActualMesletra == 1)
     {
         $fechaActualMesletra = "Enero";
     }
else
    if($fechaActualMesletra == 2)
     {
         $fechaActualMesletra = "Febrero";
     }
else
    if($fechaActualMesletra == 3)
     {
         $fechaActualMesletra = "Marzo";
     }
else
    if($fechaActualMesletra == 4)
     {
         $fechaActualMesletra = "Abril";
     }
else
     if($fechaActualMesletra == 5)
      {
          $fechaActualMesletra = "Mayo";
      }
 else
     if($fechaActualMesletra == 6)
      {
          $fechaActualMesletra = "Junio";
      }
 else
     if($fechaActualMesletra == 7)
      {
          $fechaActualMesletra = "julio";
      }
else
      if($fechaActualMesletra == 8)
       {
           $fechaActualMesletra = "julio";
       }
else
      if($fechaActualMesletra == 9)
       {
           $fechaActualMesletra = "Septiembre";
       }
else
      if($fechaActualMesletra == 10)
       {
          $fechaActualMesletra = "Octubre";
       }
else
      if($fechaActualMesletra == 11)
       {
          $fechaActualMesletra = "Noviembre";
       }
else
      if($fechaActualMesletra == 12)
       {
         $fechaActualMesletra = "Diciembre";
       }
 


?>