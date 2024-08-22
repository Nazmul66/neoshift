<!DOCTYPE html>
<html lang="en">
<head>

    @include('frontend.include.css')

</head>
<body>

    <!-- Header section start -->
        @include('frontend.include.header')
    <!-- Header section end -->


        <!-- Body-content start -->

            @yield('body-content')

        <!-- Body-content end -->


    <!-- Footer section start  -->
        @include('frontend.include.footer')
    <!-- Footer section end -->


    <!-- Script section -->
        @include('frontend.include.script')

</body>
</html>
