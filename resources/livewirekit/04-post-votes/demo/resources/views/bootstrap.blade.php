<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
<div id="app">
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Upvoting/Downvoting Posts: Bootstrap Version</h3></div>

                        <div class="card-body">
                            @foreach (\App\Models\Post::with('votes')->take(5)->get() as $post)
                                <div class="row">
                                    <div class="col-1">
                                        @livewire('post-votes', ['post' => $post, 'designTemplate' => 'bootstrap'])
                                    </div>
                                    <div class="col-11">
                                        <h3>{{ $post->title }}</h3>
                                        <p class="mb-1">{{ \Illuminate\Support\Str::words($post->post_text, 30) }}</p>
                                    </div>
                                </div>
                                <hr />
                            @endforeach
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="{{ route('tailwind') }}">See Tailwind version</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@livewireScripts
</body>
</html>
