    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('public/backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('public/backend/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('public/backend/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('public/backend/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('public/backend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('public/backend/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('public/backend/assets/js/dashboards-analytics.js') }}"></script>

    @stack('add-js')


    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>


