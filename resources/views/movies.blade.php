
@extends('master')

@section('title','All movies')

@section('name')
<div>
    <div class="mt-5 ml-5 md:gap-6 mr-5">
      <div class="md:col-span-1 shadow sm:rounded-md sm:overflow-hidden">
        @foreach($movies as $movie)
            <div class="px-4 sm:px-0 px-4 py-5 bg-white space-y-6 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900 pl-5">{{ $movie->title }}</h3>
                <p class="mt-1 text-sm text-gray-600 pl-5">{{ $movie->description }} <span><a href="{{ '/movies/'.$movie->id }}" class="bg-green-500 hover:bg-green-300 text-white font-bold py-1 px-1 rounded">View more</a></span> </p>
            </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
