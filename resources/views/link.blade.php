<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="/css/app.css" rel="stylesheet"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Short Link</title>
</head>
<body>

    <form class="p-4" action="" method="POST">
        @if ($errors->any())
            <div class="bg-red-500 my-2 p-2 text-white">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <input class="border-2 rounded-md p-2" type="text" name="url">
        <button class="ml-2 px-4 py-2 border-2 rounded-md" type="submit">Add</button>
    </form>

    <div class="p-4">
        @foreach ($links as $link)
            <ul>
                <li>{{ $link->id }}</li>
                <li><a href="{{ implode("/", [url("/"), $link->key]) }}">{{ implode("/", [url("/"), $link->key]) }}</a></li>
                <li>{{ $link->url }}</li>
            </ul>
        @endforeach
    </div>

</body>
</html>
