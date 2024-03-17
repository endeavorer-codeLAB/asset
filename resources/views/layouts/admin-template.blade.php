<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="utf-8" />
  <title></title>

  <meta name="description" content="overview &amp; stats" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  <!-- bootstrap & fontawesome -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('font-awesome/4.5.0/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/ui.jqgrid.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/fonts.googleapis.com.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />
  <link rel="stylesheet" href="{{ asset('css/ace-skins.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/ace-rtl.min.css') }}" />
  <script src="{{ asset('js/ace-extra.min.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script src="http://jeromeetienne.github.io/jquery-qrcode/src/jquery.qrcode.js"></script>
<script src="http://jeromeetienne.github.io/jquery-qrcode/src/qrcode.js"></script>
</head>

<body class="skin-1">
  <div id="navbar" class="navbar navbar-default ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
      <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
        <span class="sr-only">Toggle sidebar</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>
      </button>

      <div class="navbar-header pull-left">
        <a href="" class="navbar-brand">
          <small>
            <!-- <i class="fa fa-leaf"></i> -->
            IT Asset Management
          </small>
        </a>
      </div>

      <div class="navbar-buttons navbar-header pull-right" role="navigation">
        <ul class="nav ace-nav">
          <li class="light-blue dropdown-modal">
            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
              <!-- <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" /> -->
              <span class="user-info">
                <small>Welcome,</small>
               
              </span>

              <i class="ace-icon fa fa-caret-down"></i>
            </a>

            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
              <li>
                <a href="#">
                  <i class="ace-icon fa fa-cog"></i>
                  Settings
                </a>
              </li>

              <li>
                <a href="profile.html">
                  <i class="ace-icon fa fa-user"></i>
                  Profile
                </a>
              </li>

              <li class="divider"></li>

              <li>
                <!-- <a href="/home/logout">
                  <i class="ace-icon fa fa-power-off"></i>
                  Logout
                </a> -->
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div><!-- /.navbar-container -->
  </div>

  <div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
      try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar responsive ace-save-state">
      <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
      </script>

      <ul class="nav nav-list">

        <li class="active">
          <a href="">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Home </span>
          </a>

          <b class="arrow"></b>
        </li>
        <li class="">
          <a href="#">
            <!-- <i class="menu-icon fa fa-pencil-square-o"></i> -->
            <span class="menu-text"> Master Data </span>
          </a>
          <li class="">
            <a href="{{ route('admin.asset-inventory.index') }}">
              <i class="menu-icon fa fa-caret-right"></i>
              Asset Inventory
            </a>
          </li>
          <li class="">
            <a href="/department">
              <i class="menu-icon fa fa-caret-right"></i>
              Department
            </a>
            <b class="arrow"></b>
          </li>
        </li>

       

        <li class="">
          <a href="#" class="dropdown-toggle">
            <span class="menu-text">
              Transaction
            </span>
            <b class="arrow fa fa-angle-down"></b>
          </a>
          <ul class="submenu">
          <a href="/asset" class="">
          <li class="">
              <a href="#" class="">
                <i class="menu-icon fa fa-caret-right"></i>
                Asset - Request
              </a>        
          </ul>
          <ul class="submenu">
            <li class="">
              <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>
                Asset - Incoming
                <b class="arrow fa fa-angle-down"></b>
              </a>

              <b class="arrow"></b>

              <ul class="submenu">
                <li class="">
                  <a href="/asset">
                  <i class="menu-icon fa fa-caret-right"></i>
                    Asset - Repair
                  </a>
                  <b class="arrow"></b>
                </li>

                <li class="">
                  <a href="/asset/change">
                  <i class="menu-icon fa fa-caret-right"></i>
                    Asset RR
                  </a>
                  <b class="arrow"></b>
                </li>
              </ul>
            </li>

            <li class="">
              <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-caret-right"></i>
                Asset Outgoing
                <b class="arrow fa fa-angle-down"></b>
              </a>

              <b class="arrow"></b>

              <ul class="submenu">
                <li class="">
                  <a href="top-menu.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Issue - Repaired
                  </a>
                  <b class="arrow"></b>
                </li>

                <li class="">
                  <a href="two-menu-1.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Issue - GI
                  </a>
                  <b class="arrow"></b>
                </li>

                <li class="">
                  <a href="two-menu-1.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Issue - ADV
                  </a>
                  <b class="arrow"></b>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="">
          <a href="#">
            <i class="menu-icon fa fa-tasks"></i>
            Reports
          </a>
          <b class="arrow"></b>
        </li>
        
        <li class="">
          <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-gear"></i>
            <span class="menu-text">
              Configuration
            </span>
            <b class="arrow fa fa-angle-down"></b>
          </a>

          <ul class="submenu">
            <li class="">
              <a href="/user">
                <i class="menu-icon fa fa-caret-right"></i>
                User Access
              </a>
            </li>
          </ul>
        </li>
      </ul><!-- /.nav-list -->

      <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
      </div>
    </div>

    <div class="main-content">
      <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
          <ul class="breadcrumb">
            <li>
              <i class="ace-icon fa fa-home home-icon"></i>
              <a href="">Home</a>
            </li>
            <li class="active">Dashboard</li>
          </ul><!-- /.breadcrumb -->

          <div class="nav-search" id="nav-search">
            <form class="form-search">
              <span class="input-icon">
                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                <i class="ace-icon fa fa-search nav-search-icon"></i>
              </span>
            </form>
          </div><!-- /.nav-search -->
        </div>

        <div class="page-content">
          <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
              <i class="ace-icon fa fa-cog bigger-130"></i>
            </div>

            <div class="ace-settings-box clearfix" id="ace-settings-box">
              <div class="pull-left width-50">
                <div class="ace-settings-item">
                  <div class="pull-left">
                    <select id="skin-colorpicker" class="hide">
                      <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                      <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                      <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                      <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                    </select>
                  </div>
                  <span>&nbsp; Choose Skin</span>
                </div>

                <div class="ace-settings-item">
                  <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                  <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                </div>

                <div class="ace-settings-item">
                  <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                  <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>

                <div class="ace-settings-item">
                  <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                  <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                </div>

              </div>

            </div><!-- /.ace-settings-box -->
          </div><!-- /.ace-settings-container -->

          <div class="page-header">
            <h1>
             
              <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
               
              </small>
            </h1>
          </div><!-- /.page-header -->

          <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT START -->
                @yield('content')
                </div><!-- /.col -->
                </div><!-- /.row -->
                </div><!-- /.page-content -->
                </div>
                </div><!-- /.main-content -->


                <div class="footer">
  <div class="footer-inner">
    <div class="footer-content">
      <span class="bigger-120">
        <span class="blue bolder">WOF - IT Department | IT Asset Management</span>
        Application &copy; 2024
      </span>

      &nbsp; &nbsp;
      <span class="action-buttons">
        <a href="#">
          <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
        </a>

        <a href="#">
          <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
        </a>

        <a href="#">
          <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
        </a>
      </span>
    </div>
  </div>
</div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
  <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div>
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script type="text/javascript">
  if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
</script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>

<script src="{{ asset('js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('js/jquery.sparkline.index.min.js') }}"></script>
<script src="{{ asset('js/jquery.flot.min.js') }}"></script>
<script src="{{ asset('js/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('js/ace-elements.min.js') }}"></script>
<script src="{{ asset('js/ace.min.js') }}"></script>

<script src="{{ asset('js/jquery.jqGrid.min.js') }}"></script>
<script src="{{ asset('js/grid.locale-en.js') }}"></script>

<script src="{{ asset('js/script.js') }}"></script>



<script type="text/javascript">
  jQuery(function($) {
    var myTable = $('#dynamic-table').DataTable( {
      bAutoWidth: false,
      "aoColumns": [
      { "bSortable": false },
      null, null,null, 
      { "bSortable": false }
      ],
      "aaSorting": [],      

      select: {
        style: 'multi'
      }
    } );      


    $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

    new $.fn.dataTable.Buttons( myTable, {
      buttons: [
      {
        "extend": "colvis",
        "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
        "className": "btn btn-white btn-primary btn-bold",
        columns: ':not(:first):not(:last)'
      },
      {
        "extend": "copy",
        "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
        "className": "btn btn-white btn-primary btn-bold"
      },
      {
        "extend": "csv",
        "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
        "className": "btn btn-white btn-primary btn-bold"
      },
      {
        "extend": "excel",
        "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
        "className": "btn btn-white btn-primary btn-bold"
      },
      {
        "extend": "pdf",
        "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
        "className": "btn btn-white btn-primary btn-bold"
      },
      {
        "extend": "print",
        "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
        "className": "btn btn-white btn-primary btn-bold",
        autoPrint: false,
        message: 'This print was produced using the Print button for DataTables'
      }     
      ]
    } );
    
    myTable.buttons().container().appendTo( $('.tableTools-container') );

    var defaultCopyAction = myTable.button(1).action();
    myTable.button(1).action(function (e, dt, button, config) {
      defaultCopyAction(e, dt, button, config);
      $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
    });


    var defaultColvisAction = myTable.button(0).action();
    myTable.button(0).action(function (e, dt, button, config) {

      defaultColvisAction(e, dt, button, config);


      if($('.dt-button-collection > .dropdown-menu').length == 0) {
        $('.dt-button-collection')
        .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
        .find('a').attr('href', '#').wrap("<li />")
      }
      $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
    });

    setTimeout(function() {
      $($('.tableTools-container')).find('a.dt-button').each(function() {
        var div = $(this).find(' > div').first();
        if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
        else $(this).tooltip({container: 'body', title: $(this).text()});
      });
    }, 500);  

    myTable.on( 'select', function ( e, dt, type, index ) {
      if ( type === 'row' ) {
        $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
      }
    } );
    myTable.on( 'deselect', function ( e, dt, type, index ) {
      if ( type === 'row' ) {
        $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
      }
    } );

    $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

    $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
      var th_checked = this.checked;

      $('#dynamic-table').find('tbody > tr').each(function(){
        var row = this;
        if(th_checked) myTable.row(row).select();
        else  myTable.row(row).deselect();
      });
    });

    $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
      var row = $(this).closest('tr').get(0);
      if(this.checked) myTable.row(row).deselect();
      else myTable.row(row).select();
    });


    $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
      e.stopImmediatePropagation();
      e.stopPropagation();
      e.preventDefault();
    });
  })
</script>
</body>
</html>      