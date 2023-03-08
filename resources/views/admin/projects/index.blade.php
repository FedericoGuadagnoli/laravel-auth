@extends('layouts.app')

@section('title','Projects')
    
@section('content')
<section id="projects">
    <div class="container py-5 mt-5">
        <div class="row d-flex g-5 flex-wrap">
            @foreach ($projects as $project)
                <div class="col-6 my-5" style="height: 400px;">
                    <a href="{{ route('admin.projects.show', $project['id']) }}" style="text-decoration: none; color:black">
                        <div class="card d-flex flex-column-reverse align-items-center h-100 justify-content-between">                     
                            <figure class="text-center h-50 w-100">
                                <img src="{{ $project->image }}" alt="{{$project->title}}" class="img-fluid h-100">
                            </figure>
                            <div class="info text-center">
                                <h1>Progetto {{$project->title}}</h1>
                            </div>
                        </div>
                    </a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="text-center mt-2">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</section>
    
@endsection