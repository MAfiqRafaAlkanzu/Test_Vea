<?php
    function print_pattern($num)
    {
        for ($i = 0; $i < $num; $i++)
        {

        for($j = 0; $j <= $i; $j++ )
        {
        echo "* ";
        }
        // go to new line after each row pattern is printed
        echo "\n";
        }
    }
    //Call function and send number of lines as parameter
    $num = 6;
    print_pattern($num);
?>