@extends('layouts.admin-template')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-warning btn-sm" href="{{ route('admin.asset-inventory.index') }}"><i class="menu-icon fa fa-caret-left"></i> Back to List</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">

                <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><strong>Add to Asset Inventory</strong></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">

                        <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">Asset ID</span>
                            <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
                        </div>

                        <div class="input-group mt-2" style="margin-top:1.5rem!important;">
                            <span class="input-group-addon" id="sizing-addon2">Description</span>
                            <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
                        </div>

                        <div class="input-group" style="margin-top:1.5rem!important;">
                            <span class="input-group-addon" id="sizing-addon2">Class</span>
                            <select class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
                                <option value="">Laptops/Laptop Parts</option> 
                                <option value="">Desktops/Destop Parts</option>
                                <option value="">Desktops/Laptops Parts</option>
                                <option value="">CPU Tower Server/CPU Tower Server Parts</option>
                                <option value="">Network</option>
                                <option value="">Tools</option> 
                            </select>
                        </div>

                        <div class="input-group" style="margin-top:1.5rem!important;">
                            <span class="input-group-addon" id="sizing-addon2">Category</span>
                            <select class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
                                <option value="">Laptop</option> 
                                <option value="">Desktop CPU Tower</option>
                                <option value="">Desktop Monitor</option>
                                <option value="">Consumables</option>
                                <option value="">Converters</option>
                                <option value="">Storage</option> 
                                <option value="">Memory</option> 
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group mt-2" style="margin-top:1.5rem!important;">
                                        <span class="input-group-addon" id="sizing-addon2">Quantity</span>
                                        <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="input-group" style="margin-top:1.5rem!important;">
                                            <span class="input-group-addon" id="sizing-addon2">Unit</span>
                                            <select class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
                                                <option value="">Pcs</option> 
                                                <option value="">Sets</option>
                                                <option value="">Units</option>
                                                <option value="">Pack</option>
                                                <option value="">Boxes</option>
                                            </select>
                                        </div>
                            </div>
                        </div>


                        


                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
                </div>

    </div>
</div>
@endsection
