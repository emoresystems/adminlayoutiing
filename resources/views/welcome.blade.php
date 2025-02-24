@extends('websitelayout.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Alumni Homepage</h1>
    <p class="mb-6">Welcome to the Alumni System! Connect, network, and stay updated with your fellow alumni.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow-md p-4">
            <h2 class="text-xl font-semibold">John Doe</h2>
            <p class="text-gray-600">Class of 2010</p>
            <a href="/alumni/john-doe" class="text-blue-500 hover:underline mt-2 block">View Profile</a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4">
            <h2 class="text-xl font-semibold">Jane Smith</h2>
            <p class="text-gray-600">Class of 2012</p>
            <a href="/alumni/jane-smith" class="text-blue-500 hover:underline mt-2 block">View Profile</a>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4">
            <h2 class="text-xl font-semibold">Alex Johnson</h2>
            <p class="text-gray-600">Class of 2008</p>
            <a href="/alumni/alex-johnson" class="text-blue-500 hover:underline mt-2 block">View Profile</a>
        </div>
    </div>
</div>
@endsection