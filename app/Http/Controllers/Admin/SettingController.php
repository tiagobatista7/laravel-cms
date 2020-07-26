<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('can:level-admin');
    }

    public function index() {

        $dbsettings = Setting::get();

        foreach($dbsettings as $dbsetting) {
            $settings[ $dbsetting['name'] ] = $dbsetting['content'];
        }

        return view('admin.settings.index', [
            'settings' => $settings

        ]);
    }

            //Pega os dados e salva no banco

    public function save(Request $request) {
        $data = $request->only([
            'title', 'subtitle', 'banner_title', 'banner_subtitle', 'endereco', 'email', 'telefone', 'whatsapp', 'facebook', 'twitter', 'instagram', 'bgcolor', 'textcolor'
        ]);

        $validator = $this->validator($data);

        if($validator->fails()) {

            // redirecionar

            return redirect()->route('settings')
            ->withErrors($validator);
        }

        foreach($data as $item => $value) {
            Setting::where('name', $item)->update([
                'content' => $value
            ]);
        }

        return redirect()->route('settings')
        ->with('warning', 'Informações alteradas com sucesso!');
    }

            // Validação

    protected function validator($data) {
        return Validator::make($data, [
            'title' => ['string', 'max:100'],
            'subtitle' => ['string', 'max:100'],
            'email' => ['string', 'email'],
            'bgcolor' => ['string', 'regex:/#[A-Z0-9]{6}/i'],
            'textcolor' => ['string', 'regex:/#[A-Z0-9]{6}/i']
        ]);
    }
}
