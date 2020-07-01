<?php

//Assinment 1//
//example 1//

    // $age=21;
    // if ($age>=18 && $age<70){
    //     echo "welcome to our site";
    // } else {
    //     echo "you can not login to our site";
    //     }


//Example 2//
 
    // $films=array("Fast","Predestination","Persuit","Prestige");
    // $keyword="avatar";
    // foreach($films as $film){
    //     if ($film==$keyword){
            
    //         echo"yes";
    //     }else {
    //         echo"No";
    //     break;
    //     }
    // }

//Example 3//
        
    // $tests=array(5,4,9,3,1,7,5,8,6);
    //  echo max($tests);


//Example 4//
            
    // $films=array("avatar","Prestige","avatar","Prestige");
    // $keyword="avatar";
    
    //     echo count(array_keys($films, $keyword));
        
    
//Example 5//
    $tests=array(1,"tariq",1.5,true,7,'s',false);

    for ($i=0;$i <count($tests) ;$i++)
    if(is_bool($tests[$i])){
        if($tests[$i]==true){
            echo"Yes"."<br/>";
        }else{
            echo"No"."<br/>";
        }
    }else{
        echo($tests[$i])."<br/>";
    }
          

//Example 6//
        
//     $tests=array(6,4,9,3,12,8,7);
//      sort($tests);
//     for($i = 0; $i < count($tests); $i++) {
//     echo $tests[$i];
//     echo"<br/>" ;
// }

//Example 7//
        
    // $arr1=array('a','b','c','d');
    // $arr2=array('c','d','e','f');
    // $result=array_intersect($arr1,$arr2);
    // print_r($result);



?>