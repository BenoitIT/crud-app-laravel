<!DOCTYPE html>

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex  flex-col items-center mt-20">
        <form class="regform" action="{{ route('save') }}" method="POST">

            @csrf
            <h2 class="text-gray-600 text-xl font-bold text-center">Fill signup form</h2>

            <div class="formInput"><br>
                <div>
                    <label for="description" class="block text-sm font-medium text-slate-700">User Name</label>
                </div>
                <div>
                    <input
                        class="mt-1 block w-full px-20 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
           "
                        type="text" id="description" placeholder="enter your username" name="name">
                </div>
                <div>
                    <label for="names" class="block text-sm font-medium text-slate-700">Email</label>
                </div>
                <div>
                    <input
                        class="mt-1 block w-full px-20 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
           "
                        type="email" id="names" placeholder="enter your email" name="email">

                    <label for="names" class="block text-sm font-medium text-slate-700">password</label>
                </div>
                <div>
                    <input
                        class="mt-1 block w-full px-20 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
           "
                        type="Password" id="names" placeholder="enter your password" name="password">
                </div>
                <div>
                    <label for="names" class="block text-sm font-medium text-slate-700">ConfirmPassword</label>
                </div>
                <div>
                    <input
                        class="mt-1 block w-full px-20 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
           "
                        type="Password" id="names" placeholder="enter your password" name="confrimpassword">
                </div>
                <div><br>
                    <button class="bg-gray-700 px-8 py-2 mt-4 rounded-xl text-white text-base hover:bg-gray-400 w-full"
                        type="submit">signup</button>
                </div><br>
                @if ($errors)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <h5 class="bg-white rounded-lg p-6 shadow-xl text-sm text-red-400">{{ $error }}
                                </h5>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </form>
    </div>
</body>

</html>
