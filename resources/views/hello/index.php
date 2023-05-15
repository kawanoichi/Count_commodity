<!--
    http://localhost:8000/hello
 -->
<html>

<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 100px;
            text-align: right;
            color: #f6f6f6;
            margin: -50px 0px -100px 0px;
        }
    </style>
</head>

<body>
    <h1>Index</h1>
    <p><?php echo $msg; ?></p>
    <p><?php echo $id; ?></p>
    <p><?php echo date("Y年n月j日"); ?></p>
    <!-- <p>his is a sample page with php-template.</p> -->
</body>

</html>
