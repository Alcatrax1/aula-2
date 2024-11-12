<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Sport Connect</title>
    <link rel="stylesheet" href="style-tela-principal.css">
</head>
<style>
    .img-body {
        margin-left: -47%;
        margin-top: -3%;
        border-radius: 5%;
        width: 550px;
        height: auto;

    }

    .caixa-de-informacao {
        width: 40%;
        height: 350px;
        background-color: #F0F0F0;
        z-index: -1;
        margin-top: 6%;
        border-radius: 2%;
        margin-left: 550px;
    }

    .texta {
        margin-top: 20px;


    }


    .container {
        display: flex;
        margin-left: -70%;
        width: 200%;
        padding: 10px;
        margin-top: 10%;
    }

    .card {
    background-color: white;
border-radius: 2%;    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin: 10px;
    font-size: 20px;
    text-align: center;
    width: 900px;
    padding: 20px;
}


    h3 {
        margin: 10px 0;
        color:black;

    }

    p {
        color: #555;
    }

    .usuario  {
        width: 40px;
        height: auto;
        border-radius: 100px;
margin-left: -270px;
    }
    .img-card{
border-radius: 3%;


    }
    a {
  text-decoration: none;
  color: inherit; 
}

a:hover {
  text-decoration: none; 
  border-bottom: none; 
}
.p1{
width: 350px;
text-align: left;
margin-top:5%;
position: absolute;
left: 53%;
font-size: 20px;


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
     
        <a class="button-menu letras-menu" href="/PPI/public/criar-evento">Criar Eventos</a>

        <hr>

        <a class="button-menu letras-menu" href="#editarPerfil">Sobre Nós</a>
        <hr>

        <a class="button-menu letras-menu" href="#so">Fale com conosco</a>
        <hr>

    </div>

    <div class=" caixa-de-informacao">
        <div class="text">
            <p class="texta">
                <span>Esporte é&nbsp;&nbsp; </span>
                <span class="word belize">Força.</span>
                <span class="word pomegranate"> Saúde.</span>
                <span class="word green"> Bem-estar.</span>
                <span class="word midnight"> Conquista.</span>
            </p>
<p class="p1">Esportes representam força, saúde, bem-estar e conquistas. Cada prática traz desafios, fortalece o corpo e inspira a superação, promovendo equilíbrio físico e mental.</p>
            <img src="https://cdn.pixabay.com/photo/2014/10/14/20/24/soccer-488700_1280.jpg" class="img-body" alt="">

        </div>

        <div class="container">
        <a href="/PPI/public/evento_esportivo/123 "class="card"><img width="100%" class="img-card"  src="https://cdn.pixabay.com/photo/2020/04/19/20/57/soccer-5065614_640.jpg" alt="Imagem 1">

                <h3>Futebol</h3>
                <p>O futebol é um esporte mundialmente amado, onde duas equipes competem para marcar gols. Mais que um jogo, ele inspira e une culturas, trazendo emoção e paixão para milhões de fãs ao redor do mundo.</p></a>

               
                
            <div class="card">   
                             <img width="100%" class="img-card"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS07866ih8DNvK_59C4HIohh6HMka4nfCS2PA&s"
                    alt="Imagem 2">

                <h3>Vôlei</h3>
                <p>O vôlei é um esporte dinâmico e estratégico, jogado entre duas equipes de seis jogadores. O objetivo é fazer a bola tocar o chão da quadra adversária, passando-a por cima da rede. Popular em diversos países, o vôlei promove trabalho em equipe, agilidade e coordenação.</p>
            </div>
            <div class="card">   
             <img width="100%" class="img-card"  src="https://perolanews.com.br/wp-content/uploads/2014/07/comojogartrucopaulista.jpg" alt="Imagem 3">

             <h3>Truco</h3>
                <p>O truco gaúcho é uma variação do truco muito jogada no sul do Brasil. Disputado entre duplas, o objetivo é alcançar 12 pontos usando estratégias e blefes. As cartas têm hierarquias específicas, e a cada rodada os jogadores podem "pedir truco", aumentando a aposta e a emoção da partida.</p>
            </div>
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