@extends('layouts.admin-template')

@section('content')

<div class="row">
    <div class="col-md-2">
        <a class="btn btn-primary btn-sm" href="{{ route('admin.asset-inventory.create') }}"><i class="fa fa-plus"></i>  Add New Item</a>
    </div>
    <div class="col-md-9"></div>
    <div class="col-md-1">
        <a class="btn btn-success btn-sm" href="" onClick="exportToExcel('myTable');"><i class="fa fa-print"></i>  Print</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">

                <div class="panel panel-default">
              
                <div class="panel-heading"><strong>Asset Inventory List</strong></div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover">
                   <thead>
                   <tr>
                            <th style="width:120px;">Qr Code</th>
                            <th>Description</th>
                            <th style="width:250px;">Action</th>
                    </tr>
                   </thead>
                   <tbody>
                        @foreach ($assets as $asset)
                            <tr>
                                <td >{!! QrCode::size(100)->generate($asset->assetDescription.','.$asset->assetQty.' '.$asset->assetUnit.' Status: '.$asset->assetStatus.' Remarks: '.$asset->assetRemarks) !!}</td>
                                <td>{{$asset->assetDescription}}</td>
                                <td>
                                    <a href="/admin/asset-inventory/{{$asset->id}}" class="btn btn-success btn-sm">
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



<div style="display:none;">
<table id="myTable" border=1>
                   
                       
                            <th>Qr Code</th>
                            <th>Description</th>
                        
                <tr><br/><br/><br/><br/>
                        @foreach ($assets as $asset)
                            <tr>
                                <td ><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsB8HM8jAceDhu3oLLuvumHRJ8obiQUOIswXYWIEGTUA&s" alt=""></td>
                                <td >{{$asset->assetDescription}}</td>
                                
                            </tr>
                        @endforeach
</tr>
                 
                    </table>
</div>

<script>
function exportToExcel() {
        const table = document.getElementById('myTable');
        const rows = table.getElementsByTagName('tr');
        const csvData = [];

        // Iterate through each row and collect cell data
        for (let i = 0; i < rows.length; i++) {
            const row = rows[i];
            const rowData = [];
            const cells = row.getElementsByTagName('td');

            for (let j = 0; j < cells.length; j++) {
                rowData.push(cells[j].innerHTML);
            }

            csvData.push(rowData.join(','));
        }

        // Create a CSV content
        const csvContent = 'Content-Type: application/vnd.ms-excel' + csvData.join('\n');

        // Create a link element and trigger a click event to download the CSV file
        const link = document.createElement('a');
        link.href = encodeURI(csvContent);
        link.target = '_blank';
        link.download = 'exported_table.xls';
        link.click();
    }
</script>
@endsection
