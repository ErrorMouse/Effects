<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Columns Slide Out</title>
    <link rel="stylesheet" href="three-columns-slide-out.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 40px;
            background: #0a0a12;
        }
    </style>
</head>
<body>

    <div id="three-columns-slide-out">
        <?php for ($i=1; $i<=3; $i++) { ?>
            <div class="slide-out">
                <div class="layout">
                    <img src="image.jpg"/>
                </div>
            </div>
        <?php } ?>
    </div>

</body>
</html>