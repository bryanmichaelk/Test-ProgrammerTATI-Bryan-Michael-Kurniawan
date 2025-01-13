<?php
function helloworld($n){
    for($i = 1; $i <= $n; $i++){
        if($i % 4 == 0 && $i % 5 == 0 ){
            echo "helloworld ";
        }else if($i % 4 == 0)
            echo "hello ";
        else if($i % 5 == 0)
            echo "world ";
        else
            echo $i . " ";
    }
}

echo helloworld(30);
?>