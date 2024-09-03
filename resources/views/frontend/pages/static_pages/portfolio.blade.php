@extends('frontend.layout.master')

@push('meta-title')

@endpush

@push('add-css')

@endpush


@section('body-content')


    <!-- Breadcrumb section start -->
       <section class="breadcrumb_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_content">
                            <h1>Portfolio</h1>
                            <ul class="breadcrumb_list">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a type="button">/</a>
                                </li>
                                <li>
                                    <a href="javascript::void()">Portfolio</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    <!-- Breadcrumb section end -->


   <!-- Portfolio Section Start -->
   <section class="portfolio_section top_measurement">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio_title">
                    <h5>Portfolio</h5>
                    <h2>Work Portfolio</h2>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="portfolio_menu">
                    <ul>
                        @foreach ($portfolioCategories as $row => $item)
                            <li class="menu_listing {{ $row == 0 ? 'active_portfolio' : '' }}" data-id={{ $item->id }}>
                                <i class='{{ $item->category_icon }}'></i> 
                                {{ $item->category_name }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="portfolio_show">
                    {{-- Fetch All Data --}}
                    <div class="portfolio_container">

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Portfolio Section end -->


@endsection


@push('add-js')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.menu_listing');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                tabs.forEach(tab => tab.classList.remove('active_portfolio'));
                
                this.classList.add('active_portfolio');
                fetchData($(this).attr('data-id')); // Fetch data when tab is clicked
            });
        });

        // Function to fetch and display data based on the provided ID
        function fetchData(id) {
            $.ajax({
                type: "GET",
                url: "{{ url('admin/portfolioCat-tabData') }}/" + id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (res) {
                    console.log(res.data);

                    let portfolioContainer = $('.portfolio_container');
                    
                    if (res.data.length > 0) {
                        portfolioContainer.empty(); // Clear existing content

                        res.data.forEach(function(item) {
                            let imageUrl = "{{ asset('') }}/" + item.portfolio_image;

                            // Create HTML structure for each portfolio item
                            let portfolioItem = `
                                <div class="portfolio_showcase">
                                    <div class="portfolio_image">
                                        <img src="${imageUrl}" alt="">
                                        <div class="portfolio_overlay">
                                            <a class="portfolio_link" href="${item.portfolio_url}"><i class='bx bx-link-alt'></i></a>
                                        </div>
                                    </div>
                                    <h3>${item.portfolio_name}</h3>
                                </div>
                            `;
                            portfolioContainer.append(portfolioItem); // Append to the container
                        });
                    } else {
                        portfolioContainer.empty(); // Clear existing content
                        portfolioContainer.append(`
                            <div class="alert alert-info" role="alert">
                                 There is no data here
                            </div>
                        `);
                    }
                },
                error: function (err) {
                    console.log('error');
                }
            });
        }

        // Call fetchData with default ID or the ID of the first tab when the page loads
        let defaultTab = document.querySelector('.menu_listing.active_portfolio');
        let defaultId = defaultTab ? $(defaultTab).attr('data-id') : 'default-id'; // Replace 'default-id' with the actual default ID if needed
        fetchData(defaultId);
    });
</script>

@endpush
