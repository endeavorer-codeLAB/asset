<?php

namespace App\Http\Controllers\Admin\AssetInventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssetInventory;

class AssetInventoryController extends Controller
{
    public function index(){
        $assets = AssetInventory::all();
        return view('admin.asset-inventory.index',compact('assets'));
    }

    public function create(){
        return view('admin.asset-inventory.create');
    }
}
