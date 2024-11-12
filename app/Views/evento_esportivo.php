<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento de Futebol</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
   
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
  
    /*input*/
  
    .input-container {
      position   : relative;
      width      : 200px;
      margin-top : -1%;
      margin-left: 30%;
    }
  
    .input-text {
      width        : 100%;
      padding      : 8px 10px 8px 30px;
      font-size    : 16px;
      border-radius: 5px;
      border       : 1px solid #ccc;
    }
  
    .search-icon {
      position : absolute;
      left     : 3%;
      top      : 63%;
      transform: translateY(-50%);
      color    : #888;
      font-size: 16px;
    }
  
    /*menu*/
  
    .menu-button {
      display       : flex;
      flex-direction: column;
      width         : 30px;
      cursor        : pointer;
      gap           : 5px;
      position      : absolute;
      top           : 30%;
      right         : 10px;
      z-index       : 2;
    }
  
    .menu-button div {
      height          : 4px;
      background-color: white;
      border-radius   : 2px;
    }
  
    .menu {
      color           : #458564;
      display         : none;
      position        : absolute;
      top             : 50px;
      font-size       : 20px;
      right           : 10px;
      background-color: #f1f1f1;
      border          : 1px solid #ccc;
      border-radius   : 10%;
      width           : 350px;
      height          : 50%;
      box-shadow      : 0 4px 8px rgba(0, 0, 0, 0.2);
      border-radius   : 5px;
      padding         : 15px 5px 5px 5px;
      z-index         : 1;
  
    }
  
    .menu a {
      display        : block;
      padding        : 10px;
      color          : #458564;
      text-decoration: none;
      border-radius  : 3px;
    }
  
    .letras-menu {
      margin-left: 30%;
    }
  
    .menu a:hover {
      background-color: #ddd;
    }
  
    .close-button {
      display        : flex;
      justify-content: flex;
      margin-left    : 5%;
      cursor         : pointer;
      font-size      : 30px;
      color          : #458564;
    }
  
    .button-menu {
      width      : 130px;
      text-align : center;
      white-space: nowrap;
  
    }
  
    hr {
      width           : 60%;
      background-color: #458564;
      height          : 0.1rem;
      border          : none;
    }
  
  
  
    .img-body {
  
      justify-content: center;
      align-items    : center;
      display        : flex;
  
  
    }
/* Conteúdo principal */
main {
    display: flex;
    justify-content: center;
    padding: 20px;
}

.event-card {
    background-color: #e6e6e6;
    margin-top: 5%;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    max-width: 400px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.event-card h2 {
    font-size: 1.5em;
    color: #333;
    margin-bottom: 15px;
}

.event-card img {
    width: 100%;
    height: auto;
    border-radius: 5px;
    margin-bottom: 15px;
}

.event-card p {
    font-size: 0.9em;
    margin: 8px 0;
}

.subscribe-button {
    background-color: #3a6b42;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    margin-top: 10px;
}

.subscribe-button:hover {
    background-color: #2e5733;
}



</style>
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
        <div class="event-card">
            <h2>Futebol sábado à tarde</h2>
            <img src="https://media-public.canva.com/dcqmc/MAFQc6dcqmc/1/s.jpg" alt="Imagem do evento de futebol">
            <p><strong>Criador:</strong> Isaque Vieira</p>
            <p><strong>Curso/Turma do criador do evento:</strong> Técnico em informática - TI01</p>
            <p><strong>Lugar:</strong> IFFar Panambi</p>
            <p><strong>Data:</strong> 23/09/2038</p>
            <p><strong>Hora:</strong> 21:52</p>
            <a href="/PPI/public/esportes">
            <button class="subscribe-button">Inscrever-me</button>

            </a>
        </div>
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
