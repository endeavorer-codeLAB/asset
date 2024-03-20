@extends('layouts.admin-template')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-warning btn-sm" href="/admin/asset-inventory"><i class="menu-icon fa fa-caret-left"></i> Back to List</a>
    </div>
</div>
<br />

<div class="row">
    <div class="col-md-12">

    <div class="panel panel-default">

                <div class="panel-heading">New Asset Item</div>


                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-6">

                        <form method="post" action="">
                                                    @csrf
                                                    

                                                    <!-- ID -->
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">Asset ID</span>
                                                        <input type="text" name="assetid" value="{{ $assetItem->assetid }}" class="form-control" placeholder="" aria-describedby="basic-addon1" />
                                                    </div>
                                                    <!--  -->


                                                    <!-- Description -->

                                                    <div class="input-group" style="margin-top:10px;">
                                                            <span class="input-group-addon" id="basic-addon1">Description</span>
                                                            <input type="text" name="assetDescription" value="{{ $assetItem->assetDescription }}" class="form-control" placeholder="Type the description of asset item" aria-describedby="basic-addon1" />
                                                    </div>
                                                    <!--  -->


                                                    <!-- Class -->
                                                    <div class="input-group" style="margin-top:10px;">
                                                    <span class="input-group-addon" id="basic-addon1">Class</span>
                                                    
                                                    <!-- <select name="assetClass" class="form-control" placeholder="{{ $assetItem->assetClass }}" aria-describedby="basic-addon1" /> -->
                                                    <input type="text" name="assetClass" value="{{ $assetItem->assetClass }}" class="form-control" placeholder="Type the description of asset item" aria-describedby="basic-addon1" />  
                                                    </select> 
                                                    </div>
                                                    <!--  -->



                                                    <!-- Category -->
                                                    <div class="input-group" style="margin-top:10px;">
                                                    <span class="input-group-addon" id="basic-addon1">Category</span>
                                                    <!-- <select name="assetCategory" class="form-control" placeholder="{{ $assetItem->assetCategory }}" aria-describedby="basic-addon1" /> -->
                                                    <input type="text" name="assetCategory" value="{{ $assetItem->assetCategory }}" class="form-control" placeholder="Type the description of asset item" aria-describedby="basic-addon1" />  
                                                        
                                                    </select>
                                                    </div>
                                                    <!--  -->
                                                    
                                                    
                                                   <div class="row">
                                                    <div class="col-sm-6">
                                                                     <!-- Qty  -->
                                                    <div class="input-group" style="margin-top:10px;">
                                                    <span class="input-group-addon" id="basic-addon1">Quantity</span>
                                                    <input type="number" name="assetQty" value="{{ $assetItem->assetQty }}" class="form-control" placeholder="Type value of quantity" aria-describedby="basic-addon1" />
                                                    </div>
                                                    <!--  -->

                                                   

                                                    </div>
                                                    <div class="col-sm-6">
                                                         <!-- Unit  -->
                                                    <div class="input-group" style="margin-top:10px;">
                                                    <span class="input-group-addon" id="basic-addon1">Unit</span>
                                                    <!-- <select name="assetUnit" class="form-control" placeholder="Select a unit" aria-describedby="basic-addon1" > -->
                                                    <input type="text" name="assetUnit" value="{{ $assetItem->assetUnit }}" class="form-control"  aria-describedby="basic-addon1" />
                                                            
                                                    </div>
                                                    <!--  -->
                                                    </div>
                                                   </div>

                                                   

                                                        
                                    <!-- Status -->
                                    <div class="input-group" style="margin-top:10px;">
                                                    <span class="input-group-addon" id="basic-addon1" >Status</span>
                                                    <!-- <select type="text" name="assetStatus" class="form-control" placeholder="Select the Status" aria-describedby="basic-addon1" /> -->
                                                    <input type="text" name="assetStatus" value="{{ $assetItem->assetStatus }}" class="form-control"  aria-describedby="basic-addon1" />                                             
                                                    </div>
                                                    <!--  -->
                                                        
                                                        
                                                    <!-- remarks -->
                                                    <div class="input-group" style="margin-top:10px;">
                                                    <span class="input-group-addon" id="basic-addon1">Remarks</span>
                                                    <!-- <input type="text" name="assetRemarks" class="form-control" placeholder="Username" aria-describedby="basic-addon1" /> -->
                                                    <textarea type="text" name="assetRemarks" class="form-control" rows="5">{{ $assetItem->assetRemarks }}</textarea>
                                                    </div>
                                                    <!--  -->



                        </div>
                        <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                                <div style="margin-left:100px;margin-top:20px;">
                                                {!! QrCode::size(300)->generate($assetItem->assetDescription.','.$assetItem->assetQty.' '.$assetItem->assetUnit.' Status: '.$assetItem->assetStatus.' Remarks: '.$assetItem->assetRemarks) !!}
                                                </div>
                                        </div>
                                    </div>
                                                   <!--  -->


                            <!-- end col 6 -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-9"></div>
                        <div class="col-sm-1">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-print"></i>  Print</button>
                        </div>
                        

                        <!--  -->
                        <div class="col-sm-1">
                        <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>  Edit</button>
                        </div>


                        <!--  -->
                        <div class="col-sm-1">
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>  Delete</button>
                        </div>
                    </div>
                    </form>
                <!-- Panel body end -->
                </div>

    <!-- end of main panel -->
    </div>


    <!-- end of col 12 main column -->
    </div>

<!-- end of main row -->
</div>

               
     

@endsection
