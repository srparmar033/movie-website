<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
      {{-- fav icon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/favicon/site.webmanifest') }}">
</head>
<body class="bg-black">


    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <div class="flex justify-center mb-4">
                <img class="w-12 " src="{{ asset('/images/srp.png') }}" alt="">
            </div>
            <h3 class="font-bold text-2xl text-center text-gray-700"><strong> Welcome to <span class="text-orange-800">Movie Website</span></strong></h3>
            <p class="text-gray-600 pt-2 text-center">Create Account.</p>
        </section>
        
                {{-- <div class="text-center text-2xl">{{ __('Register') }}</div> --}}

        <section class="mt-10">
            <form 
                method="POST" 
                class="flex flex-col" 
                action="{{ route('register') }}"
             >
             @csrf

                <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label 
                                for="name" class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                            >
                                {{ __('Name') }}
                            </label>

                                <input 
                                    id="name" 
                                    type="text" 
                                    name="name" 
                                    autofocus
                                    placeholder="Enter Name"
                                    value="{{ old('name') }}" 
                                    required autocomplete="name" 
                                    class="form-control @error('name') is-invalid @enderror bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-orange-800 transition duration-500 px-3 pb-3" 
                                >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label 
                                for="email" 
                                class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                            >
                                {{ __('E-Mail Address') }}
                            </label>

                                <input 
                                    id="email" 
                                    type="email" 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    placeholder="Enter email" 
                                    required autocomplete="email"
                                    class="form-control @error('email') is-invalid @enderror bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-orange-800 transition duration-500 px-3 pb-3" 
                                >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label 
                                for="password" 
                                class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                            >
                                {{ __('Password') }}
                            </label>

                                <input 
                                    required 
                                    id="password" 
                                    name="password" 
                                    type="password" 
                                    autocomplete="new-password"
                                    placeholder="Enter password"
                                    class="form-control @error('password') is-invalid @enderror bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-orange-800 transition duration-500 px-3 pb-3" 
                                >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label 
                                for="password-confirm" 
                                class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                            >
                                {{ __('Confirm Password') }}
                            </label>

                                <input 
                                    type="password" 
                                    id="password-confirm" 
                                    name="password_confirmation" 
                                    required autocomplete="new-password"
                                    placeholder="Enter confirm password"
                                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-orange-800 transition duration-500 px-3 pb-3" 
                                >
                    </div>

                    <button 
                        type="submit" 
                        class="bg-orange-800 hover:bg-orange-900 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" 
                    >
                         {{ __('Register') }}
                    </button>
            </form>
        </section>
    </main>
        <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">You have an account? <a href="{{ 'login' }}" class="font-bold hover:underline">Sign In</a>.</p>
    </div>
  
</body>
</html>

