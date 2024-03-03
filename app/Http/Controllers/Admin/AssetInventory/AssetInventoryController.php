<?php

namespace App\Http\Controllers\Admin\AssetInventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssetInventory;
use App\Http\Requests\AssetInventoryRequest;

class AssetInventoryController extends Controller
{
    public function index(){
        $assets = AssetInventory::all();
        return view('admin.asset-inventory.index',compact('assets'));
    }

    public function create(){
        return view('admin.asset-inventory.create');
    }

    public function store(AssetInventoryRequest $request){
        
        $assetInv = new AssetInventory();
        $assetInv->assetid  = $request->assetid;
        $assetInv->assetDescription  = $request->assetDescription;
        $assetInv->assetClass  = $request->assetClass;
        $assetInv->assetCategory  = $request->assetCategory;
        $assetInv->assetQty  = $request->assetQty;
        $assetInv->assetUnit  = $request->assetUnit;
        $assetInv->assetStatus  = $request->assetStatus;
        $assetInv->assetRemarks  = $request->assetRemarks;
        $assetInv->save();
        return redirect()->back()->with('message','New Program has been added successfully');
    }

    public function show($id) {

        $assetItem = AssetInventory::find($id);
        return view('admin.asset-inventory.show',compact('assetItem'));
    }
}
