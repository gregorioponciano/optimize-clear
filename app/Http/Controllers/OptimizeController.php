<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class OptimizeController extends Controller
{
    public function teste(Request $request)
    {
        if ($request->has('action')) {

            match ($request->action) {
                'cache'    => Artisan::call('cache:clear'),
                'config'   => Artisan::call('config:clear'),
                'view'     => Artisan::call('view:clear'),
                'route'    => Artisan::call('route:clear'),
                'optimize' => Artisan::call('optimize:clear'),
                default    => null,
            };

            // Dump autoload (opcional e perigoso)
            if ($request->action === 'dump') {
                exec('composer dump-autoload');
            }

            return redirect('/')->with('success', 'Comando executado com sucesso!');
        }

        return view('teste');
    }
}
