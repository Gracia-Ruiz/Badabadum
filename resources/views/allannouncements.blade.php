@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row page-top">
        @foreach ($announcements as $announcement)
            @include('_announcement')
        @endforeach

        <div class="col-12 text-center">
            {{$announcements->links()}}
        </div>
    </div>
</div>  
@endsection