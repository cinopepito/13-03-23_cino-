<?php
$classe = [
    [
        'nom'=>'doe',
        'prenom'=>'jean',
        'notes'=>[16,16,16]
    ],
    [
        'nom'=>'john',
        'prenom'=>'jeanDoe',
        'notes'=>[12,15,17]
    ]
    ];
print_r ($classe);
echo $classe[0]['prenom'] ."\n";
echo $classe[1]['notes'][2] ."\n";

    ?>