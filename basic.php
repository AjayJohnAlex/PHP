<?php

$people = [
    
    'alex'=>22,
    'ajay'=>12
    ];
    
// echo $people['alex'];

$users = [
    
    [
        'username'=>'alex',
        'email_id'=>'abc@gmail.com',
        'likes'=>[
            ['cats'=>4],
            ['dogs'=>4]
        ]
    ],
    
    [
        'username'=>'ajay',
        'email_id'=>'qwe@gmail.com',
        'likes'=>[
            ['cats'=>4]
            ,['dogs'=>2]
            ]
        
        ],
    ];
  
  
// echo $users[0];
// // echo $users[0]['likes'];
// echo $users[0]['likes'][1];
// echo $users[0]['likes'][1]['dogs'];

// foreach method 

foreach($users as $user){
    
    echo "The username is {$user['username']} and email id is {$user['email_id']} ";
    
    foreach($user['likes'] as $like){
        
        
        
        foreach($like as $single_like){
        
       echo "{$single_like['cats']} and  {$single_like['dogs']} ";
        
        
        }
    }
        // echo "which have been assigned numbers as {$like['cats']} 
        // and {$like['dogs']} respectively.";
        
    }
    // and likes var_dump({$user['likes']})";
 
// }
        
// var_dump($users);
// echo $users[0]['username'];
// echo $users[1]['email_id'];
// echo $users[1]['likes'][1];
// var_dump($users);

// for loops 

// foreach ($users as $user) {
    
//     echo $users[0]['username']. '<br>';
//     echo $users[1]['email_id']. '<br>';
//     echo $users[1]['likes'][1]. '<br>';
    
    
// }

// if loop 


$daysOfWeek = 1;


$week = [
    
    1=>'Monday',
    2=>'Tuesday',
    3=>'Wednesday',
    4=>'Thursday',
    5=>'Friday',
    6=>'Saturday',
    7=>'Sunday',
    ];


// if (in_array($daysOfWeek,array_keys($week))){
    
//     echo "the day is {$week[$daysOfWeek]}.";
    
// }else {
//     echo "Not a valid day";
// }

// arthematic 

$views  = 5;
$views1 = 8;
$views3 = 7+8;
$division_step = number_format(($views/$views1)*100,2);

// echo $division_step.'<br>';
// echo $views3;

// for ($i=0; $i<10; $i++){
    
//     echo $i."<br>";
//     if ($i%2 === 0){
        
//         echo "{$i} even number "."<br>";
//     }
//     else{
//         echo "{$i} odd number "."<br>";
//     }
    
// }


// page mumber creation


$total_pages = 100;
$items_per_page = 10;


// for ($i=0;$i<=($total_pages/$items_per_page);$i++){
    
    
//     echo "<a href=\"?pages=\" {$i}> {$i}</a><br>";
    
// }

// random number generation

$noIWant = 4;

// while(($genNumber = rand(1,6)) !== $noIWant){
    
//     echo "No we got {$genNumber} and what i want {$noIWant}<br>";
// }


$new_users = [
    
    [
        'username'=>'alex',
        'likes'=>[ ['cats'=>4],['dogs'=>2]  ]
    ],
    
    [
        'username'=>'ajay',
        // 'email_id'=>'qwe@gmail.com',
        'likes'=>[
            ['cats'=>4]
            ,['dogs'=>2]
            ]
        
        ],
    ];

$target = 2;
$value = null;

foreach($new_users as $new_user){
    
    foreach($new_user['likes'] as $likes){
        
        foreach($likes as $one_item){
            
            if ($one_item === $target){
            
            $value = $likes;
            break 2;
            
        }
        
       
            
        }
            
            
    }
    
    // var_dump($value);
}



// FUNCTION IMPLEMENTATION

function firtsName($f_name){
    
    return $f_name;
}

function full_name($arg1,$arg2=null,$seperator= "-"){
    
    
    if ($arg2===null){
         
        return "{$arg1}";
    }
    else{
        return "{$arg1}{$seperator}{$arg2}";

    }
}

// echo full_name(firtsName('matthew'));




function get_sum(){
    
    return array_sum(func_get_args());
}


echo get_sum(3,4,5,6,7,8,9,1);




