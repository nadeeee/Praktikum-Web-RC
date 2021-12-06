<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorry</title>

    <style>
        @import url("https://fonts.googleapis.com/css?family=Fira+Code&display=swap");

        * {
            margin: 0;
            padding: 0;
            font-family: "Fira Code", monospace;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ecf0f1;
        }

        .container {
            text-align: center;
            margin: auto;
            padding: 4em;
        }

        .container img {
            width: 256px;
            height: 225px;
        }

        .container h1 {
            margin-top: 1rem;
            font-size: 35px;
            text-align: center;
        }

        .container h1 span {
            font-size: 60px;
        }

        .container p {
            margin-top: 1rem;
        }

        .container p.info {
            margin-top: 4em;
            font-size: 12px;
        }

        .container p.info a {
            text-decoration: none;
            color: #5454ce;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="https://i.imgur.com/qIufhof.png" />

        <h1>
            <span>500</span> <br />
            Internal server error
        </h1>
        <p>We are currently trying to fix the problem.</p>
        <p>This is not your Fault</p>
        <p class="info">
            Illustration taken from
            <a href="https://www.kapwing.com/404-illustrations" target="_blank">kapwing.com</a>
        </p>
    </div>
</body>

</html>