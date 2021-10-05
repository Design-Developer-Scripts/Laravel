<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\CookiePolicyRequest;

class CookiePolicyController extends Controller
{
    public function cookieSelectionAll(){
        // wählt alle möglichen cookies aus und schreibt sie in die cookie policy cookie rein.

        $cookie = array(
            'technical' => 'on',
            'static' => 'on',
        );

        Cookie::queue('cookiepolicy', json_encode($cookie), time()+(60*60*24*30)); // 30 tage speicherung.
        
        return redirect()->back();
    }
    public function cookieSelection(CookiePolicyRequest $request){
        // Speichert nur die auswahl von Cookies
        $validated = $request->validated();

        $cookie = array();
        $cookie['technical'] = 'on';

        if(isset($validated['static']) && $validated['static'] == 'on'){
            $cookie['static'] = 'on';
        }

        Cookie::queue('cookiepolicy', json_encode($cookie), time()+(60*60*24*30)); // 30 tage speicherung.
        return redirect()->back();

        
    }
}
