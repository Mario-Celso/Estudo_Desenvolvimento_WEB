<?php
//gerando json atravez do array
/*$pessoas = array();

array_push($pessoas, array
(    'nome'=>'Glaucio',
    'idade'=>20
));

array_push($pessoas, array
(    'nome'=>'João',
    'idade'=>25
));


echo json_encode($pessoas);*/

//criandp array atraves do json

$json = '[{"nome":"Glaucio","idade":20},{"nome":"Jo\u00e3o","idade":25}]';

$data = json_decode($json, true);
var_dump($data);
?>