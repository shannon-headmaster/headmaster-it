<?php

class attr
{
    public function index()
    {
        //用 PHP array_push、array_unshfit、array_shfit、array_pop用法
        $arr = [
            "a",
            "b",
            "c"
        ];
        //array_push() 函数将一个或多个单元压入数组的末尾（入栈）。
        array_push($arr, "d");
        //array_unshift() 函数将一个或多个单元插入数组的开头（头部插入）。
        array_unshift($arr, "e");
        //array_shift() 函数删除数组中的第一个元素，并返回被删除元素的值。
        array_shift($arr);
        //array_pop() 函数删除数组中的最后一个元素，并返回被删除元素的值。
        array_pop($arr);
        print_r($arr);
        //redis实现消息队列
        //redis实现分布式锁
        //redis实现延迟队列
        //redis实现限流
        //redis实现缓存
        //redis实现session共享
        //redis实现分布式session共享
        //redis实现分布式锁

        //php实现无限极

    }
}