<!DOCTYPE html>
<html>
<head>
    <title>{{ $theme }} Products</title>
</head>
<body>
    <h1>{{ $theme }} Products</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price (PHP)</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $product['stock'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
