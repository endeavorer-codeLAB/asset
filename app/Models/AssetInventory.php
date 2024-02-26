<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetInventory extends Model
{
    protected $fillable = [
        'assetid','assetDescription','assetClass','assetCategory','assetQty','assetUnit','assetStatus','assetRemarks'
       ];
}
