<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function analysis(String $unidade = '')
    {
        switch ($unidade) {
            case 'fflch':
                break;

            default:
                // code...
                break;
        }

        return view('platform.index', compact('unidade'));
    }
}
