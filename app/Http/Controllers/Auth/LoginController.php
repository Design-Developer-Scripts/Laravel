<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class LoginController extends Controller
{

    protected $maxAttempts = 3; // Default is 5
    protected $decayMinutes = 60; // Default is 1


    // Einlogen in den Account
    // 1 = true Login in das System
    // 0 = false Login gesperrt.
    public function authenticate(Request $request){
        // Letzter besuch protokolieren
        User::where('id',Auth::user()->id)->update([
            'last_login_at' => date('Y-m-d H:i:s'),
            'last_login_ip' => $request->getClientIp(),
        ]);

        if(Auth::user()->status == 0){
            Auth::logout($request);

            $message = 'Ihr Account ist Gespert Bitte Kontaktiren Sie uns direkt.';
            return back()->withErrors([
                'email' => $message,
            ]);

            #return redirect()->back()->with('error',$message);
        }
    }
}
