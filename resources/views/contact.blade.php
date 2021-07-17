<!DOCTYPE html>
<html lang="en"> {{-- class="h-full" --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="static bg-gray-100 flex items-center justify-center h-screen">{{-- class="h-full" --}}
    <div class="absolute top-0 left-0 mx-2 fa-2x"> 
            <a href="/home">
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
    </div>
    <form method="POST" action="/contact" class="bg-white p-6 rounded shadow-md" style="width:300px">
        @csrf
        <div>
            <label for="email">
                Email Address
            </label>
            <input type="text" id="email" name="email" class="border px-2 py-1 text-sm w-full">
            @error('email')
            <div class="text-red-500 text-xs">
                {{$message}}
            </div>
        @enderror
        </div>
        <button type="submit" class="bg-blue-500 my-3 py-2 text-white rounded-full text-sm w-full">
            Email me
        </button>

        @if(session('message'))
            <div class="text-green-500 text-xs">
                {{ session('message') }}
            </div>
        @endif
    </form>
</body>
</html>