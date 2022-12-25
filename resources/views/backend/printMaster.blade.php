<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

@include('backend.includes.head')


<body style="background: #fff !important;">

    <!-- Begin page -->
        <div class="container_fluid">
            @yield('content')
        </div>

    <!-- end main content-->

    @include('backend.includes.scripts')

    <script>
        @if (Session::has('success'))

            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            toastr.success("{{session('success')}}");

        @elseif (Session::has('error'))
            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            toastr.error("{{session('error')}}");

        @elseif (Session::has('info'))
            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            toastr.info("{{session('info')}}");
        @endif
    </script>
</body>

</html>
