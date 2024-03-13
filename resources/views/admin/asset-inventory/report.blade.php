
@foreach($reports as $report)


@endforeach
    

    
<?
    
    header("Content-type: application/vnd.ms-excel; name='excel'");
    header("Content-Disposition: attachment; filename=exportfile.pdf");
    header("Pragma: no-cache");
    header("Expires: 0");
?>