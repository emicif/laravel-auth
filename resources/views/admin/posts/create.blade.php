@section('content')
    <form autocomplete="off" action="{{ route('admin.posts.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Title:</label>
            <input type="text" required name="title" />
        </div>
        CIAO create


        <button type="submit">Aggiungi</button>
    </form>
@endsection
