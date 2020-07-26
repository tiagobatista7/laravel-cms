<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Visitor;
use App\Page;
use App\User;

class HomeController extends Controller
{

public function __construct() {
    $this->middleware('auth');


}

public function index(Request $request) {
    $visitsCount = 0;
    $onlineCount = 0;
    $pageCount = 0;
    $userCount = 0;
    $interval = intval($request->input('interval', 30));

    // Proteção para intervalo de dias

    if($interval > 180) {
            $interval = 180;
}

    // Contagem de visitantes

    $dateInterval = date('Y-m-d H:i:s', strtotime('-'.$interval. 'days'));
    $visitsCount = Visitor::where('date_access','>=', $dateInterval)->count();


    // Contagem de Usuários online

    $datelimit = date('Y-m-d H:i:s', strtotime('-5 minutes'));
    $onlineList = Visitor::select('ip')->where('date_access', '>=', $datelimit)->groupBy('ip')->get();
    $onlineCount = count($onlineList);

    // Contagem de Páginas
    $pageCount = Page::count();



    // Contagem de Usuários
    $userCount = User::count();


    // Contagem para o pageBar

    $pageBar = [];
    $visitsAll = Visitor::selectRaw('page, count(page) as c')->where('date_access','>=', $dateInterval)
    ->groupBy('page')
    ->get();

    foreach($visitsAll as $visit) {
        $pageBar[$visit['page'] ] = intval($visit['c']);
    }

    $pageLabels = json_encode(array_keys($pageBar) );
    $pageValues= json_encode(array_values($pageBar) );


    return view('admin.home', [
        'visitsCount' => $visitsCount,
        'onlineCount' => $onlineCount,
        'pageCount' => $pageCount,
        'userCount' => $userCount,
        'pageLabels' => $pageLabels,
        'pageValues' => $pageValues,
        'dateInterval' => $interval

    ]);
}
}
