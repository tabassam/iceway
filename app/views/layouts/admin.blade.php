<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') :: NBC Japan Admin</title>

    <!-- Bootstrap Core CSS -->
    @include('admin.shared.css_links')
    <!-- jQuery -->
    @include('admin.shared.js_links')
</head>

<body>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <!-- /.navbar-header -->

        @include('admin.shared.header')
        <!-- /.navbar-top-links -->
        @include('admin.shared.side_bar')
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">@yield('page_heading')</h1>
                @yield('search_panel')
            </div>
            <!-- /.col-lg-12 -->
        </div>
@yield('content')
        </div>
</div>
<!-- /#wrapper -->

</body>

</html>
