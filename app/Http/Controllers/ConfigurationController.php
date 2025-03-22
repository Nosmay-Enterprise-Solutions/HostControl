<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ConfigurationController extends Controller
{
    // Modules
    public function modules()
    {
        $data = Module::all();
        return view('admin.configuration.modules')->with([
            'modules' => $data
        ]);
    }

    public function changeState($id, $state)
    {
        $name = Module::where('code', $id)->first()->name;
        if($state == 'false'){
            $state = Module::where('code', $id)->update([
                'state' => 0
            ]);
        }elseif($state == 'true'){
            $state = Module::where('code', $id)->update([
                'state' => 1
            ]);
        }
        if($state){
            Session::flash('nesHC', ['msg' => '<b>Success!</b> '.$name.' state updated successfully!', 'type' => 'success']);
        }else{
            Session::flash('nesHC', ['msg' => '<b>Error!</b> Problem occured change state of Module!', 'type' => 'error']);
        }
        return back();
    }
}
