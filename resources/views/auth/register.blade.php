@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded">
            @csrf
            
            <form class="{{ route('register') }}" method="post">
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name" 
                    class="big-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your Email Address" 
                    class="big-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="text" name="password" id="password" placeholder="Password" 
                    class="big-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="text" name="password_confirmation" id="password_confirmation" placeholder="Password again" 
                    class="big-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection