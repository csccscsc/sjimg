<?php
    $dir = 'images'; //图片存放目录
    $arr = scandir($dir); //列出目录下所有的文件
    array_splice($arr,0,2); //移除数组中的元素，因为获取到的第一个和第二个元素是 . 和 .. 代表当前目录和上一级目录
    shuffle($arr); //把数组中的元素按随机顺序重新排列
    $image=$arr[0]; //读取重新排列后的数组中的第一个元素
    Header("Location: $dir/$image");
?>