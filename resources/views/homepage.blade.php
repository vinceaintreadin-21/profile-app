<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        header{
            padding: 2px 0;
            background-color: rgb(55, 55, 56);
        }

        h1{
            text-align: center;
            color: white;
        }
        img {
            max-width: 100%;
            max-height: 100%;
            border: 2px solid #ccc; /* Optional: adds a border around the image */
        }
    </style>
</head>
<body>
    <header>
        <h1>Note App</h1>
        <nav>
            <ul>
                <li><a href="#notes">Notes</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#log-out">Log out</a></li>
            </ul>
        </nav>
    </header>

    <img src="../views/noting.jpg" alt="notes">


    <main>
        <section>
            <div class="box">
                <div class="message">Noting is essential in life</div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024. All Rights Reserved.</p>
    </footer>
</body>
</html>
