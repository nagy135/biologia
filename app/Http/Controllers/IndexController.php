<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;

class IndexController extends Controller
{
    public function index($id){
        return $this->base('index');
    }

    public function level($id){
        return $this->base('level');
    }

    private function base(string $template, $context=[]){
        $levels = Level::all();
        $context['levels'] = $levels;
        return view($template, $context);
    }

}
