<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Configuracion;
use App\Models\categoria;

class MenuComposer{

    public function compose(View $view){
        $config     = Configuracion::find(1);
        $submenu    = categoria::all(['slug','nombre']);
        $view->with('config',$config)->with('submenu',$submenu);
    }
}