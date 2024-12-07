<!doctype html>
<html lang="en" dir="ltr">
<!-- This "app.blade.php" master page is used for all the pages content present in "views/livewire" except "custom" and "switcher" pages -->


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">

    <!-- TITLE -->
    <title>Noa - Laravel Bootstrap 5 Admin & Dashboard Template</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}admin/assets/images/brand/favicon.ico" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('/') }}admin/assets/plugins/bootstrap/css/bootstrap.min.css"
        rel="stylesheet" />
    {{-- fontawesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STYLE CSS -->
    <link href="{{ asset('/') }}admin/assets/css/style.css" rel="stylesheet" />
    <link href="{{ asset('/') }}admin/assets/css/skin-modes.css" rel="stylesheet" />



    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('/') }}admin/assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('/') }}admin/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{ asset('/') }}admin/assets/switcher/demo.css" rel="stylesheet">
    <!-- Animate css -->
    <link href="{{ asset('/') }}admin/assets/css/animated.css" rel="stylesheet" />
</head>

<body class="ltr app sidebar-mini">

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            @include('admin.includes.header')
            @include('admin.includes.sidebar')

            <!--app-content open-->
            <div class="app-content main-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">



                        @yield('body')
                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- page -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- JQUERY JS -->
    <script src="{{ asset('/') }}admin/assets/plugins/jquery/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('/') }}admin/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ asset('/') }}admin/assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('/') }}admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/p-scroll/pscroll.js"></script>

    <!-- STICKY JS -->
    <script src="{{ asset('/') }}admin/assets/js/sticky.js"></script>


    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('/') }}admin/assets/plugins/select2/select2.full.min.js"></script>

    <!-- BOOTSTRAP MAX-LENGTH JS -->
    <script src="{{ asset('/') }}admin/assets/plugins/bootstrap-maxlength/dist/bootstrap-maxlength.min.js"></script>
    <!-- DATA TABLE JS-->
    <script src="{{ asset('/') }}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/datatable/js/jszip.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>

    <!-- TABLE EDITS JS-->
    <script src="{{ asset('/') }}admin/assets/plugins/jQuery-table-edits/table-edits.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/jQuery-table-edits/table-edits.js"></script>

    <!-- INTERNAL DATATABLES JS -->
    <script src="{{ asset('/') }}admin/assets/js/table-editable.js"></script>


    <!-- COLOR THEME JS -->
    <script src="{{ asset('/') }}admin/assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('/') }}admin/assets/js/custom.js"></script>

    <!--Internal Fancy uploader js-->
    <script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/jquery.fileupload.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/fancy-uploader.js"></script>

    <!-- FORM ELEMENTS JS -->
    <script src="{{ asset('/') }}admin/assets/js/formelementadvnced.js"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ asset('/') }}admin/assets/plugins/fileuploads/js/fileupload.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/fileuploads/js/file-upload.js"></script>
    <!-- SELECT2 JS -->
    <script src="{{ asset('/') }}admin/assets/plugins/select2/select2.full.min.js"></script>
    <!-- INTERNAL Summernote Editor js -->
    <script src="{{ asset('/') }}admin/assets/plugins/summernote-editor/summernote1.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/summernote.js"></script>

    <!-- WYSIWYG Editor JS -->
    <script src="{{ asset('/') }}admin/assets/plugins/wysiwyag/jquery.richtext.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/wysiwyag/wysiwyag.js"></script>
    {{-- custom ajax --}}
    <script>
        function getSubCategoryByCategory(categoryId) {
            $.ajax({
                method: "GET",
                url: "{{route('get-sub-category-by-category')}}",
                data:{id: categoryId},
                DataType: 'json',
                success: function (response){
                    var option = '';
                    option+= '<option>--Select Sub category--</option>';
                    $.each(response,function (key,value){
                        option+= '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#subcategoryid').empty();
                    $('#subcategoryid').append(option);
                }
            });
        }
    </script>
</body>



</html>
