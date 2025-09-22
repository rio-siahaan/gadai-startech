<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DependentDropdownController extends Controller
{
    public function provinces()
    {
        return \Indonesia::allProvinces();
    }

    public function cities(Request $request)
    {
        return \Indonesia::findProvince($request->id, ['cities'])->cities->pluck('name', 'id');
    }

    
}
