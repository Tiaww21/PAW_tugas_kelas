<h2>Daftar Produk</h2>
<a href="{{ route('products.create') }}">Tambah Produk</a>
<ul>
@foreach ($products as $product)
    <li>{{ $product->name }} - Rp {{ number_format($product->price) }}
        <a href="{{ route('products.edit', $product->id) }}">Edit</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </li>
@endforeach
</ul>
