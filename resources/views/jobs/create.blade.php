<x-layout>
    <x-slot name="title">Create a listing</x-slot>

  <h1>Create a post</h1>
    <form action="{{route('jobs.store')}}" method="POST">
      @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="description" placeholder="Description">
        <button type="submit">Submit</button>
    </form>
</x-layout>
