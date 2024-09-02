<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./tela.css">
  <title>Document</title>
</head>
<style>
body {
    background-color: white;
    margin: 0;
}

.caixa-superior {
    width: 100%;
    height: 30px;
    background-color: black;
    opacity: 0.7;
    position: fixed;
    top: 0;
    z-index: 100;
}

.caixa-superior input[type="text"] {
    
}


@media (max-width: 768px) {
    .caixa-superior {
        height: 50px;
    }

    .caixa-superior input[type="text"] {
        font-size: 14px;
    }
}

</style>
<body>
  <nav class="caixa-superior"><div></div></nav>
</body>
</html>