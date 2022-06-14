<!DOCTYPE html>
<html>
<head>
  <!-- Basic Page Info -->
  <meta charset="utf-8">
  <title>Admin</title>

  <!-- Site favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vendors/images/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vendors/images/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendors/images/favicon-16x16.png') }}">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/core.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/icon-font.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/style.css') }}">

  {{-- toastr --}}
      <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-119386393-1');
  </script>
</head>
<body>
    <!-- <div class="pre-loader">
      <div class="pre-loader-box">
        <div class="loader-logo"><img src="{{asset('admin/vendors/images/deskapp-logo.svg')}}" alt="" /></div>
        <div class="loader-progress" id="progress_div">
          <div class="bar" id="bar1"></div>
        </div>
        <div class="percent" id="percent1">0%</div>
        <div class="loading-text">Loading...</div>
      </div>
    </div> -->

	@include('admin.header')

	@include('admin.right_sidebar')

	@include('admin.left_sidebar')

	@yield('section')
   
    <!-- js -->
  <script src="{{ asset('admin/vendors/scripts/core.js') }}"></script>
  <script src="{{ asset('admin/vendors/scripts/script.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/scripts/process.js') }}"></script>
  <script src="{{ asset('admin/vendors/scripts/layout-settings.js') }}"></script>
  <script src="{{ asset('admin/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('admin/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('admin/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
  <!-- buttons for Export datatable -->
  <script src="{{ asset('admin/src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('admin/src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('admin/src/plugins/datatables/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('admin/src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('admin/src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('admin/src/plugins/datatables/js/pdfmake.min.js') }}"></script>
  <script src="{{ asset('admin/src/plugins/datatables/js/vfs_fonts.js') }}"></script>
  <!-- Datatable Setting js -->
  <script src="{{ asset('admin/vendors/scripts/datatable-setting.js') }}"></script>
  {{-- ckeditor --}}
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'deskripsi' );
  </script>
  <script>
    function previewCover() {
        const cover = document.querySelector('#cover');
        const coverPreview = document.querySelector('.cover-preview');


        const oFReader = new FileReader();
        oFReader.readAsDataURL(cover.files[0]);

        oFReader.onload = function (oFREvent) {
            coverPreview.src = oFREvent.target.result;
        }
    }
  </script>
  {{-- notifikasi toastr --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
      <script>
          $(document).ready(function() {
              toastr.options.timeOut = 10000;
              @if (Session::has('error'))
                  toastr.error('{{ Session::get('error') }}');
              @elseif(Session::has('success'))
                  toastr.success('{{ Session::get('success') }}');
              @elseif(Session::has('update'))
                  toastr.success('{{ Session::get('update') }}');
              @elseif(Session::has('delete'))
                  toastr.success('{{ Session::get('delete') }}');
              @endif
          });
      </script>
  </body>
</html>
