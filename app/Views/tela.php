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
   padding: 10px; /*espaçamentos*/
    font-family: Arial, sans-serif;
    margin: 0;
}

.caixa-superior {
    width: 100%;
    height: 65px;
    background-color: black;
    opacity: 0.7;
    position: fixed;
    top: 0;
    z-index: 100;
    padding: 0;
    display: flex;
    left: 0;

    /* justify-content: left;  Centraliza horizontalmente */
    align-items: center;  /* Centraliza verticalmente */
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
#esportes{
    background-color: green;
    width: 105px;
    height: 65px;
    /* Centraliza vertical e horizontalmente */
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 300px; 
    text-align: center; 
}
.imagem-fut{
display: flex;
height: auto;
width: 100%;
justify-content: center;
align-items: center ;



}
</style>
<body>
  <nav class="caixa-superior"><div> 
<h1 id="esportes">Esportes</h1>

  </div>

  <img class="imagem-fut" src="public/futebol.jpg">
</nav>
</body>
</html>