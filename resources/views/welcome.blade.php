<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>

</head>

<body>
    <nav class="bg-gray-300 h-15">
        <h1 class="text-2xl text-blue-400 text-center font-bold p-10">List of Positions</h1>
    </nav>


    <div class=" flex flex-col items-center">
        <table class="table-auto w-3/4 p-4 m-20 border-x-2 border-y-2 border-gray-400">
            <thead>
                <tr class="bg-slate-300 h-14 text-base text-gray-500">
                    <th>Title</th>
                    <th>Location</th>
                    <th>decriptions</th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($positions as $pos)
                <tbody>
                    <tr class="bg-slate-200 h-12 text-base text-gray-500 border-y-2 border-gray-400">
                        <td class="text-center">
                            {{ $pos->title }}
                        </td>
                        <td class="text-center">
                            {{ $pos->Location }}
                        </td>
                        <td class="text-center">

                            {{ $pos->description }}
                        </td>
                        <td class="text-center">
                            <a href="delete/{{ $pos->id }}"
                                class="bg-red-300 px-8 py-2 rounded-xl text-white text-base hover:bg-gray-400">Delete</a>
                            <a href="editprofile/{{ $pos->id }}"
                                class="bg-gray-700 px-8 py-2 rounded-xl text-white text-base hover:bg-gray-400">update</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>

    </div>


</body>

</html>
