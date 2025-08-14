<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        body{
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            flex-direction: column;
            background-color: black;
            color: green;
            padding-top: 100px;
        }

        #quatre{
            font-size: 200px;
            font-weight: 500;
        }

        h1{
            margin-bottom: 20px;
        }

        #retourne{
            width: 210px;
            padding: 15px 5px;
            font-weight: 600;
            font-size: 20px;
            background-color: green;
            color: black;
            border: none;
        }
    </style>
</head>
<body>
    <p id="quatre">404</p>
    <h1>Page non trouvée</h1>
    <a href="/"><button id="retourne">Retourner a l'acceuil</button></a>
</body>
</html>