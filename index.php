<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda ETEC</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0a192f;
            color: #ffffff;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            background-color: #112240;
            padding: 20px;
            margin: 0;
        }

        h2 {
            color: #64ffda;
        }

        a {
            color: #64ffda;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            background-color: #112240;
            padding: 20px;
            margin: 20px auto;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        input {
            width: 90%;
            padding: 8px;
            border: none;
            border-radius: 5px;
        }

        button {
            background-color: #64ffda;
            color: #0a192f;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #52e0c4;
        }

        hr {
            border: 1px solid #233554;
            width: 80%;
        }
    </style>

</head>
<body>

<h1>Agenda de Eventos da ETEC</h1>

<h2>Consultar Eventos</h2>
<a href="get.php" target="_blank">Ver eventos (GET)</a>

<hr>

<h2>Cadastrar Evento</h2>

<form method="POST" action="post.php">
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label>Data:</label><br>
    <input type="date" name="data" required><br><br>

    <label>Local:</label><br>
    <input type="text" name="local" required><br><br>

    <button type="submit">Cadastrar</button>
</form>

</body>
</html>