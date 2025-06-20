<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <style>
        .header{
            background-color: purple;
        }
        .side-bar{
            float: left;
            background-color: green;
        }
        .content{
            float: left;
            background-color: blue;
        }
        footer{
            clear: both;
            background-color: #800080;
        }
    </style>
</head>
<body>
    <div class="header">
        @yield('title')
        <h2>Header</h2>
    </div>
    <div class="body">
        <div class="side-bar">
            @section('side-bar')
                <h2>Side bar</h2>
            @show
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
    <footer>
        <h2>Footer1</h2>
    </footer>
</body>
</html> 