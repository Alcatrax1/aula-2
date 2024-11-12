<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    /* Estilos globais */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        color: #333;
    }

    /* Cabeçalho */

    .caixa-superior {
        z-index: 2;
        width: 100%;
        height: 9%;
        background-color: #458564;
        position: fixed;
        top: 0;
        padding: 0;
        display: flex;
        left: 0;
        align-items: center;
    }

    .foto-usuario-caixa-superior {
        z-index: 1;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-left: 2%;
    }

    /*input*/

    .input-container {
        position: absolute;
        width: 200px;
        margin-left: 43%;
    }

    .input-text {
        width: 100%;
        padding: 8px 10px 8px 30px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .search-icon {
        position: absolute;
        left: 3%;
        top: 63%;
        transform: translateY(-50%);
        color: #888;
        font-size: 16px;
    }

    /*menu*/

    .menu-button {
        display: flex;
        flex-direction: column;
        width: 30px;
        cursor: pointer;
        gap: 5px;
        position: absolute;
        top: 30%;
        right: 10px;
        z-index: 2;
    }

    .menu-button div {
        height: 4px;
        background-color: white;
        border-radius: 2px;
    }

    .menu {
        color: #458564;
        display: none;
        position: absolute;
        top: 50px;
        font-size: 20px;
        right: 10px;
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        border-radius: 10%;
        width: 350px;
        height: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        padding: 15px 5px 5px 5px;
        z-index: 1;

    }

    .menu a {
        display: block;
        padding: 10px;
        color: #458564;
        text-decoration: none;
        border-radius: 3px;
    }

    .letras-menu {
        margin-left: 30%;
    }

    .menu a:hover {
        background-color: #ddd;
    }

    .close-button {
        display: flex;
        justify-content: flex;
        margin-left: 5%;
        cursor: pointer;
        font-size: 30px;
        color: #458564;
    }

    .button-menu {
        width: 130px;
        text-align: center;
        white-space: nowrap;

    }

    hr {
        width: 60%;
        background-color: #458564;
        height: 0.1rem;
        border: none;
    }



    .img-body {

        justify-content: center;
        align-items: center;
        display: flex;

    }

    .profile-card {
        
        position: absolute;

top: 50%;
left: 50%;
transform: translate(-50%, -50%);   
     background-color: transparent;
        padding: 20px;
        max-width: 400px;
        border-radius: 10px;
        text-align: center;
        width: 100%;
    }
    .profile-image img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 2px solid #3a6b42;
    margin-bottom: 15px;
    object-fit: cover
    }

    .profile-card h2 {
        font-size: 1.5em;
        color: #333;
        margin-bottom: 10px;
    }

    .info p {
        background-color: transparent;
        padding: 8px;
        border-radius: 20px;
        margin: 5px 0;
        border: 1px solid #3a6b42;
        font-weight: bold;
    }

    .edit-button {
        background-color: #3a6b42;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
        margin-top: 5%;
        display: inline-block;
    }

    .edit-button:hover {
        background-color: #2e5733;
    }

    footer {
        display: flex;
        justify-content: center;
        padding: 20px;
    }

    .footer-logo {
        width: 200px;
        margin-right: -95%;
        margin-top: 5%;
        display: flex;
        height: auto;
    }
</style>

<body>
<nav class="caixa-superior">
    <a href="http://localhost/PPI/public/perfil" class="foto-usuario-caixa-superior">
    <img  src="https://media.istockphoto.com/id/1495088043/pt/vetorial/user-profile-icon-avatar-or-person-icon-profile-picture-portrait-symbol-default-portrait.jpg?s=612x612&w=0&k=20&c=S7d8ImMSfoLBMCaEJOffTVua003OAl2xUnzOsuKIwek=" class="foto-usuario-caixa-superior" alt="Foto do Usuário">

    </a>

    <div class="input-container">
        <i class="fas fa-search search-icon"></i>
        <input type="text" placeholder="Buscar..." class="input-text">
    </div>

    <div class="menu-button" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
</nav>

<div class="menu" id="menu">
    <div class="close-button" onclick="toggleMenu()">✖</div>
    <hr>

    <a  href="/PPI/public/editar-perfil"  class="button-menu letras-menu">Editar Perfil</a>
    <hr>
 

    <a href="/PPI/public/criar-evento"class="button-menu letras-menu">Criar Eventos</a>
    <hr>

    <a class="button-menu letras-menu" href="#editarPerfil">Sobre Nós</a>
    <hr>

    <a class="button-menu letras-menu" href="#so">Fale com conosco</a>
    <hr>

</div>

    <main>
        <div class="profile-card">
            <div class="profile-image">
                <img src="https://media.istockphoto.com/id/1495088043/pt/vetorial/user-profile-icon-avatar-or-person-icon-profile-picture-portrait-symbol-default-portrait.jpg?s=612x612&w=0&k=20&c=S7d8ImMSfoLBMCaEJOffTVua003OAl2xUnzOsuKIwek=" alt="Imagem de perfil">
            </div>
            <h2>Arthur Wolter</h2>
            <div class="info">
                <p><strong>Curso:</strong> Técnico em Informática</p>
                <p><strong>Turma:</strong> TI01</p>
                <p><strong>Telefone:</strong> (54) 996624349</p>
                <p><strong>Esportes:</strong> Truco, futsal</p>
            </div>
            <a href="/PPI/public/editar-perfil" class="edit-button">Editar perfil</a>

    </main>

    <script>
            function toggleMenu() {
                const menu = document.getElementById("menu");
                menu.style.display = menu.style.display === "block" ? "none" : "block";
            }

            window.onclick = function (event) {
                const menu = document.getElementById("menu");
                const menuButton = document.querySelector(".menu-button");
                if (!menu.contains(event.target) && !menuButton.contains(event.target)) {
                    menu.style.display = "none";
                }
            };

            var words = document.getElementsByClassName('word');
            var wordArray = [];
            var currentWord = 0;

            words[currentWord].style.opacity = 1;
            for (var i = 0; i < words.length; i++) {
                splitLetters(words[i]);
            }

            function changeWord() {
                var cw = wordArray[currentWord];
                var nw = currentWord == words.length - 1 ? wordArray[0] : wordArray[currentWord + 1];
                for (var i = 0; i < cw.length; i++) {
                    animateLetterOut(cw, i);
                }

                for (var i = 0; i < nw.length; i++) {
                    nw[i].className = 'letter behind';
                    nw[0].parentElement.style.opacity = 1;
                    animateLetterIn(nw, i);
                }

                currentWord = (currentWord == wordArray.length - 1) ? 0 : currentWord + 1;
            }

            function animateLetterOut(cw, i) {
                setTimeout(function () {
                    cw[i].className = 'letter out';
                }, i * 80);
            }

            function animateLetterIn(nw, i) {
                setTimeout(function () {
                    nw[i].className = 'letter in';
                }, 340 + (i * 80));
            }

            function splitLetters(word) {
                var content = word.innerHTML;
                word.innerHTML = '';
                var letters = [];
                for (var i = 0; i < content.length; i++) {
                    var letter = document.createElement('span');
                    letter.className = 'letter';
                    letter.innerHTML = content.charAt(i);
                    word.appendChild(letter);
                    letters.push(letter);
                }

                wordArray.push(letters);
            }

            changeWord();
            setInterval(changeWord, 4000);

        </script>

   
</body>

</html>