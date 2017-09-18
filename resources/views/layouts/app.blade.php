<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Wesaac Admin') }}</title>

    <!-- Styles -->
    {{-- <link href="{{ asset('/welcome/css/app.css') }}" rel="stylesheet"> --}}
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset( '/admin/css/bootstrap.min.css' )}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset( '/admin/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset( '/admin/css/blue.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset( '/admin/css/_all-skins.min.css')}}">
    <!-- Bootstrap WYSIHTML5 -->
    <link rel="stylesheet" href="{{ asset( '/admin/css/bootstrap3-wysihtml5.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

    @yield('content')


    </body>
    <!-- Scripts -->
    {{-- <script src="{{ asset('/welcome/js/app.js') }}"></script> --}}
    <script src="{{ asset( '/admin/js/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset( '/admin/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset( '/admin/js/icheck.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset( '/admin/js/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset( '/admin/js/fastclick.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset( '/admin/js/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset( '/admin/js/app.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset( '/admin/js/demo.js') }}"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    <script type="text/javascript">
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
    </script>






</body>
</html>
