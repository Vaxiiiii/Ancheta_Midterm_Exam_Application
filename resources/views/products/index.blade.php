<!DOCTYPE html>
<html>
<head>
    <title>{{ $theme }} Products</title>
</head>
<body>
    <h1>{{ $theme }} Products</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
</body>
</html>
