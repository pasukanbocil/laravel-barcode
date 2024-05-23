<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Product</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700$display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <div class="card px-5 mt-3 shadow">
                    <h1 class="text-primary pt-4 text-center mb-4">Tambah Data Product & Generate Barcode</h1>
                    <form action="/products" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="title">Nama Product</label>
                        <input type="text" class="form-control mb-3" name="title" required>
                        <label for="price">Price</label>
                        <input type="number" class="form-control mb-3" name="price"Price>
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control mb-3" name="stock"Price>
                        <label for="description">Description</label>
                        <textarea class="form-control mb-3" name="description" cols="30" rows="5" required></textarea>
                        <button class="btn btn-success col-md-3 mb-3" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
