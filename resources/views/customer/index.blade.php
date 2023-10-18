<h1>Customers</h1>


<a href="/customers/create">Add New Customers</a>


@forelse ($customers as $customer)
    <p><strong>
        <a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
        </strong> ({{ $customer->email }})</p>
@empty
    <p>No customers to show</p>
@endforelse
