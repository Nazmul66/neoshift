

@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Banner Section 
@endpush

@push('add-css')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.1/ckeditor5.css" />
@endpush

@section('body-content')

 <div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Banner Page</h5>
        </div>


        <div class="card-body">
            @if ( !empty( $banner ) )
               <form method="POST" action="{{ route('admin.banner.update', $banner->id ) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            @else
               <form method="POST" action="{{ route('admin.banner.store') }}" enctype="multipart/form-data">
                @csrf
            @endif

                <div class="row">
                    <div class="col mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Write Here......"
                            @if ( !empty( $banner ) )
                            value="{{ $banner->title }}"
                            @endif
                            required>
                    </div>

                    <div class="col mb-3">
                        <label class="form-label" for="main_title">Main Title</label>
                        <textarea id="main_title" class="form-control" name="main_title" placeholder="Write Here.....">@if( !empty( $banner ) ){{ $banner->main_title }}@endif</textarea>
                    </div>
                </div>


                <div class="row">
                    <div class="col mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" type="file" name="image" id="image" >
    
                        @if ( !empty( $banner ) )
                            <img src="{{ asset( $banner->image ) }}" alt="" style="width: 150px;">
                        @endif
                    </div>

                    <div class="col mb-3">
                        <label for="url" class="form-label">Url</label>
                        <input type="text" class="form-control" id="url" name="url"
                            placeholder="Write Here......"
                            @if ( !empty( $banner ) )
                            value="{{ $banner->url }}"
                            @endif
                            required>
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label" for="youtube_video">Youtube Video</label>
                        <textarea id="youtube_video" class="form-control" name="youtube_video" placeholder="Write Here.....">@if( !empty( $banner ) ){{ $banner->youtube_video }}@endif</textarea>
                    </div>

                    <div class="col mb-3">
                        <label class="form-label" for="description">Description</label>
                        <textarea id="description" class="form-control" name="description" placeholder="Write Here.....">@if( !empty( $banner ) ){{ $banner->description }}@endif</textarea>
                    </div>
                </div>

                @if ( !empty( $banner ) )
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
    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.1/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.1/"
            }
        }
    </script>

    <script type="module">
        import {
            ClassicEditor, Essentials, Bold,
            Highlight, Italic, FindAndReplace, Font,
            Underline, Paragraph, Strikethrough,
            Indent, IndentBlock, BlockQuote,
            Link, List, Heading,
            Code, Subscript, Superscript,
            HorizontalLine, SelectAll,  SourceEditing,
            SpecialCharacters, SpecialCharactersEssentials,
            Table, TableToolbar, Alignment,
            Image, ImageInsert
        } from 'ckeditor5';

        ClassicEditor
            .create( document.querySelector('#main_title' ), {
                plugins: [ Essentials, SourceEditing , Highlight, SelectAll, FindAndReplace, Bold, Italic, Underline, Strikethrough, Font, Subscript, Superscript, Paragraph, Indent, IndentBlock, BlockQuote, Link, Code, List, Heading, HorizontalLine, SpecialCharacters, SpecialCharactersEssentials, Table, TableToolbar, Alignment, Image, ImageInsert ],
                fontSize: {
                    options: [9, 11,13,'default',17,19,21, 23,25,27,29,31]
                },
                fontColor: {
                    colors: [
                        {
                            color: 'hsl(0, 0%, 0%)',
                            label: 'Black'
                        },
                        {
                            color: 'hsl(0, 0%, 30%)',
                            label: 'Dim grey'
                        },
                        {
                            color: 'hsl(0, 0%, 60%)',
                            label: 'Grey'
                        },
                        {
                            color: 'hsl(0, 0%, 90%)',
                            label: 'Light grey'
                        },
                        {
                            color: 'hsl(0, 0%, 100%)',
                            label: 'White',
                            hasBorder: true
                        },
                        // More colors.
                        // ...
                    ]
                },
                fontBackgroundColor: {
                    colors: [
                        {
                            color: 'hsl(0, 75%, 60%)',
                            label: 'Red'
                        },
                        {
                            color: 'hsl(30, 75%, 60%)',
                            label: 'Orange'
                        },
                        {
                            color: 'hsl(60, 75%, 60%)',
                            label: 'Yellow'
                        },
                        {
                            color: 'hsl(90, 75%, 60%)',
                            label: 'Light green'
                        },
                        {
                            color: 'hsl(120, 75%, 60%)',
                            label: 'Green'
                        },
                    ]
                },
                alignment: {
                    options: [ 'left', 'right', 'center', 'justify' ]
                },
                toolbar: {
                    items: [
                        'undo', 'redo', 'selectAll', 'sourceEditing',
                        '|', 'heading', 'findAndReplace',
                        '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                        '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code', 'underline',
                        '|', 'alignment', 'highlight', 'horizontalLine', 'specialCharacters',
                        // '-',  break point
                        'link', 'uploadImage', 'blockQuote', 'insertTable', 'insertImage',
                        '|', 'bulletedList', 'numberedList', 'outdent', 'indent', 'alignment',
                    ],
                    shouldNotGroupWhenFull: true
                },
                table: {
                    contentToolbar: [ 'tableColumn', 'tableRow', 'mergeTableCells' ]
                }
            } )
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>

@endpush

