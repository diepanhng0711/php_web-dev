<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product to Cart</title>
</head>

<body>
    @extends('layouts.header')
    @section('content')
    <form action="\cart" method="POST">
        @csrf
        <table border="1">
            <tr>
                <td style="width: 95%">
                    <h4>{{ $product->product_name }}</h4>
                    <ul>
                        <li>Product Name: {{ $product->product_name }} </li>
                        <li>Publisher   : {{ $product->publisher }} </li>
                        <li>Platform    : {{ $product->platform }} </li>
                        <li>Description : {{ $product->description }} </li>
                    </ul>
                    {{-- <div style="display: inline-flex; margin-bottom: 16px; margin-left: 20px;">
                        <button type="submit" value="edit">Edit</button>
                        <button type="submit" value="remove">Remove</button>    
                    </div> --}}
                </td>
                <td>
                    <img src="{{ $product->img_url }}" alt="Product Image" style="height: 100px; width: 100px">
                </td>
            </tr>
        </table>
        
        <input type="hidden" name="id" value="{{ $product->id }}">
        <div>
            <input type="submit" value="Add to cart" style="position: absolute; margin-top: 20px; right: 20px">
        </div>  
    </form>
        
    @endsection
</body>

</html>
