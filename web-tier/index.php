DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>3-Tier Demo - Web Tier</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            text-align: center;
            padding: 60px;
        }

        .card {
            background: #fff;
            max-width: 520px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .1);
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background: #ff9900;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Web Tier is Running</h1>

        <p>
            Presentation layer served by Apache on EC2 (public subnet).
        </p>

        <a href="/app/">Open Student Portal &rarr;</a>
    </div>
</body>
</html>
