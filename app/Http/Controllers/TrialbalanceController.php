<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import model Trialbalance
use App\Trialbalance;

class TrialbalanceController extends Controller
{
	//fetch data
    public function index() {
   		$datas = Trialbalance::all();
   		return view('/data', compact('datas'));
    }

    // insert
    public function insert(Request $request) {
    	// validate data
    	$this->validate($request, [
                'id'     => 'unique:trialbalances'
                ]);
     Trialbalance::create($request->all());
    }

    // edit
    public function edit(Request $request, $id)
    {
        // validate the input

        // save the data
         $trialId = Trialbalance::findOrFail($id);
         $trialId->update($request->all());
       //the beauty of eloquent
       
    }

    //delete 
    public function destroy($id)
    {
        $trialId=Trialbalance::find($id);
        $trialId->delete();
    }

    
}
