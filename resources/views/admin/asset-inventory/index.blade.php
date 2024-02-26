@extends('layouts.admin-template')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary btn-sm" href="{{ route('admin.asset-inventory.create') }}"><i class="fa fa-plus"></i>  Add New Item</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">

                <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><strong>Asset Inventory List</strong></div>
                <div class="panel-body">
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                   <thead>
                   <tr>
                            <th>ID</th>
                            <th>Description</th>
                            <th style="width:250px;">Action</th>
                    </tr>
                   </thead>
                   <tbody>
                        @foreach ($assets as $asset)
                            <tr>
                                <td>{{$asset->id}}</td>
                                <td>{{$asset->assetDescription}}</td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm">
                                    <i class="fa fa-eye"></i>
                                    View
                                    </a>
                                    <a href="" class="btn btn-warning btn-sm ml-1">
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm ml-1">
                                    <i class="fa fa-trash"></i>
                                    Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                   </tbody>
                    </table>
                </div>
                </div>

    </div>
</div>
@endsection
