<x-layout>
    <x-slot name="title">Create a listing</x-slot>

  <h1>Create a post</h1>
    <form action="{{route('jobs.store')}}" method="POST">
      @csrf
      <div>
        <input type="text" name="title" placeholder="Title" class="py-2 px-1" value="{{old('title')}}">
        @error('title')
          <div class="text-red-500 mt-2 text-small">{{$message}}</div>
        @enderror
      </div>
    
      <div class="mt-2">
        <input type="text" name="description" placeholder="Description" class="py-2 px-1" value="{{old('description')}}">
        @error('description')
          <div class="text-red-500 mt-2 text-small">{{$message}}</div>
        @enderror
      </div>
   
        <button type="submit">Submit</button>
    </form>
</x-layout>
