<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
</head>

<body>
    @extends('layouts.header')
    @section('content')
    @if(!empty($products))
        <form action="\cart" method="POST">
            @csrf
            <table border="1">
                @foreach ($products as $product)
                    <tr>
                        <td style="width: 95%">
                            <h4>{{ $product->product_name }}</h4>
                            <ul>
                                <li>Product Name: {{ $product->product_name }} </li>
                                <li>Publisher : {{ $product->publisher }} </li>
                                <li>Platform : {{ $product->platform }} </li>
                                <li>Price : {{ $product->price }} </li>
                            </ul>
                            <div style="display: inline-flex; margin-bottom: 16px; margin-left: 20px;">
                                <form action="/description" method="GET">
                                    @csrf
                                    <button type="submit" name="action" value="{{ $product->id }}">Description</button>
                                </form>
                                <form action="/cart/delete" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" name="action" value="{{ $product->id }}">Remove</button>
                                </form>
                            </div>
                        </td>
                        <td>
                            <img src="{{ $product->img_url }}" alt="Product Image" style="height: 100px; width: 100px">
                        </td>
                    </tr>
                @endforeach
            </table>

            
            <input type="hidden" name="id" value="{{ $product->id }}">
            <div>
                <input type="submit" value="Checkout" style="position: absolute; margin-top: 20px; right: 20px">
            </div>

        </form>
    @else 
        <h2 style="text-align: center">Empty Cart!!!</h2>
    @endif
    @endsection
</body>

</html>
