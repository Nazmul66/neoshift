    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Owl Carousel JS -->
    <script src="{{ asset('public/frontend/assets/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Toastr JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Bootstrap CDN JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Main JS Linkup -->
    <script src="{{ asset('public/frontend/assets/js/main.js') }}"></script>

    @stack('add-js')

    <script>
        toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "showDuration": "3000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "5000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
    
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type') }}";  // Define the JavaScript variable
    
            switch(type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
    
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
    
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
    
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
            }
        @endif
</script>