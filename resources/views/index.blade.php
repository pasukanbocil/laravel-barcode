<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Barcode</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700$display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <h1 class="text-danger pt-4 text-center mb-4">Daftar Product</h1>
            <hr>
            <div class="pb-2">
                <a href="/products/create" class="btn btn-success">Tambah Product</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th>{{ $product->id }}</th>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{!! DNS2D::getBarcodeHTML(route('product.showDataBarcode', $product->product_barcode), 'QRCODE') !!}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
