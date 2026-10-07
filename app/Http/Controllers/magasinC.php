<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\magasinM;

class magasinC extends Controller
{
    public function index()
    {
        return view('indexV');  


// Appel de la vue indexV, page d'accueil du site
    }

    public function all()
{
    $enregAll = magasinM::all();
			
 

    return view('magasinallV',['enregAll'=>$enregAll]);
}

public function newm()
{
 return view('ajoutmagasinV');
//  Appel vue contenant un formulaire de création d'un produit
}


public function newsave(Request $request)
{
	 $data = new magasinM();


	  $data->nomMag = $request->txtnom;
	  $data->villeMag = $request->txtville;


	  $data->save();


	  return redirect()->route('consulter');
}

public function allVille()
{
	$enregAll = magasinM::select('villeMag')->distinct()->get();
			
	return view('formlistevilleV',['enregAll'=>$enregAll]);
}

public function allMag(Request $request)
{
	$enregAll = magasinM::where('villeMag',$request->cboVille)->get();
	return view('magasinvilleV',['enregAll'=>$enregAll, 'nomVille'=>$request->cboVille]);
}

}
