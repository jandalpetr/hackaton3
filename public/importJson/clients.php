<?php





require_once 'DB.php';
require_once 'DB_functions.php';

$success = connect('localhost',      'hackaton3',      'root',  'rootroot');
//var_dump($success);




$data = json_decode(file_get_contents('clients.json'), true);
DB::statement('truncate table pets');
DB::statement('truncate table clients');

    
    for($i = 0; $i< sizeof($data); $i ++){    
   $sql= "INSERT INTO `clients`(`first_name`, `surname`) VALUES (?,?)";
                                                            
      //echo $data[$i]['first_name'].'<br>';
       //echo $data[$i]['surname'].'<br>';
    
   $newArr = $data[$i]['pets'];
 DB::insert($sql,[$data[$i]['first_name'],$data[$i]['surname']]);

 $id = DB::getPdo()->lastInsertId();
        for($p =0;$p < sizeof($newArr); $p++){

                 $sqlPets = "INSERT INTO `pets`(`name`, `breed`, `weight`,`age`,`photo`,`client_id`) VALUES (?,?,?,?,?,?)";
                DB::insert($sqlPets,[$newArr[$p]['name'],$newArr[$p]['breed'],$newArr[$p]['weight'],$newArr[$p]['age'],$newArr[$p]['photo'],$id]);
            
        }
      
        if($i % 100 == 0 ){
            echo $i."\n<hr>";
        }
}