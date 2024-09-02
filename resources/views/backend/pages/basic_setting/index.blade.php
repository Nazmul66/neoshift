@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Basic Settings
@endpush


@section('body-content')

 <div class="row">

    @if ( !empty( $basicInfo ) )
      <form method="POST" action="{{ route('admin.basic-info.update', $basicInfo->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    @else
      <form method="POST" action="{{ route('admin.basic-info.store') }}" enctype="multipart/form-data">
        @csrf
    @endif

        <div class="card">
            {{-- Global setting --}}
            <div class="mb-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Basic Settings</h5>
                </div>

                <div class="card-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="Logo" class="form-label">Website Logo</label>
                                <input class="form-control" type="file" name="logo" id="Logo">

                                @if ( !empty( $basicInfo ) )
                                    <img src="{{ asset($basicInfo->logo) }}" alt="" style="width: 150px;">
                                @endif
                            </div>

                            <div class="col mb-3">
                                <label class="form-label" for="first_name">First Name</label>
                                <input type="text" class="form-control"
                                    id="first_name"
                                    name="first_name"
                                    placeholder="Write Here...."
                                    @if ( !empty( $basicInfo ) )
                                    value="{{ $basicInfo->first_name }}"
                                    @endif
                                    >
                            </div>

                            <div class="col mb-3">
                                <label class="form-label" for="first_name">Last Name</label>
                                <input type="text" class="form-control"
                                    id="last_name"
                                    name="last_name"
                                    placeholder="Write Here...."
                                    @if ( !empty( $basicInfo ) )
                                    value="{{ $basicInfo->last_name }}"
                                    @endif
                                    >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label" for="Whatsapp">What'sapp Number</label>
                                <input type="text" class="form-control"
                                    id="Whatsapp"
                                    name="whatsapp"
                                    placeholder="What'sapp Number"
                                    @if ( !empty( $basicInfo ) )
                                    value="{{ $basicInfo->whatsapp }}"
                                    @endif
                                    >
                            </div>

                            <div class="col mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Write Phone"
                                    @if ( !empty( $basicInfo ) )
                                    value="{{ $basicInfo->phone }}"
                                    @endif
                                    required
                                >
                            </div>

                            <div class="col mb-3">
                                <label class="form-label" for="phone_optional">Phone ( Optional )</label>
                                <input type="text" class="form-control" id="phone_optional" name="phone_optional"
                                    @if ( !empty( $basicInfo ) )
                                    value="{{ $basicInfo->phone_optional }}"
                                    @endif
                                    placeholder="Write Phone ( Optional )"
                                    >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    @if ( !empty( $basicInfo ) )
                                        value="{{ $basicInfo->email }}"
                                    @endif
                                    placeholder="Write Email Address"
                                    required>
                            </div>

                            <div class="col mb-3">
                                <label class="form-label" for="email_optional">Email Address ( Optional )</label>
                                <input type="email" class="form-control" id="email_optional" name="email_optional"
                                    @if ( !empty( $basicInfo ) )
                                        value="{{ $basicInfo->email_optional }}"
                                    @endif
                                    placeholder="Write Email Address ( Optional )">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label" for="facebook_pixel">Facebook Pixel</label>
                                <textarea id="facebook_pixel" class="form-control" name="facebook_pixel" placeholder="Facebook Pixel Code Here......">@if ( !empty( $basicInfo ) ){{ $basicInfo->facebook_pixel }} @endif</textarea>
                            </div>

                            <div class="col mb-3">
                                <label class="form-label" for="google_analytics">Google Analytics</label>
                                <textarea id="google_analytics" class="form-control" name="google_analytics" placeholder="Google Analytics Code Here......">@if ( !empty( $basicInfo ) ){{ $basicInfo->google_analytics }}@endif</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label" for="address">Address</label>
                                 <textarea id="address" class="form-control" name="address" placeholder="Write Address" required>@if( !empty( $basicInfo ) ){{ $basicInfo->address }}@endif</textarea>
                             </div>

                             <div class="col mb-3">
                                <label class="form-label" for="address_optional">Address ( Optional )</label>
                                 <textarea id="address_optional" class="form-control" name="address_optional" placeholder="Write Address ( Optional )">@if ( !empty( $basicInfo ) ){{ $basicInfo->address_optional }}@endif</textarea>
                             </div>
                        </div>
                </div>
            </div>

            {{-- Social Links --}}
            <div class="mb-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Social Links</h5>
                </div>

                <div class="card-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook"
                                    @if ( !empty( $basicInfo ) )
                                        value="{{ $basicInfo->facebook }}"
                                    @endif
                                    placeholder="Facebook Link Here....">
                            </div>

                            <div class="col mb-3">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter"
                                    @if ( !empty( $basicInfo ) )
                                        value="{{ $basicInfo->twitter }}"
                                    @endif
                                    placeholder="Twitter Link Here....">
                            </div>

                            <div class="col mb-3">
                                <label for="linkedin" class="form-label">Linkedin</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin"
                                    @if ( !empty( $basicInfo ) )
                                        value="{{ $basicInfo->linkedin }}"
                                    @endif
                                    placeholder="Linkedin Link Here....">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="pinterest" class="form-label">Pinterest</label>
                                <input type="text" class="form-control" id="pinterest" name="pinterest"
                                    @if ( !empty( $basicInfo ) )
                                        value="{{ $basicInfo->pinterest }}"
                                    @endif
                                    placeholder="Pinterest Link Here....">
                            </div>

                            <div class="col mb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram"
                                    @if ( !empty( $basicInfo ) )
                                        value="{{ $basicInfo->instagram }}"
                                    @endif
                                    placeholder="Instagram Link Here....">
                            </div>

                            <div class="col mb-3">
                                <label for="youtube" class="form-label">Youtube</label>
                                <input type="text" class="form-control" id="youtube" name="youtube"
                                    @if ( !empty( $basicInfo ) )
                                        value="{{ $basicInfo->youtube }}"
                                    @endif
                                    placeholder="Youtube Link Here....">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label" for="google_map">Google Map </label>
                                 <textarea id="google_map" class="form-control" name="google_map" placeholder="Embeded link paste here...." required>@if( !empty( $basicInfo ) ){{ $basicInfo->google_map }}@endif</textarea>
                             </div>

                             <div class="col mb-3">
                                <label class="form-label" for="calendly_api">Calendly Api</label>
                                 <textarea id="calendly_api" class="form-control" name="calendly_api" placeholder="Calendly paste here...." required>@if( !empty( $basicInfo ) ){{ $basicInfo->calendly_api }}@endif</textarea>
                             </div>
                        </div>
                </div>
            </div>

            {{-- Footer Links --}}
            <div class="mb-0">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Footer Links</h5>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="favicon" class="form-label">Favicon</label>
                            <input class="form-control" type="file" name="favicon" id="favicon">

                            @if ( !empty( $basicInfo ) )
                                <img src="{{ asset($basicInfo->favicon) }}" alt="" style="width: 150px;">
                            @endif
                        </div>

                        <div class="col mb-3">
                            <label for="footer_logo" class="form-label">Footer Logo</label>
                            <input class="form-control" type="file" name="footer_logo" id="footer_logo">

                            @if ( !empty( $basicInfo ) )
                                <img src="{{ asset($basicInfo->footer_logo) }}" alt="" style="width: 150px;">
                            @endif
                        </div>

                        <div class="col mb-3">
                            <label for="footer_text" class="form-label">Footer Text</label>
                            <input type="text" class="form-control" id="footer_text" name="footer_text"
                                @if ( !empty( $basicInfo ) )
                                    value="{{ $basicInfo->footer_text }}"
                                @endif
                                placeholder="Footer Text Here....">
                        </div>
                    </div>
                </div>
            </div>

            @if ( !empty( $basicInfo ) )
                <button type="submit" class="btn btn-primary">Update</button>
            @else
                <button type="submit" class="btn btn-primary">Save Changes</button>
            @endif
        </div>

    </form>
 </div>

@endsection



