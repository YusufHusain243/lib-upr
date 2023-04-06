<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Editors</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/codemirror/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/codemirror/theme/monokai.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/simplemde/simplemde.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin/components/navbar')
        @include('admin/components/sidebar')

        @yield('content')

        @include('admin/components/footer')

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <script src="{{ asset('/assets/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/codemirror/codemirror.js') }}"></script>
    <script src="{{ asset('/assets/plugins/codemirror/mode/css/css.js') }}"></script>
    <script src="{{ asset('/assets/plugins/codemirror/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('/assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>

    <script src="{{asset('/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('/assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    
    @stack('summernote')

    @stack('datatables')
</body>

</html>
