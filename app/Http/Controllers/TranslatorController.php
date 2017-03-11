<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Translation\Translator;
use Illuminate\Http\Request;
Use App\Country;


class TranslatorController extends Controller {


    public function translate($lang = 'ca',$nation = 'ca') {

        session('nation',$nation);
        App::setLocale($lang);
        $country = Country::where('code', $nation)->first();
        $translation = $country->translate();

        return view('welcome',['translation' => $translation]);


    }
}
