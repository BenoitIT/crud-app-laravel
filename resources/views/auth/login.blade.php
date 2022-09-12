<!DOCTYPE html>

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex  flex-col items-center mt-20">
        <form class="regform" action="{{ route('check') }}" method="POST">
            @if (Session::has('error'))
                <div class="bg-white rounded-lg p-6 shadow-xl text-sm text-red-400">
                    {{ Session::get('error') }}</div>
            @elseif(Session::has('errorer'))
                <div class="bg-white rounded-lg p-6 shadow-xl text-sm text-red-400">
                    {{ Session::get('errorer') }}</div>
            @endif
            @csrf
            <h2 class="text-gray-600 text-xl font-bold text-center">Login form</h2>

            <div class="formInput"><br>

                <label for="description" class="block text-sm font-medium text-slate-700">Email</label>
                <input
                    class="mt-1 block w-full px-20 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"
                    type="email" id="description" name="email" value="enter your email" />


                <label for="names" class="block text-sm font-medium text-slate-700">Password</label>
                <input
                    class="mt-1 block w-full px-20 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"
                    type="Password" id="names" name="password" />


                <button type="submit"
                    class="bg-gray-700 px-8 py-2 mt-4 rounded-xl text-white text-base hover:bg-gray-400 w-full">login</button>

            </div>
            <h6 class="block text-sm font-medium text-slate-700">I don't have an account <a
                    class="block text-sm font-medium text-slate-400"href="\signup">Signup</a></h6>
        </form>
</body>

</html>
