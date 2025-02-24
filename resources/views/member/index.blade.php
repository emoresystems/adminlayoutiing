@extends('adminlayout.app')

@section('content')
@if (session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
    {{ session('success') }}
</div>
@endif
<div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
    <h1>Members page</h1>
    <button class="bg-amber-400"><a href="{{ route('members.create') }}">Create member</a></button>

    <p class="mb-6">Welcome to the Alumni System! Connect, network, and stay updated with your fellow alumni.</p>

    <div>
        @foreach ($members as $member)
        <h5>{{ $member->name }}</h5>
        <h4>{{ $member->email }}</h4>
        <h5>{{ $member->email }}</h5>
        <h5>{{ $member->bio }}</h5>

        <form action="{{ route('members.destroy', $member->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" style="background-color: red; color:white; padding:5px;">Delete member</button>

        </form>

        @endforeach
    </div>
</div>

@endsection