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

		    if($usertype =='user')
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
					else if($profilActif->intitule_profil == 'Service RH')
		    		{
			    		return view('users.servicerh.index');
    				}
					else if($profilActif->intitule_profil == 'Agent DRSC')
		    		{
			    		return view('users.agentdrsc.index');
    				}
		    		else
		    		{
			    		return view('users.error'); // Erreur Ce profil n'est pas répertorié
    	    		}
				}
				else
		    	{
					return view('users.index'); // Vous n'avez pas encore de profil
    			}

    		}
		    else if($usertype =='admin')
		    {
				$profilActif = $user->profilActif();
				//dd($profilActif);

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
					else if($profilActif->intitule_profil == 'Service RH')
		    		{
			    		return view('users.servicerh.index');
    				}
					else if($profilActif->intitule_profil == 'Agent DRSC')
		    		{
			    		return view('users.agentdrsc.index');
    				}
		    		else
		    		{
			    		return view('users.error'); // Erreur Ce profil n'est pas répertorié
    	    		}
				}
				
			    return redirect()->route('admindashboard');
    		}
		    else
		    {
			    return redirect()->back();
    	    }
	    }
    }

}
