<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>6 Jars Budgeting Method</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .clock {
            color: #17D4FE;
            font-size: 20px;
            font-family: Orbitron;
            
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bootstrap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">JavaScript</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <br> <br> <br>
<main role="main">
    <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Tho Vu</h1>
                <p class="lead text-muted">Hi! My name is Tho. I am passionate about making apps and websites. Here are some of my projects. Let's have a look.</p>
                <p>
                    <a href="mailto:vu000071@algonquinlive.com" class="btn btn-warning my-2">Email Me</a>
                </p>
            </div>
        </section> <br>
    <h1 class="text-center">6 Jars Budgeting Method</h1> <br>
    <form class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-4">
                <div class="form-group">
                    Amount ($): &nbsp;<br> <input type="text" id="amount" class="col-lg-12"> <br>
                </div>
                <button type="button" onclick="calculator()" class="form-group bg-info">Calculate</button> 
                <button type="reset" class="form-group bg-info">Clear</button> 
                <br>
                <div class="form-group">
                    Necessity($): &nbsp;<br> <input type="text" id="first" class="col-lg-12"><br>
                </div>
                <div class="form-group mx-auto">
                    Savings($): &nbsp; <br><input type="text" id="second" class="col-lg-12"><br></div>
                <div class="form-group mx-auto">
                    Entertainment($): &nbsp;<br> <input type="text" id="third" class="col-lg-12"><br></div>
                <div class="form-group mx-auto">
                    Education($): &nbsp;<br> <input type="text" id="fourth" class="col-lg-12"><br>
                </div>
                <div class="form-group mx-auto">
                    Investment($): &nbsp;<br> <input type="text" id="fifth" class="col-lg-12"><br></div>
                <div class="form-group mx-auto">
                    Donations($): &nbsp; <br><input type="text" id="sixth" class="col-lg-12"><br></div>
            </div>
        </div>
    </form>
</main>
  <footer class="text-muted">
        <div class="container">
            <p>&copy; 2019 by Tho Vu</p><span id="displayTime" class="clock" style='float: right' onload="displayClock()"></span>
            <p> Tel: 819-319-9114 | Email <a href="mailto:vu000071@algonquinlive.com">vu000071@algonquinlive.com</a></p>
        </div>
    </footer>
    <script>
        function calculator() {
            var amount = parseInt(document.getElementById("amount").value)
            var first = parseInt((document.getElementById("first").value = (55 / 100) * amount)).toFixed(2)
            var second = parseInt((document.getElementById("second").value = (10 / 100) * amount)).toFixed(2)
            var third = parseInt(document.getElementById("third").value = (10 / 100) * amount)
            var fourth = parseInt(document.getElementById("fourth").value = (10 / 100) * amount)
            var fifth = parseInt(document.getElementById("fifth").value = (10 / 100) * amount)
            var sixth = parseInt(document.getElementById("sixth").value = (5 / 100) * amount)
        }
        function displayClock() {
            var date = new Date();
            var h = date.getHours(); 
            var m = date.getMinutes(); 
            var s = date.getSeconds(); 
            var session = "AM";
            if (h == 0) {
                h = 12;
            }
            if (h > 12) {
                h = h - 12;
                session = "PM";
            }
            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;
            var time = h + ":" + m + ":" + s + " " + session;
            document.getElementById("displayTime").innerText = time;
            document.getElementById("displayTime").textContent = time;
            setTimeout(displayClock, 1000);
        }
        displayClock();
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body></html>
