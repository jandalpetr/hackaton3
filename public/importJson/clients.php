<?php





require_once 'DB.php';
require_once 'DB_functions.php';

$success = connect('localhost',      'hackaton3',      'root',  'rootroot');


$data = json_decode(file_get_contents('clients.json'), true);




for($i = 0; $i< sizeof($data); $i ++){ 
    echo '<h2>Name</h2>';
    echo $data[$i]['first_name'].'<br>';
     echo $data[$i]['surname'].'<br>';
     '<br>'.'<br>'.'<br>';
     echo '<h2>pets</h2>';
 $newArr = $data[$i]['pets'];
     for($p =0;$p < sizeof($newArr); $p++){
    // var_dump($newArr[$p]); 
    echo $newArr[$p]['name'].'<br>';
    echo $newArr[$p]['breed'].'<br>';
    echo $newArr[$p]['weight'].'<br>';
    echo $newArr[$p]['age'].'<br>';
    echo $newArr[$p]['photo'].'<br>';

     }
 }