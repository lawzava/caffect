<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comments Form</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />

    @livewireStyles
</head>
<body class="bg-gray-100">
<div class="font-sans text-gray-900 antialiased">
    <div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
        <h2 class="font-bold text-2xl">Comments Form: Tailwind Version</h2>

        <div class="w-full sm:max-w-2xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h2 class="text-2xl mb-3">Post Title</h2>

            <p class="mb-4">Post full text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dictum rhoncus turpis a maximus. Aenean id purus vitae eros laoreet imperdiet ac eget nisl. Donec iaculis, dolor vitae tempus convallis, libero ligula rhoncus leo, eget sollicitudin velit tortor quis tortor. Nulla facilisi. Morbi euismod sodales nisi vitae imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin cursus ligula non quam dapibus, at sollicitudin massa commodo. Proin interdum vestibulum neque, sed efficitur enim congue eu. Vivamus semper sollicitudin leo, eget varius velit dignissim accumsan. Nulla facilisi. Etiam sodales ultrices lectus, at sollicitudin turpis tincidunt at.</p>

            @livewire('comments', ['postId' => 1])
        </div>

        <a href="{{ route('bootstrap') }}">See Bootstrap version</a>
    </div>
</div>
@livewireScripts

</body>
</html>
