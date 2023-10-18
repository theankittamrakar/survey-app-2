@extends('app')

@section('title', 'Services Page')

@section('content')
<h1>Welcome to Services</h1>

<form action="/service" method="post">
    <input type="text" name="name" autocomplete="off">
    @csrf
    <button>Add Button </button>
</form>
<p style="color:red">@error('name') {{ $message }}</p>

@enderror

<ul>
    @forelse ($services as $service)
    <p>{{$service->name}}</p>
@empty
    <p>No services to show</p>
@endforelse
</ul>
@endsection
