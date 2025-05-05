<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class HomeController extends Controller
{
    //
    public function index()
    {
        if(Auth::id())
	    {
			$user = Auth::user();
		    $usertype=$user->usertype;

		    if($usertype=='user')
		    {
				$profilActif = $user->profilActif();

				if ($profilActif) {
					if($profilActif->intitule_profil == 'Agent')
		    		{
			    		return view('users.agents.index');
    				}
		    		else if($profilActif->intitule_profil == 'Ordonnateur Sectoriel')
		    		{
			    		return view('users.ordonnateur.index');
    				}
					else if($profilActif->intitule_profil == 'Responsable Sectoriel')
		    		{
			    		return view('users.responsable.index');
    				}
		    		else
		    		{
			    		return view('users.error'); //Ce profil n'est pas répertorié
    	    		}
				}
				else
		    	{
					return view('users.index'); //Ce profil n'est pas répertorié
    			}

    		}
		    else if($usertype=='admin')
		    {
			    return redirect()->route('admindashboard');
    		}
		    else
		    {
			    return redirect()->back();
    	    }
	    }
    }

}
