<!DOCTYPE html>
<html>
<head>
    <title>Amazon Products</title>
    <style>
        .product {
            display: inline-block;
            width: 200px;
            margin: 15px;
            padding: 10px;
            border: 1px solid #ccc;
        }
        .product img {
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Amazon Products</h1>
    <div class="products">
        @forelse($products as $item)
            <div class="product">
                <img src="{{ $item['Images']['Primary']['Small']['URL'] ?? '' }}" alt="Image">
                <h4>{{ $item['ItemInfo']['Title']['DisplayValue'] ?? 'No Title' }}</h4>
                <p>Price: {{ $item['Offers']['Listings'][0]['Price']['DisplayAmount'] ?? 'N/A' }}</p>
            </div>
        @empty
            <p>No products found.</p>
        @endforelse
    </div>
</body>
</html>
