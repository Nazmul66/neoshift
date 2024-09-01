

@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Counter Section 
@endpush

@push('add-css')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.1/ckeditor5.css" />
@endpush

@section('body-content')

 <div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Counter Page</h5>
        </div>

        <div class="card-body">
            @if ( !empty( $counter ) )
               <form method="POST" action="{{ route('admin.counter.update', $counter->id ) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            @else
               <form method="POST" action="{{ route('admin.counter.store') }}" enctype="multipart/form-data">
                @csrf
            @endif

                <div class="row">
                    <div class="col mb-3">
                        <label for="main_title" class="form-label">Main Title</label>
                        <input type="text" class="form-control" id="main_title" name="main_title"
                            placeholder="Write Here......"
                            @if ( !empty( $counter ) )
                            value="{{ $counter->main_title }}"
                            @endif
                            required>
                    </div>

                    <div class="col mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" type="file" name="image" id="image" >
    
                        @if ( !empty( $counter ) )
                            <img src="{{ asset( $counter->image ) }}" alt="" style="width: 150px;">
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label for="project_title" class="form-label">Project Title</label>
                        <input type="text" class="form-control" id="project_title" name="project_title"
                            placeholder="Write Here......"
                            @if ( !empty( $counter ) )
                            value="{{ $counter->project_title }}"
                            @endif
                            required>
                    </div>

                    <div class="col mb-3">
                        <label for="project_count" class="form-label">Project Count</label>
                        <input type="number" class="form-control" id="project_count" name="project_count"
                            placeholder="Write Here......"
                            @if ( !empty( $counter ) )
                            value="{{ $counter->project_count }}"
                            @endif
                            required>
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label for="employee_title" class="form-label">Employee Title</label>
                        <input type="text" class="form-control" id="employee_title" name="employee_title"
                            placeholder="Write Here......"
                            @if ( !empty( $counter ) )
                            value="{{ $counter->employee_title }}"
                            @endif
                            required>
                    </div>

                    <div class="col mb-3">
                        <label for="employee_count" class="form-label">Employee Count</label>
                        <input type="number" class="form-control" id="employee_count" name="employee_count"
                            placeholder="Write Here......"
                            @if ( !empty( $counter ) )
                            value="{{ $counter->employee_count }}"
                            @endif
                            required>
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label for="award_title" class="form-label">Award Title</label>
                        <input type="text" class="form-control" id="award_title" name="award_title"
                            placeholder="Write Here......"
                            @if ( !empty( $counter ) )
                            value="{{ $counter->award_title }}"
                            @endif
                            required>
                    </div>

                    <div class="col mb-3">
                        <label for="award_count" class="form-label">Award Count</label>
                        <input type="number" class="form-control" id="award_count" name="award_count"
                            placeholder="Write Here......"
                            @if ( !empty( $counter ) )
                            value="{{ $counter->award_count }}"
                            @endif
                            required>
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label for="option_title" class="form-label">Option Title</label>
                        <input type="text" class="form-control" id="option_title" name="option_title"
                            placeholder="Write Here......"
                            @if ( !empty( $counter ) )
                            value="{{ $counter->option_title }}"
                            @endif
                            required>
                    </div>

                    <div class="col mb-3">
                        <label for="option_count" class="form-label">Option Count</label>
                        <input type="number" class="form-control" id="option_count" name="option_count"
                            placeholder="Write Here......"
                            @if ( !empty( $counter ) )
                            value="{{ $counter->option_count }}"
                            @endif
                            required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="youtube_video">Youtube Video</label>
                    <textarea id="youtube_video" class="form-control" name="youtube_video" placeholder="Write Here.....">@if( !empty( $counter ) ){{ $counter->youtube_video }}@endif</textarea>
                </div>

                @if ( !empty( $counter ) )
                    <button type="submit" class="btn btn-primary">Update</button>
                @else
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                @endif
            </form>
        </div>
    </div>
 </div>

@endsection



@push('add-js')

@endpush

