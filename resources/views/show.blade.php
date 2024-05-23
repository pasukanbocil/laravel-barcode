<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Product</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700$display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Detail Data Product</h2>
        <div class="card">
            <div class="card-header">
                <h1>{{ $product->title }}</h1>
            </div>
            <div class="card-body">
                <p><strong>Price:</strong> ${{ $product->price }}</p>
                <p><strong>Stock:</strong> {{ $product->stock }}</p>
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Product Barcode:</strong> {{ $product->product_barcode }}</p>
            </div>
        </div>
    </div>
</body>

</html>
