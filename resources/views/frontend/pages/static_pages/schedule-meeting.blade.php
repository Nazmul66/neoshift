@extends('frontend.layout.master')

@push('meta-title')

@endpush

@push('add-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush


@section('body-content')

    {{-- <!-- Breadcrumb section start -->
       <section class="breadcrumb_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_content">
                            <h1>Schedule Meeting</h1>
                            <ul class="breadcrumb_list">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a type="button">/</a>
                                </li>
                                <li>
                                    <a href="javascript::void()">Schedule Meeting</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    <!-- Breadcrumb section end --> --}}


    <!-- Schedule section start -->
    <section class="schedule_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-sm-2 order-md-2 order-lg-1">
                  <div class="schedual_meeting_img">
                     <img src="{{ asset('public/frontend/assets/images/schedule_meeting.png') }}" alt="">
                  </div>
                </div>

                <div class="col-lg-6 offset-lg-1 order-1 order-sm-1 order-md-1 order-lg-2">
                    <div class="contact_form">
                        <div class="schedule_title">
                            <h5>Schedule</h5>
                            <h2>Schedule Meeting</h2>
                        </div>

                        <form action="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form_data">
                                        <input type="text" name="name" class="form_control" id="name" placeholder="Full Name....">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form_data">
                                        <input type="text" name="phone" class="form_control" id="phone" placeholder="Mobile Phone....">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form_data">
                                        <input type="email" name="email" class="form_control" id="email" placeholder="Email Address....">
                                    </div>
                                </div>

                                <button type="submit" class="contact_buttons">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- {!! $settings->calendly_api !!} --}}
            </div>
        </div>
      </section>
    <!-- Schedule section start -->

@endsection


@push('add-js')

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    flatpickr("#datetimepicker", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        // minDate: "today",
        // maxDate: new Date().fp_incr(14)
    });
</script>

@endpush
