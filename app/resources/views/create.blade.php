<h1>Add Product</h1>
<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Product Name"><br>
    <input type="number" name="price" placeholder="Price"><br>
    <button type="submit">Save</button>
</form>
