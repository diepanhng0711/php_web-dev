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
            margin: 15px 4px 0px 2px;
        }

        table select {
            width: 800px;
        }

        table input {
            margin: 10px 8px;
        }
    </style>
</head>

<body>
    @extends('layouts.header')
    @section('content')
        <form action="\add" method="POST">
            @csrf
            <table>
                <tr>
                    <td colspan="5">
                        <label for="products">Choose products:</label>
                    </td>
                    <td colspan="12">
                        <select  name="product" id="product" style="font-size: 16px">
                            <option value="1">Visual Studio Code</option>
                            <option value="2">Microsoft Visual Studio 2022</option>
                            <option value="3">Intellij Ultimate 2022</option>
                            <option value="4">PyCharm</option>
                        </select>
                    </td>
                    <td style="margin-left: 8px">
                        <input type="submit" class="btn" name="add" value="Go">
                    </td>
                </tr>
            </table>
        </form>
    @endsection
</body>

</html>
