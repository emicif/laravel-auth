@extends('partials/dashboard')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Tutti i post</h1>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Crea nuovo post</a>
            </div>


            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titolo</th>
                        <th>Slug</th>
                        <th class="text-center">Azioni</th>
                    </tr>
                </thead>
            </table>

            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}">SHOW</a>
                    <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">EDIT</a>
                </tr>
            @endforeach
        </div>
    </div>
@endsection
