<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\site;
use Illuminate\Http\Request;
use App\Inscription;


use Illuminate\Support\Facades\Auth;


class InscreptionController extends Controller
{

  

    
   public function index(){

        // get all the nerds
        $nerds = inscription::all();

        // load the view and pass the nerds
        return View('inscri')
            ->with('nerds', $nerds);





   }


   public function create (){
     
      return view('inscrie');
   }


   public function store (Request $Request){


       $inscription =new Inscription();
       
       $inscription->nom = $Request->input('nom');
       $inscription->prenom = $Request->input('prenom');
       $inscription->email = $Request->input('email');
       $inscription->telephone = $Request->input('telephone');
       $inscription->password = $Request->input('password');
       $inscription->adresse = $Request->input('adresse');

       $inscription->save();
       $inscription->f;
   
      echo "succ";       
        

   }

   public function edite (){


   }


   public function update (){

$user = Auth::user();

$id = Auth::id();

 // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'nerd_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('nerds/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $nerd = Nerd::find($id);
            $nerd->name       = Input::get('name');
            $nerd->email      = Input::get('email');
            $nerd->nerd_level = Input::get('nerd_level');
            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully updated nerd!');
            return Redirect::to('nerds');
        }





   }

   public function destorv(){


   }






}
