@props(['url' => '/', 'active' => false])


<a href="{{$url}}" {{$attributes}} class="text-white hover:underline py-2 {{$active ? 'text-yellow-500 font-bold' : ''}}">
    {{$slot}}
</a>
