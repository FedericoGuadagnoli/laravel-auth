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
        <div class="w-100 text-center">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mt-5">Indietro</a>
        </div>
    </div>
</section>  
@endsection