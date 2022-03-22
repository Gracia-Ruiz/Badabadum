@extends('layouts.app')
@section('content')
@if ($announcement)
<div class="container page-top">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Anuncio # {{ $announcement->id }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <h3>Usuario</h3>
                        </div>
                        <div class="col-md-10">
                            # {{ $announcement->user->id }},
                            {{ $announcement->user->name }},
                            {{ $announcement->user->email }},
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-2">
                            <h3>Titulo</h3>
                        </div>
                        <div class="col-md-10">{{ $announcement->title }}</div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-2">
                            <h3>Descripción</h3>
                        </div>
                        <div class="col-md-10">{{ $announcement->body }}</div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-2">
                            <h3>Imagenes</h3>
                        </div>
                        <div class="col-md-10">
                            @foreach ($announcement->images as $image)
                            <div class="row md-2">

                                <div class="col-md-4">
                                    <img src="{{ $image->getUrl(300, 150) }}" class="rounded" alt="">
                                </div>
                                <div class="col-md-8">
                                    {{ $image->id }} <br>
                                    {{ $image->file }} <br>
                                    {{ Storage::url($image->file )}} <br>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="row justify-content-center mt-5 mr-5 ml-5 card-b">
    <div class="col-md-6">
        <form action="{{ route('revisor.reject', $announcement->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Reject</button>
        </form>
    </div>
    <div class="col-md-6 text-right">
        <form action="{{ route('revisor.accept', $announcement->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Accept</button>
        </form>
    </div>
</div>

@else
<div class="container page-top">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 class="text-center"> No hay anuncios para revisar </h3>
        </div>
    </div>
</div>
@endif

@endsection
