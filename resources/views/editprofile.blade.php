<!DOCTYPE html>

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex  flex-col items-center mt-20">
        <form class="regform" action="/update/{{ $blog->id }}" method="POST">
            @csrf
            <div class="flex flex-col">
                <h2 class="text-gray-600 text-xl font-bold text-center">Edit position info</h2>

                <label for="tilte" class="block text-sm font-medium text-slate-700">title</label>
                <input type="text" name="title" value="{{ $blog->title }}"
                    class="mt-1 block w-full px-20 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
               ">

                <label for="location" class="block text-sm font-medium text-slate-700">Location</label>

                <input type="text" id="names" name="Location" value="{{ $blog->Location }}"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
               ">

                <label for="description" class="block text-sm font-medium text-slate-700">description</label>

                <input type="text" id="description" name="description" value="{{ $blog->description }}"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                    focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                   ">

                <button type="submit"
                    class="bg-gray-700 px-8 py-2 m-4 rounded-xl text-white text-base hover:bg-gray-400">update</button>
            </div>
        </form>
    </div>
</body>

</html>
