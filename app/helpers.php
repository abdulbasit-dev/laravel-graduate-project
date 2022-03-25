<?php

//check to not delete the original file that come with seeder in delete/update acctions 
if (!function_exists('checkDelete')) {
    function checkDelete($filePath)
    {
        //try to not delete seeder file
        $fileName =  explode('/', $filePath)[2];
        return count(explode('_', $fileName)) > 1 ? true : false;
    }
}
