
@extends('master')

@section('title','New movie')

@section('name')
<div>
    <div class="mt-5 ml-5 mr-5 md:gap-6">
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{ route('movie.add') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
              <div>
                <div class="col-span-3 sm:col-span-2">
                  <label for="company-website" class="block text-sm font-medium text-gray-700"> Title </label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="title" id="company-website" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="movie title">
                  </div>
                </div>
                <p>
                    @error('title')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </p>
              </div>
              <div>
                <label for="" class="block text-sm font-medium text-gray-700">Language</label>
                <select name="language" id="" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">
                    <option value="English">English</option>
                    <option value="French">French</option>
                </select>
                <p>
                    @error('language')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </p>
              </div>
              <div>
                <label for="about" class="block text-sm font-medium text-gray-700"> Description </label>
                <div class="mt-1">
                  <textarea id="about" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="movie description"></textarea>
                </div>
                <p>
                    @error('description')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </p>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700"> Poster photo </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                  <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Upload a file</span>
                        <input id="file-upload" name="file" type="file" class="sr-only">
                      </label>
                      <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPEG,GIF,JPG up to 10GB</p>
                  </div>
                  <p>
                    @error('file')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </p>
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>

  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        {{-- <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
          <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
        </div> --}}
      </div>
    </div>
  </div>

  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>

  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        {{-- <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
          <p class="mt-1 text-sm text-gray-600">Decide which communications you'd like to receive and how.</p>
        </div> --}}
      </div>
    </div>
  </div>

@endsection
