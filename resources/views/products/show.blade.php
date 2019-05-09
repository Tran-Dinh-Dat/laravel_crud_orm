@extends('../layout.app')
@section('title')
    Show detail
@endsection
@section('content')
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Create_at</th>
                <th>Update_at</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $product->id}}</td>
                <td>{{ $product->name}}</td>
                <td>{{ $product->price}}</td>
                <td>{{ $product->created_at}}</td>
                <td>{{ $product->updated_at}}</td>
            </tr>
        </tbody>
    </table>
    
@endsection