<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <?php if(isset($fullName)): ?>
                    <div class="title">Hi, <?= $fullName ?>!</div>
                <?php else :?>
                    <div class="title">Hello, World!</div>
                <?php endif; ?>

                <form method="POST" action="/">
                    <input type="text" name="name" placeholder="Input your name">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
