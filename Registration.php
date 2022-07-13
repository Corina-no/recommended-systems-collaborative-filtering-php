<?php

use Tigo\Recommendation\Recommend;


require_once "./admin/config.php";
include DIR_BASE . "/admin/connect.php";
require_once DIR_BASE.'vendor/squizlabs/php_codesniffer/autoload.php';
require DIR_BASE. "/recommendation-algorithm-main/src/Recommend.php";

$client = new Recommend();

$table = [
    ['product_id'=> 'Tastatura multicolora',
     'score'=> 1, 
     'user_id'=> 'student99'
    ],
    ['product_id'=> 'Tastatura multicolora',
     'score'=> 1, 
     'user_id'=> 'student99'
    ],
    ['product_id'=> 'Mouse gaming',
     'score'=> 1, 
     'user_id'=> 'student99'
    ],
    ['product_id'=> 'Mouse gaming',
     'score'=> 1, 
     'user_id'=> 'admin'
    ],
    ['product_id'=> 'Monitor gaming',
     'score'=> 1, 
     'user_id'=> 'admin'
    ]
];

print_r($client->ranking($table, 'student99'));

print_r($client->ranking($table, 'admin'));


?>
