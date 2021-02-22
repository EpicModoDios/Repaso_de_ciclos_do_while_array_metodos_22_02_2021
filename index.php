

<?php
    //REPASO CICLO "WHILE" Recordemos que siempre deber ser "true" para que cumpla la condicion
    $llave = (int) 1;
    while($llave<=10){
        $cadena = (string) <<<FIN
        Papitas en total $llave <br>
FIN;
        $llave++;
        print_r($cadena);
    }


    //CICLO "DO WHILE"
    //Es lo mismo que el "WHILE" lo que cambia es al entrar por primera vez no verifica la condicion
    $vefirificar = (bool) false;
    
    do{
        print_r("Entre");
        $vefirificar = false;  
    }while($vefirificar);


    //QUE ES UN "ARRAY"
    $lista = (array) [];
    $lista[0] = (string) "Thomas";
    $lista[1] = (string) "Miguel";
    $lista[2] = (string) "Juan Diego";
    $lista[3] = (string) "Paula";
    
    print_r(strlen($lista[0])); //strlen cuenta los caracteres de un dato de la lista
    Print_r($lista);


    //El comando "count" se usa en las listas para contar automaticamente la cantidad de datos
    for ($i=0; $i < count($lista); $i++) {
        $cadena1 = <<<FIN
        En la posición $i: esta el valor '$lista[$i]' <br>
FIN;
        Print_r($cadena1);
    }


    //Con el Ciclo "FOREACH" se simplifica el trabajo del "FOR" INTENTAR PRIORIZAR EL USO DE "FOREACH" POR ENCIMA DEL "FOR"
    foreach ($lista as $key => $value) {
        $cadena = <<<FIN
        En la posición $i: esta el valor '$lista[$i]' <br>
FIN;
        Print_r($cadena);
    }


    $array = (array) [];
    $objetos = new stdClass();
    $objetos->baso = (string) "Metal";

    $array[0] = (string) "Thomas";
    $array[1] = (int) 16;
    $array[2] = (bool) false;
    $array[3] = (double) 1.81;
    $array[4] = (array) [(string) "Jugar VideoJuegos", (int) 9];
    $array[5] = function($p1){ return "Adios $p1";};
    $array[6] = (object) $objetos;

    print_r($array);

    $keys1 = (array) ["profesor", "estudiantes"];
    $values1 = (array) ["miguel", "Thomas"];

    $lista2 =  array_combine($keys,$values);
    print_r($lista2);
?>