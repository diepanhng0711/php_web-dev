<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>

<body>
    @extends('layouts.header')
    @section('content')
        <table border="1">
            <tr>
                <td style="width: 95%">
                    <h4>{{ $product->product_name }}</h4>
                    <ul>
                        <li>Product Name: {{ $product->product_name }} </li>
                        <li>Publisher : {{ $product->publisher }} </li>
                        <li>Platform : {{ $product->platform }} </li>
                        <li>Description : {{ $product->description }} </li>
                        <li>Price : {{ $product->price }} </li>
                    </ul>
                </td>
                <td>
                    <img src="{{ $product->img_url }}" alt="Product Image" style="height: 100px; width: 100px">
                </td>
            </tr>
        </table>
    @endsection
</body>

</html>
