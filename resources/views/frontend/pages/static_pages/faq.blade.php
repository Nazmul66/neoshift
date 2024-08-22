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
                            <h1>FAQ</h1>
                            <ul class="breadcrumb_list">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a type="button">/</a>
                                </li>
                                <li>
                                    <a href="javascript::void()">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    <!-- Breadcrumb section end -->


    <!-- Faq section start [Done] -->
        <section class="faq_section exception_mesurement">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="faq_title">
                            <h5>FAQ</h5>
                            <h2>Any Questions? Find Here.</h2>
                        </div>

                        <div class="col-lg-10 offset-lg-1">

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Mauris iaculis, leo ut malesuada sodales ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS</p>
                                    </div>
                                </div>
                                </div>


                                <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ADuis quis suscipit justo. Sed ac tempor ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS</p>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Fusce nec tortor massa ed efficitur neque ?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Faq section end -->

@endsection


@push('add-js')

@endpush

