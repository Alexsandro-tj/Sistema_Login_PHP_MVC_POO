<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* Estilização do alerta personalizado */
        .meu-alerta {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #333;
            color: #fff;
            padding: 15px 25px;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            display: none; /* Começa escondido */
            z-index: 1000;
        }
    </style>
</head>
<body>
    <h1>DASH BOARD</h1>
    <P>Éssa é a area restrita</P>
    <div id="alerta" class="meu-alerta">
        Esta mensagem vai sumir em 5 segundos!
    </div>
    <script>
       document.addEventListener("DOMContentLoaded", function() {
            var alerta = document.getElementById("alerta");

            // 1. Mostra o alerta assim que a página carrega
            alerta.style.display = "block";

            // 2. Conta 5000 milissegundos (5 segundos) e esconde o alerta
            setTimeout(function() {
                alerta.style.display = "none";
            }, 5000); 
        });
    </script>
</body>
</html>