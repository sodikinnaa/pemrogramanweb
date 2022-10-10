<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            border: 5px solid #ffcc5c;
            display: flex;
            justify-content: flex-end;
        }
        .home{
            margin-right: auto;
        }
        .container > a{
            padding: 10px;
            text-align: center;
            font-size: 2em;
            color: #ffeead;
        }

        html, body{
            background-color: #ffeead;
            margin: 10px;
        }

        .container > a:nth-child(1){
            background-color: #96ceb4;
        }

        .container > a:nth-child(2){
            background-color: #ff6f69;
        }

        .container > a:nth-child(3){
            background-color: #88d8b0;
        }
        a{
            text-decoration:none;
        }
        .container-main{
            display: flex;
            justify-content: center;
            padding: 10px;
            text-align: center;
            font-size: 2em; 
        }
        p{
            text-align: justify;
        }
        
    </style>
</head>
<body>
    
    <nav class="container">
            <a href="#" class="home">Home</a>
            <a href="#" class="search">Search</a>
            <a href="#" class="logout">back</a>
    </nav>
    <div class="container-main">
        <h3 class="search">PENGGUNAAN Flexbox</h3>
    </div>
    <p>Apa itu Flexbox ? Flexbox atau Flexible Box merupakan sebuah mode pengaturan atau konsep layout pada CSS yang digunakan untuk mengatur elemen atau container beserta item didalamnya pada halaman web.</p>
</body>
</html>