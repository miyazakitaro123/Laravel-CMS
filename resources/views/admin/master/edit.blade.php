

@extends('layouts.backend')

@section('css_before')
<link rel="stylesheet" href="{{asset('js/plugins/flatpickr/flatpickr.min.css')}}">
@endsection

@section('js_after')
<script src="{{asset('js/plugins/ckeditor5-classic/build/ckeditor.js')}}"></script>
<script src="{{asset('js/plugins/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('js/pages/workshop_form.js')}}"></script>

<!-- Page JS Helpers (CKEditor 5 plugins) -->
<script>jQuery(function () {
    One.helpers(['ckeditor5','flatpickr']);
});</script>
@endsection

@section('content')
<!-- Page Content -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">{{ __('Workshop Director') }}</h3>
        </div>
        <div class="block-content block-content-full">
            @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <form method="POST" enctype="multipart/form-data" class="workshop-form" action="{{ route('workshop.update',$workshop->id) }}">
                @csrf
                {{ method_field('PUT') }}
                @include('admin.workshop.form')
                <div class='row'>
                    <div class='col-md-12'>
                        <button type='submit' class="btn btn-primary pull-right">{{ __('Preview') }}</button>
                    </div>
                </div>
            </form>
            <input type="hidden" name="formdata" id="formdata" value="0">
            <div class="preview-table" style="display: none">
                @include('admin.workshop.preview')
                <div class='row'>
                    <div class='col-md-12'>
                        <button type='submit' class="btn btn-primary pull-right submit-form">{{ __('Submit') }}</button>
                        <button type='submit' class="btn btn-default pull-right go-back">{{ __('Cancel') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->
</div>
<!-- END Page Content -->
@endsection
