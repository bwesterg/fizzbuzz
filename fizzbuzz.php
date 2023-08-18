<?php
for ($i = 1; $i <= 1000; $i++) {
    $output = "";

    if ($i % 3 == 0) {
        $output .= "Fizz";
    }
    if ($i % 5 == 0) {
        $output .= "Buzz";
    }
    echo ($output !== "") ? $output : $i;
    echo "\n";
}
?>

<!-- Note for Intrado reviewer(s):
The code below also meets the task requirements, and is perhaps more readable.
However, I used the above solution because it uses fewer operators, and a single $output to accumulate strings "Fizz" and "Buzz" as needed. 
The idea is to optimize the code so it runs as fast as possible. Admittedly, this is negligable given the small number range.-->
<!-- 
    for ($i = 1; $i <= 1000; $i++)
    {
        if ( $i%3 == 0 && $i%5 == 0 )
            {
                echo "FizzBuzz"."\n" ;
            }
        else if ( $i%3 == 0 ) 
            {
                echo "Fizz"."\n";
            }
        else if ( $i%5 == 0 ) 
            {
                echo "Buzz"."\n";
            }
        else
            {
                echo $i."\n";
            }
    }
-->
