<?php
//for($i=1; $i<10;$i++)
//{
//    switch ($i)
//    {
//        case 1:
//        case 9:
//            echo "a\n";
//            break;
//        case 2:
//        case 8:
//            echo "aa\n";
//            break;
//        case 3:
//        case 7:
//            echo "aaa\n";
//            break;
//        case 4:
//        case 6:
//            echo "aaaa\n";
//            break;
//        case 5:
//            echo "aaaaa\n";
//            break;
//    }
//}

function tree($lines)
{
    for($i=1; $i<$lines; $i++)
    {
        if($i <= ($lines/2))
        {
            echo str_repeat('a', $i).PHP_EOL;
        }else{

            echo str_repeat('a', ($lines-$i)).PHP_EOL;
        }
    }
}

tree(10);