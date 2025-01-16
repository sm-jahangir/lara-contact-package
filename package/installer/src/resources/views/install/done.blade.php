@extends('installer::install.app')

@section('head')
    <title>Effortless Laravel Application Setup</title>
@endsection

@section('content')
    <div class="container mx-auto px-6">
        <!-- BEGIN: Congratulations Page -->
        <div class="page flex flex-col lg:flex-row items-center justify-center h-screen text-center lg:text-left">
            
            <!-- Image Section -->
            <div class="w-full lg:w-1/2 lg:mr-12 mb-8 lg:mb-0">
                <img alt="Laravel Installer" class="w-full max-w-lg mx-auto" src="{{ asset('install/img/capoo-bugcat.gif') }}">
            </div>
            
            <!-- Text Section -->
            <div class="w-full lg:w-1/2 text-gray-800">
                <h1 class="text-4xl font-bold mb-4">{{ env('APP_NAME') }} - Effortless Laravel Application Setup</h1>
                <p class="text-lg text-gray-600 mb-6">
                    Your installation was successful! 
                </p>

                <!-- Call to Action Button -->
                <a href="{{route('frontend.index')}}" class="inline-block bg-blue-500 text-white text-xl font-semibold px-8 py-4 rounded-md shadow-md hover:bg-blue-600 transition duration-300">
                    Let's Start {{ env('APP_NAME') }}
                </a>
            </div>

        </div>
        <!-- END: Congratulations Page -->
    </div>
@endsection
