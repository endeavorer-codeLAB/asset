<html>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
    <body>

   Asset Report - 
    <table id="customers">
                   <thead>
                   <tr>
                            <th style="width:120px;">Qr Code</th>
                            <th>Description</th>
                            <th style="width:250px;">Remarks</th>
                    </tr>
                   </thead>
                   <tbody>
                        @foreach ($assets as $asset)
                            <tr>
                                <td > <img src='data:image/png;base64, {!! base64_encode(QrCode::size(100)->generate($asset->assetDescription.','.$asset->assetQty.' '.$asset->assetUnit.' Status: '.$asset->assetStatus.' Remarks: '.$asset->assetRemarks)) !!}' /></td>
                                <td>{{$asset->assetDescription}}</td>
                                <td>
                                {{$asset->assetRemarks}}
                                </td>
                            </tr>
                        @endforeach
                   </tbody>
                    </table>
    </body>
</html>