<x-layout>
    <x-slot name="title">Jobs Listing</x-slot>

    <h1 class="my-3 text-2xl text-blue-500">Job Listing</h1>

    @if($jobs->isEmpty())
    <p>No jobs available</p>
    @else

    <ul>
        @foreach ($jobs as $job)
        <li>
            <h4 class="font-light text-2xl">{{$job->title}}</h4>
            <p>{{$job->description}}</p>
        </li>
        @endforeach
    </ul>
    @endif
</x-layout>
