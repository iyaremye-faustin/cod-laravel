<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <title>Login</title>
</head>

<body class="bg-gray-200">

    <!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<div class="container max-w-full mx-auto py-24 px-6">
  <div class="font-sans">
  <div class="max-w-sm mx-auto px-6">
    <div class="relative flex flex-wrap">
      <div class="w-full relative">
        <div class="mt-6">
           <div class="mb-5 pb-1border-b-2 text-center font-base text-gray-700">
           <span>By <a class="text-blue-500" href="/">Our Movies</a></span>
          </div>
          @if(session('status'))
          <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <span class="font-medium">{{ session('status') }}</span>
          </div>
          @endif
          @error('email')
          <p style="color:red">{{ $message }}</p>
          @enderror
          <form class="mt-8" action="forgot-password" method="POST">
            @csrf
            <div class="mx-auto max-w-lg">
              <div class="py-2">
                <input placeholder="Email address" type="text" name="email"
                  class="text-md block px-3 py-2  rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
              </div>
              <div class="flex justify-between">
                <button type="submit" class="mt-3 text-lg font-semibold
                bg-gray-800 w-full text-white rounded-lg
                px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                Reset
                </button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
</div>

</body>

</html>
