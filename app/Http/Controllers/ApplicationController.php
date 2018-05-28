<?php

namespace App\Http\Controllers;

use App\Application;
use App\Http\Requests\AddAppRequest;
use App\Http\Requests\EditAppRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ApplicationController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $apps = Application::all();
        return view('apps.index', ['apps' => $apps]);
    }

    public function showAdd(){
        return view('apps.add');
    }

    public function doAdd(AddAppRequest $request){
        $app = new Application();
        $app->type = $request->type;
        $app->name = $request->name;
        $app->package = $request->package;
        $app->version_name = $request->version_name;
        $app->version_code = $request->version_code;
        $app->admob_banner = $request->admob_banner;
        $app->admob_interstitial = $request->admob_interstitial;
        $app->admob_video = $request->admob_video;
        $app->unity_video = $request->unity_video;
        $app->facebook_name = $request->facebook_name;
        $app->facebook_app_id = $request->facebook_app_id;
        $app->facebook_ads = $request->facebook_ads;
        $app->startapp_id = $request->startapp_id;
        $app->startapp_id = $request->startapp_id;
        $app->interstitial = $request->interstitial;
        $app->video = $request->video;
        $app->token = md5('huong_ham' . $request->package);
        $app->rate = $request->rate;
        $app->save();
        return redirect()->route('app.index')->with('success', true);
    }

    public function showEdit($id){
       $app = Application::find($id);
       return view('apps.edit', ['app' => $app]);
    }

    public function doEdit(EditAppRequest $request, $id){
        $app = Application::find($id);
        $app->type = $request->type;
        $app->name = $request->name;
        $app->package = $request->package;
        $app->version_name = $request->version_name;
        $app->version_code = $request->version_code;
        $app->admob_banner = $request->admob_banner;
        $app->admob_interstitial = $request->admob_interstitial;
        $app->admob_video = $request->admob_video;
        $app->unity_video = $request->unity_video;
        $app->facebook_name = $request->facebook_name;
        $app->facebook_app_id = $request->facebook_app_id;
        $app->facebook_ads = $request->facebook_ads;
        $app->startapp_id = $request->startapp_id;
        $app->startapp_id = $request->startapp_id;
        $app->interstitial = $request->interstitial;
        $app->video = $request->video;
        $app->rate = $request->rate;
        $app->save();
        return redirect()->route('app.edit', ['id' => $id])->with('success', true);
    }

    public function doDelete($id){
        $app = Application::find($id);
        $app->delete();
        return redirect()->route('app.index')->with('success', true);
    }

}
