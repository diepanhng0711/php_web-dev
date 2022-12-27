<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
        }
        
        table {
            margin: 20px 4px 0px 4px;
        }

        table select {
            width: 800px;
        }

        table input {
            margin: 10px 8px;
        }

        table img {
            height: 100px;
            width: 100px;
        }
    </style>
</head>

<body>
    @extends('layouts.header')
    @section('content')
        <table border="1">
            @foreach ($products as $product)
                <tr>
                    <td style="width: 95%">{{ $product->product_name }}</td>
                    <td>
                        <img src="{{ $product->img_url }}" alt="Product Image">
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection
</body>

</html>
