<x-layout>
    <x-slot name="title">Jobs Listing</x-slot>

    Job Listing

    <h1>Job Listing</h1>

    <ul>
        @foreach ($jobs as $job)
        <li>{{$job}}</li>
        @endforeach
    </ul>
</x-layout>
