<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
<h1>Product List</h1>
<a href="{{ route('products.create') }}">+ Add Product</a>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>Rp {{ number_format($product->price, 2) }}</td>
        <td>
            <a href="{{ route('products.edit', $product->id) }}">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

