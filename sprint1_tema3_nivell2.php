<?php
declare(strict_types=1);
echo"<h1>Sprint 1. Tema 3. Nivell 2</h1>";
Echo "<h2>Exercici 1. Dos arrays de nombres enters/floats. Intersecció i mescla. </h2>";

// interseccion de dos arrays

$array1 = [1,3.5,4,5.6,2,10, 7];
$array2 = [0, 8, 5.6,2,7,9,15.22];

// 1. Encuentra valores comunes con in_array
foreach($array1 as $nombre) {
    if (in_array($nombre, $array2)) {
        $interseccio [] = $nombre;
   }
}
echo "<p>Elements comuns con foreach in_array: </p>";
print_r($interseccio);

// 2. Intereseccion de arrays:
echo "<p>Función array_insersect</p>";
print_r(array_intersect($array1, $array2));

//3 fusion de arrays
echo "<p>Mescla dels dos arrays: </p>";
print_r(array_merge($array1, $array2));

echo "<h2>Exercici 2. Llistar notes d'alumnes. Calcula mitjanas.</h2>";

$notes = [
    "Joan" => [5.6, 9.8, 6, 9, 7 ],
    "Maite" => [7, 9.5, 9.9, 8, 9.8],
    "Cristina" => [8.9, 9.9, 9.7, 9.6, 10],
    "Amir" => [8,7,9,9,8],
    "Fatima" =>[9, 8, 9, 10, 8],
];

echo "<h2>Llistat de notes</h2>";
foreach($notes as $alumne => $llistatNotes) {
    echo "<p>Alumne: $alumne</p>";
    echo "Notes: ";
    foreach($llistatNotes as $nota){
        echo "$nota, ";
    }
}

echo "<h3>Notes mitjanes per alumnes: </h3>";
foreach($notes as $alumne =>$llistatNotes ) {
    $promig = (array_reduce($llistatNotes,fn($acum, $nota) => $acum + $nota))/count($llistatNotes);
    echo "<p>Alumne: $alumne. Nota promig: $promig. </p>" ;
    $promitjos[] = $promig;
}

// con funcion sum($array)
echo "<h1>Funcion suma</h1>";
foreach($notes as $alumne => $notes_alumne) { 
   $suma_alumne = array_sum($notes_alumne);
   echo "<pre>". print_r($suma_alumne, true) . "</pre>";
}
echo "<h2>Con funcion suma calcula promedio: promig_alumne</h2>";
foreach($notes as $alumne => $notes_alumne) { 
   $promig_alumne[] = array_sum($notes_alumne)/count($notes_alumne);
}
echo "<pre>". print_r($promig_alumne, true) . "</pre>";

echo "<h2>Promedio de toda la clase</h2>";
$promig = array_sum($promig_alumne)/count($promig_alumne);
echo "la nota de la classe es: $promig";

echo "<h1>Nota mitja de la classe:</h1> ";
$mitjana = array_reduce($promitjos, fn($acum, $promig) => $acum + $promig)/count($promitjos);
echo $mitjana;


?>