<h1>Add New Customer</h1>

<form action="/customers" method="post">
    <div>
        <label for="name">name</label>
        <input type="text" name="name" autocomplete="off" value="{{old('name')}}">
        @error('name') <p>{{ $message }} </p> @enderror
    </div>

    <div>
        <label for="email">email</label>
        <input type="text" name="email" autocomplete="off" value="{{old('email')}}">
        @error('email') <p>{{ $message }} </p> @enderror
    </div>

    @csrf

    <button>Add Button </button>
</form>
