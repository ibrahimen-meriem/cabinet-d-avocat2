<?php

namespace App\Http\Controllers;

use App\Models\Affaire;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreatAffaireRequest;

class AffaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data=DB::select('CALL praffaire()');

        return view('affaires',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $avocats=DB::select("select * from users where fonction = 'Avocat'") ;
        $dataclient=Client::all();


        return view("ajouterAffaire",['dataavocat'=>$avocats,'dataclient'=>$dataclient]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatAffaireRequest $request)
    {
        $data = new Affaire();
        $data->nomber = $request->input('numero');
        $data->name = $request->input('Nameaffair');
        $data->type = $request->input('typeAffaire');
        $nameClient =$request->input('nameclient');
        $dataC=DB::table("clients")->where(["name" => $nameClient ])->first();


        $data->id_client=$dataC->id;
        $nameavocat = $request->input('avocat');
        $dataU=DB::table("users")->where(["name" => $nameavocat ])->first();

        $data->id_user=$dataU->id;
        $docs = "" ;
        if($request->hasFile('document')){
            $documents= $request->file('document') ;
            foreach ( $documents as $document){
                $name = rand(1,100000).time().".".$document->extension();
                $document->move("documentaffaires" , $name) ;
                $docs = $docs.$name."//" ;
            }
        }

        $data->document = $docs ;

        $data->save();
        return redirect()->route("afficherAffaire")->with(['success'=>'Added sucsusful']);

    }


    public function show(Affaire $affaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Affaire $affaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Affaire $affaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Affaire $affaire)
    {
        //
    }
}
