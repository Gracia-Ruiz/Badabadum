@extends('layouts.app')
@section('content')
<div class="container page-top">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 style="color: #0f2f53;">{{__('ui.announcementby') }} : {{ $category->name }}</h1>
        </div>
    </div>
    <div class="row">
        @foreach($announcements as $announcement)
        @include('_announcement')
        @endforeach
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{ $announcements->links() }}
        </div>
    </div>
</div>
@endsection
