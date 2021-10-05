<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function createUrlString(string $url){

        /*
        $suche = array(
        'ä' => 'ae',
        'Ä' => 'ae',
        'ß' => 'ss',
        'ö' => 'oe',
        'Ö' => 'oe',
        'ü' => 'ue',
        'Ü' => 'ue',
        ' ' => '-',
        'à' => 'a',
        'è' => 'e',
        'ê' => 'e'
        );
        $url = trim($url);
        $return = str_replace(array_keys($suche),array_values($suche), $url);
        $return = strtolower($return);
        return $return;
        */

        return Str::slug($url);
    }
}
