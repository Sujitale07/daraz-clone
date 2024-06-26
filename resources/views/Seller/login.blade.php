@extends('Layouts.productLayout')

@section('content')
<section class="bg-orange">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        @if(session('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">message!</strong>
            <span class="block sm:inline">{{ session('message') }}</span>
        </div>
        @endif

        <!-- Display error messages -->
        @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Errors:</strong>
            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <form action="{{route('seller.login')}}" method="post">
                @csrf
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight text-center tracking-tight text-gray-900 md:text-2xl">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange focus:border-orange block w-full p-2.5"
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange focus:border-orange block w-full p-2.5"
                                required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-orange"
                                        required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500">Remember me</label>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium text-orange hover:underline">Forgot password?</a>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                            in</button>
                        <p class="text-sm font-light text-gray-500">
                            Don’t have an account yet? <a href="#" class="font-medium text-orange hover:underline">Sign
                                up</a>
                        </p>
                    </form>
                    <p class="text-center mb-5">Login as a <a class="text-orange-600" href="{{route('login')}}">User</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection