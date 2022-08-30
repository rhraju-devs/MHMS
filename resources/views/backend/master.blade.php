<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - MHMS Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{url('backend/css/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>


   @yield('css')
</head>

<body class="sb-nav-fixed">

    <!-- Header file include -->

    @include('backend.fixed.header')

    <!-- Header file include -->



    <div id="layoutSidenav">

        <!-- Sidebar Nav Include -->
        @include('backend.fixed.sidebar')
        <!-- Sidebar Nav Include -->
        <div id="layoutSidenav_content">
            <main>
                @yield('admin_content')
            </main>

            <!-- Footer Nav Include -->
            @include('backend.fixed.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="backend/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{url('backend/assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{url('backend/assets/demo/chart-bar-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{url('backend/js/datatables-simple-demo.js')}}"></script>

    <!-- Multiselect Js start -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js">
    </script> -->


    <!-- <script>
        $(document).ready(function () {
            $('select').multiselect({
                templates: { // Use the Awesome Bootstrap Checkbox structure
                    li: '<li class="checkList"><a tabindex="0"><div class="aweCheckbox aweCheckbox-danger"><label for=""></label></div></a></li>'
                }
            });
            $('.multiselect-container div.aweCheckbox').each(function (index) {

                var id = 'multiselect-' + index,
                    $input = $(this).find('input');

                // Associate the label and the input
                $(this).find('label').attr('for', id);
                $input.attr('id', id);

                // Remove the input from the label wrapper
                $input.detach();

                // Place the input back in before the label
                $input.prependTo($(this));

                $(this).click(function (e) {
                    // Prevents the click from bubbling up and hiding the dropdown
                    e.stopPropagation();
                });

            });
        });

    </script> -->
    <!-- Multiselect Js end -->
</body>

</html>
