
@extends('master')

@section('title','Detail For a movie')
@section('allmovies')
<a href="/movies" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> All Movies </a>
@endsection
@section('name')
<div>
    <div class="mt-5 ml-5 md:gap-6 mr-5">
      <div class="md:col-span-1 shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 sm:px-0 px-4 py-5 bg-white space-y-6 sm:p-6">
            <figure class="mt-1 pl-5">
                <img src="{{ asset('uploads/'.$movie->poster) }}" alt="image" class="max-w-full h-auto rounded-lg" width="200px" height="100px">
            </figure>
            <p class="mt-1 text-sm text-gray-600 pl-5"> <span class="text-lg font-medium leading-6"> Title: </span>{{ $movie->title }}</p>
            <p class="mt-1 text-sm text-gray-600 pl-5"><span class="text-lg font-medium leading-6">Description: </span> {{ $movie->description }}</p>
            <p class="mt-1 text-sm text-gray-600 pl-5"> <span class="text-lg font-medium leading-6">Language: </span>{{ $movie->language }}</p>
        </div> <hr>
      </div>
    </div>
  </div>
@endsection
