<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie seu Evento</title>
</head>
<style>
    /* Estilos gerais */
    body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0;
    min-height: 110vh; /* Garante altura mínima de 100% da tela */
    }


/* Barra de navegação */

.caixa-superior {
z-index: 2;
    width           : 100%;
    height          : 9%;
    background-color: #458564;
    position        : fixed;
    top             : 0;
    padding         : 0;
    display         : flex;
    left            : 0;
    align-items     : center;
  }

  .foto-usuario-caixa-superior {
    z-index      : 1;
    width        : 40px;
    height       : 40px;
    border-radius: 50%;
    margin-left  : 2%;
  }

/* Container principal */
.container {
    position: absolute;

top: 50%;

left: 50%;

transform: translate(-50%, -50%);

    background-color: transparent;
    width: 90%;
    max-width: 400px;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    margin-top: 27%;
    min-height: 100%; /* Ajusta a altura de acordo com o conteúdo */
}


.image-upload img {
    width: 100px;
    height: 100px;
    border-radius: 8px;
    background-color: #d3e2dc;
}

.upload-btn {
    display: block;
    margin: 10px auto;
    padding: 8px 12px;
    border: 2px solid #3a6b42;
    border-radius: 15px;
    color: #3a6b42;
    background-color: transparent;
    cursor: pointer;
}

.event-form label {
    display: block;
    text-align: left;
    font-weight: bold;
    margin-top: 10px;
    color: #3a6b42;
}

.event-form input {
    width: 100%;
    padding: 8px;
    border: 2px solid #3a6b42;
    border-radius: 15px;
    margin-bottom: 10px;
    outline: none;
}

.create-btn {
    width: 100%;
    padding: 10px;
    border: 2px solid #3a6b42;
    background-color: transparent;
    color: #3a6b42;
    border-radius: 15px;
    font-weight: bold;
    cursor: pointer;
    margin-top: 15px;
}

</style>
<body>

<nav class="caixa-superior">
        <a href="http://localhost/PPI/public/perfil" class="foto-usuario-caixa-superior">
        <img  src="https://media.istockphoto.com/id/1495088043/pt/vetorial/user-profile-icon-avatar-or-person-icon-profile-picture-portrait-symbol-default-portrait.jpg?s=612x612&w=0&k=20&c=S7d8ImMSfoLBMCaEJOffTVua003OAl2xUnzOsuKIwek=" class="foto-usuario-caixa-superior" alt="Foto do Usuário">

        </a>

    <div class="container">
        <div class="image-upload">
            <img src="https://media-public.canva.com/VnutA/MAEZpQVnutA/1/t.png" alt="Imagem do Evento">
            <button class="upload-btn">⬆ Fazer upload de imagem</button>
        </div>

        <form class="event-form">
            <label>Nome do criador do evento:</label>
            <input type="text" placeholder="Digite aqui">
            
            <label>Nome do evento:</label>
            <input type="text" placeholder="Digite aqui">
            
            <label>Curso:</label>
            <input type="text" placeholder="Digite aqui">
            
            <label>Turma:</label>
            <input type="text" placeholder="Digite aqui">
            
            <label>Telefone:</label>
            <input type="text" placeholder="Digite aqui">
            
            <label>Esportes:</label>
            <input type="text" placeholder="Digite aqui">
            
            <label>Descrição:</label>
            <input type="text" placeholder="Digite aqui">
            
            <button type="submit" class="create-btn">CRIAR</button>
        </form>
    </div>

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
