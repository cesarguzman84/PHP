<?php

/* 
 FUNCIONES:
 Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto 

funtion nombreDeMiFuncion ($parametro) {
 
 //BLOQUE / CONJUNTO DE INSTRUCCIONES
}
*/

//Ejemplo 1:

function muestraNombres() {
    
    echo "Cesar Guzman <br/>";
    echo "Leidy Serna <br/>";
    echo "Lina Rios <br/>";
    echo "Tatiana Chalarca <br/>";
    echo "<hr/>";
}

//Invocar funcion:

muestraNombres();
muestraNombres();
muestraNombres();
muestraNombres();
muestraNombres();

//Ejempl2 2:

function tabla($numero){
    
    echo "<h3> Tabla de multiplicar del numero: $numero </h3>";
    for($i=1; $i<=10; $i++ ) {
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/>";
        
        
    }
}

/*
if(isset($_GET ['numero'])){
    
    tabla ($_GET['numero']);
}else{
    echo "No hay numero para sacar la tabla";
}
*/


for ($i=0; $i<=10; $i++) {
    
    tabla($i);
    
}

//Ejemplo 3

function calculadora($numero1, $numero2, $negrita = false){
    
    //Conjunto de instrucciones a ejecutar:
    
    $suma = $numero1 +$numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1*$numero2;
    $division =$numero1/$numero2;
    
    $cadena_texto = "";
    
    if($negrita){
        
        $cadena_texto.= "<h1>";        
    }
    
    $cadena_texto.= "Suma: $suma <br/>";
    $cadena_texto.= "Resta: $resta <br/>";
    $cadena_texto.= "Multiplicacion: $multi <br/>";
    $cadena_texto.= "Division: $division <br/>";
        
    if($negrita){
        
        $cadena_texto.= "<h1>";        
    }
    
    $cadena_texto.= "<hr/>";
         
    return $cadena_texto;
    
}



echo calculadora(10, 30);
echo calculadora(15, 100, false);
echo calculadora(19, 50);
echo calculadora(2, 3);
echo calculadora(9, 500);


//Ejemplo 4

function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
    
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
    
}

function devuelveElNombre($nombre, $apellidos){
    
    $texto = getNombre($nombre)
            ."<br/>"
            .getApellidos($apellidos);               
    return $texto; 
    
}

echo devuelveElNombre("Cesar", "Guzman");