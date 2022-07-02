@extends($view)

@section('main')
    <main class="main">
        <div class="container">
            @include('templates/guest/homepage/search')
            <div class="main-contents no-data">
            </div>
        </div>
    </main>
@endsection