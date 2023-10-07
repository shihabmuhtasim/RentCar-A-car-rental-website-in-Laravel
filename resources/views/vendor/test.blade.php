<!-- resources/views/vendor/show_product_data.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Product Data</title>
</head>
<body>
    <h1>Product Data</h1>
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Title</th>
                <!-- Add more headers for other attributes -->
            </tr>
        </thead>
        <tbody>
            @foreach ($product_data as $product)
                <tr>
                    <td>{{ $product->product_id }}</td>
                    <td>{{ $product->product_title }}</td>
                    <!-- Add more table cells for other attributes -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
