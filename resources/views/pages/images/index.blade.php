@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-log-12 text-center">
                <h1 class="page-title">Images Page</h1>
            </div>
        </div>
        <form action="{{ route('login.post') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Upload</button>
                </div>
            </div>

        </form>
        <div class="images-section">
            <img src='https://wallsdesk.com/wp-content/uploads/2016/11/Google-Photos.jpg' alt='' width="200px" />
        </div>
    </div>
@endsection

@push('css')
    <style>
        .images-section {
            margin-top: 5vh;
        }

        .page-title {
            padding-top: 5vh;
            font-size: 3rem;
            color: #4bbf80;
            margin-bottom: 5vh
        }
    </style>
@endpush
