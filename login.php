<html>

    <head>
        <meta charset="UTF-8">
        <title>Login Successfully!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />

        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="js/script.js"></script>
    </head>

    <body>
        <?php
        $name = $_POST["user"];
        $password = $_POST["pass"];
        $submit = $_POST["submit"];
        ?>
        <main role="main">
            <section class="jumbotron text-center">
                <div class="container">
                    <?php echo"<h1 class='jumbotron-heading'>Hello <span class='text-info'>$name! </span></h1>"; ?>
                    <?php echo "<p class='lead text-muted'>Welcome back to our website</p>"; ?>
                </div>
            </section> <br>
        </main>


    </body>

</html>
