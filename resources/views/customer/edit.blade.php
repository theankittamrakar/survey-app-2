<h1> Edit Customer Details </h1>

<form action="/customers/{{ $customer->id }}" method="post">

    @method('PATCH')
    <div>
        <label for="name">name</label>
        <input type="text" name="name" autocomplete="off" value="{{$customer->name}}">
        @error('name') <p>{{ $message }} </p> @enderror
    </div>

    <div>
        <label for="email">email</label>
        <input type="text" name="email" autocomplete="off" value="{{$customer->email}}">
        @error('email') <p>{{ $message }} </p> @enderror
    </div>

    @csrf

    <button>Save Customer </button>
</form>
