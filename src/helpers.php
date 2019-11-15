<?php

if (! function_exists('myparcel')) {
    function myparcel()
    {
        return app('myparcel.adapter');
    }
}
