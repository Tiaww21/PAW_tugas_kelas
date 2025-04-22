<h1>Edit Product</h1>
<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $product->name }}"><br>
    <input type="number" name="price" value="{{ $product->price }}"><br>
    <button type="submit">Update</button>
</form>
