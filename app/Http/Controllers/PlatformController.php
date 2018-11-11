<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlatformController extends Controller
{
    public function analysis(String $unidade = '')
    {
        $unidade = mb_strtolower($unidade);
        $title = '';
        switch ($unidade) {
            case 'eca':
                $title = 'Escola de Artes e Comunicação';
                $json_pure = Storage::get('/analysis/ECA.json');
                $json = json_decode(Storage::get('/analysis/ECA.json'));
                break;
            case 'fea':
                $title = 'Faculdade de Economia e Administração';
                $json_pure = Storage::get('/analysis/FEA.json');
                $json = json_decode(Storage::get('/analysis/FEA.json'));
                break;
            case 'fo':
                $title = 'Faculdade de Odontologia';
                $json_pure = Storage::get('/analysis/FO.json');
                $json = json_decode(Storage::get('/analysis/FO.json'));
                break;
            case 'if':
                $title = 'Instituto de Física';
                $json_pure = Storage::get('/analysis/IF.json');
                $json = json_decode(Storage::get('/analysis/IF.json'));
                break;

            default:
                $json_pure = Storage::get('/analysis/test.json');
                $json = json_decode(Storage::get('/analysis/test.json'));
                break;
        }

        return view('platform.index', compact('unidade', 'json', 'json_pure', 'title'));
    }
}
