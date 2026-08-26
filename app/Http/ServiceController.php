<?php

namespace App\Http\Controllers;

use App\Support\FinbexServices;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(string $slug)
    {
        $services = FinbexServices::all();

        abort_unless(isset($services[$slug]), 404);

        return view('pages.service-details', [
            'services' => $services,
            'service' => $services[$slug],
            'currentSlug' => $slug,
        ]);
    }
}
