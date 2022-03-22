@extends('layouts.app')
@section('content')
<div class="container page-top">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card card-b">
                    <div class="card-header">
                        <p> {{__('ui.newannouncement') }} </p>
                    </div>
                    <div class="card-body">
                        <h3> DEBUG : SECRET {{ $uniqueSecret }} </h3>
                        <form method="POST" action="{{ route('announcement.create') }}">
                            @csrf
                            <input 
                                type="hidden" 
                                name="uniqueSecret"
                                value= "{{ $uniqueSecret }}"> 
                            <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">
                                    {{__('ui.categorie') }} </label>
                                <div class="class col-md-6">
                                    <select class='form-control' name='category' id="category">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category') == $category->id ? 'selected' : ''}}>
                                            {{$category->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right"> {{__('ui.price') }}
                                </label>
                                <div class="class col-md-6">
                                    <input type="text " class="form-control @error('price') is-invalid @enderror"
                                        name="price" value="{{ old('price') }}" id="inputtext4" placeholder="€"
                                        required autofocus>
                                    @error('price')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">
                                    {{__('ui.title') }}</label>
                                <div class="class col-md-6">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="{{ old('title') }}" required autofocus>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="body" class="col-md-4 col-form-label text-md-right">
                                    {{__('ui.announ') }}</label>
                                <div class="col-md-6">
                                    <textarea type="text" class="form-control @error('body') is-invalid @enderror"
                                        name="body" cols="30" rows="10" value="{{ old('body') }}" required
                                        autofocus>{{ old('body') }} </textarea>
                                    @error('body')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="from-group row">
                            <label for="images" class="col-md-12 col-form-label"> Imágenes</label>    
                                <div class="col-md-12">
                                    

                                    <div class="dropzone" id="drophere"></div>

                                    @error('images')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                            
                            <button type="submit" class="btn btn-primary"> {{__('ui.creates') }} </button>
                        </form>
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection