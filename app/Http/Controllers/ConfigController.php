<?php

namespace App\Http\Controllers;

use App\Models\{Config, Files};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{
    public function index(){
        $config = Config::find(1);
        return view('admin.config',compact('config'));
    }

    public function store(Request $request){
        $defaultConfig = Config::find(1);
        $data = $request->all();
        $file = Files::find(1);

        if($request->logo_id){
            $extension = $request->logo_id->getClientOriginalExtension();
            $fileName = 'logo.'.$extension;
            unlink('/var/www/storage/app/public/'.Files::find(1)->path);
            $path = $request->logo_id->store('logo');

            $file->update(['name'=>$fileName, 'path'=> $path]);
            $data['logo_id'] = 1;
        }
        $defaultConfig->update($data);
        Artisan::call('config:cache');

        return redirect('/');
    }
}
