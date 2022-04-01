<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="{{ asset('/css/main.cs   s') }}">

</head>
<body class="bg-black">


    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">FOrget YOur PasswOrd</h3>
            <p class="text-gray-600 pt-2">We Get it stuf happens. Just enter your email address below and we'll send ypu a link to reset your password?</p>
        </section>
                <div class="card-header">{{ __('Reset Password') }}</div>


        <section class="mt-10">
                    <form 
                        method="POST" 
                        class="flex flex-col"
                        action="{{ route('password.update') }}"
                    >
                        @csrf

                        <input type="hidden" name="token" value="">
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
                                    required 
                                    autofocus
                                    autocomplete="email" 
                                    value="{{ $email ?? old('email') }}" 
                                    class="@error('email') is-invalid @enderror bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" 
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
                                class="col-md-4 col-form-label text-md-right"
                            >
                                {{ __('Password') }}
                            </label>

                                <input 
                                    required 
                                    id="password" 
                                    type="password" 
                                    name="password" 
                                    autocomplete="new-password"
                                    class="@error('password') is-invalid @enderror bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" 
                                >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label 
                                for="password-confirm" 
                                class="col-md-4 col-form-label text-md-right"
                            >
                                {{ __('Confirm Password') }}
                            </label>

                            <div class="col-md-6">
                                <input 
                                    id="password-confirm" 
                                    type="password" 
                                    class="form-control" 
                                    name="password_confirmation" 
                                    required 
                                    autocomplete="new-password"
                                >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
</body>
</html>
