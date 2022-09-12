<!DOCTYPE html>

<head>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <body class="antialiased">
        <nav class="bg-gray-300 h-15">
            <h1 class="text-2xl text-blue-400 text-center font-bold p-10">New Position</h1>
        </nav>
        <div class="flex  flex-col items-center mt-20">
            <form class="regform" method="POST" action="{{ route('welcome') }}">

                @csrf
                <div class="formInput">


                    <label for="title" class="block text-sm font-medium text-slate-700">title</label><br>
                    <input
                        class="mt-1 block w-full px-20 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                    focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                   "
                        type="text" id="text" placeholder="enter  title" name="title">

                    <span class="bg-white rounded-lg p-2 shadow-xl text-sm text-red-400">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </span>


                    <label for="description" class="block text-sm font-medium text-slate-700">Description</label><br>
                    <input
                        class=" block w-full px-20 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                    focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                   "
                        type="text" id="description" placeholder="enter  description" name="Description">

                    <div class="bg-white rounded-lg p-2  text-sm text-red-400">
                        @error('Description')
                            {{ $message }}
                        @enderror
                    </div>


                    <label for="location" class="block text-sm font-medium text-slate-700">Location</label><br>
                    <input
                        class="block w-full px-20 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                       "
                        type="text" id="location" placeholder="enter  location" name="Location">

                    <div class="bg-white rounded-lg p-2  text-sm text-red-400">
                        @error('Location')
                            {{ $message }}
                        @enderror
                    </div>

                    <button class="bg-gray-700 px-8 py-2 mt-4 rounded-xl text-white text-base hover:bg-gray-400 w-full"
                        type="submit">create blog</button>



                </div>
            </form>
    </body>

    </html>
