<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @vite('resources/css/app.css')
    <title>{{$title ?? 'Workopia | Find and List Jobs'}}</title>
</head>
<body class="bg-gray-100">
    <x-header />
 
    @if(request()->is('/'))
    <x-hero />
    @endif
    <x-top-banner />
    <main class="container mx-auto p-4 mt-4">
        {{$slot}}
    </main>


  
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>