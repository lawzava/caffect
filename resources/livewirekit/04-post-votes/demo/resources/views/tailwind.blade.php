<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Upvoting/Downvoting Posts</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />

    @livewireStyles
</head>
<body class="bg-gray-100">
<div class="font-sans text-gray-900 antialiased">
    <div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
        <h2 class="font-bold text-2xl">Upvoting/Downvoting Posts: Tailwind Version</h2>

        <div class="w-full sm:max-w-2xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @foreach (\App\Models\Post::with('votes')->take(5)->get() as $post)
                <div class="pb-3 pt-3 flex">
                    <div class="w-2/12">
                        @livewire('post-votes', ['post' => $post])
                    </div>
                    <div class="w-10/12">
                        <h3 class="text-2xl mb-1">{{ $post->title }}</h3>
                        <p class="mb-1">{{ \Illuminate\Support\Str::words($post->post_text, 30) }}</p>
                    </div>
                </div>
                <hr />
            @endforeach
        </div>

        <a href="{{ route('bootstrap') }}">See Bootstrap version</a>
    </div>
</div>
@livewireScripts

</body>
</html>
