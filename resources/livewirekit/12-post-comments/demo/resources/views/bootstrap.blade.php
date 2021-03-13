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
                        <div class="card-header"><h3>Comments Form: Bootstrap Version</h3></div>

                        <div class="card-body">
                            <h2>Post Title</h2>

                            <p>Post full text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dictum rhoncus turpis a maximus. Aenean id purus vitae eros laoreet imperdiet ac eget nisl. Donec iaculis, dolor vitae tempus convallis, libero ligula rhoncus leo, eget sollicitudin velit tortor quis tortor. Nulla facilisi. Morbi euismod sodales nisi vitae imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin cursus ligula non quam dapibus, at sollicitudin massa commodo. Proin interdum vestibulum neque, sed efficitur enim congue eu. Vivamus semper sollicitudin leo, eget varius velit dignissim accumsan. Nulla facilisi. Etiam sodales ultrices lectus, at sollicitudin turpis tincidunt at.</p>

                            @livewire('comments', ['postId' => 1, 'designTemplate' => 'bootstrap'])
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
