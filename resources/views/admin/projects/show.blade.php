@extends('layouts.app')

@section('title','Projects-details')

@section('content')
<section id="project">
    <div class="container">
        <div class="card mt-5">
          <div class="card-body text-center">
              <h1 class="card-title">Progetto {{ $project->title }}</h1>
              <p class="card-text">{{ $project->content }}</p>
              <a href="{{ $project->link_github }}" class="btn btn-primary">Link GitHub</a>
          </div>
          <figure class="text-center">
              <img src="{{ $project->image }}" class="card-img-bottom img-fluid w-50" alt="{{ $project->title }}">
          </figure>
        </div>
        <div class="w-100 d-flex justify-content-center align-items-center py-3 gap-3">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary"><i class="fas fa-pencil me-2"></i>Indietro</a>
            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning"><i class="fa-solid fa-arrow-up me-2"></i>Modifica</a>
            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
            </form>
        </div>
    </div>
</section>  
@endsection