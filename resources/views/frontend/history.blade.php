@extends('frontend.about-layout')
@section('jp_title') 協会のあゆみ @endsection
@section('title') History @endsection
@section('about-content')
<div class="bg-header bg-history-header"></div>
<div class="container list-content">
@include('frontend.history-list')
</div>
@endsection