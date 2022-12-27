<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04aa6d;
            color: white;
        }

        .create-user-container {
            padding: 15px;
            text-align: center;
        }

        .create-user-container label {
            display: block;
        }

        .create-user-container .btn-submit {
            margin-top: 15px;
            cursor: pointer;
        }

        .update-user-container {
            padding: 15px;
            text-align: center;
        }

        .update-user-container label {
            display: block;
        }

        .btn-save {
            margin-top: 15px;
            cursor: pointer;
        }

        .upload-file-container {
            padding: 15px;
        }

        .upload-file-container label {
            display: block;
        }

        hr {
            border-top: 3px solid #eee !important;
        }
    </style>
</head>

<body>
    <div class="topnav">
        <a class="active" href="/">Home</a>
        <a href="/products">Products</a>
        <a href="/cart">Cart</a>
    </div>
    @yield('content')

</body>
</html>