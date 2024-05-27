<?php

if (!function_exists('static_assets')) {
    function static_assets($path)
    {
        $static_assets =  url('/') .'/'.'assets/'.$path;
        return $static_assets;
    }
   }

   if (!function_exists('static_asset')) {
    function static_asset($path)
    {
        $static_asset =  url('/') .'/'.$path;
        return $static_asset;
    }
   }
?>
