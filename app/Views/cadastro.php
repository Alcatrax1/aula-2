<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sport Connect</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container" id="container">


    
        <div class="form-container sign-up-container">
            <form action="cadastro" method="post">
                <h1>Criar Conta</h1>
               

                <a>ou use seu e-mail para cadastro</a>
                <input type="text" placeholder="Nome" id="username" name="username" />
                <input type="email" placeholder="Email" id="email" name="email" />
                <input type="password" placeholder="Senha" id="password" name="password" />
                <button>Criar</button>
            </form>

        </div>






        <div class="form-container sign-in-container">








        <form>
    <h1>Entrar</h1>
    <span>Entre com a sua conta</span>
    <input type="email" placeholder="Email" id="email" name="email" />
    <input type="password" placeholder="Senha" id="password" name="password" />
    <a href="#">Esqueceu sua senha?</a>
    <button type="button" onclick="window.location.href='/PPI/public/tela2';">Entrar</button>
</form>

        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bem vindo de volta!</h1>
                    <p>Para se manter conectado conosco, faça login com suas informações pessoais.</p>
                    <button class="ghost" id="signIn">Entar</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Olá, Amigo</h1>
                    <p>Insira seus dados pessoais e comece sua jornada conosco.</p>
                    <button class="ghost" id="signUp">Criar</button>
                </div>
            </div>
        </div>
    </div>


    <?php if (isset($validation)): ?>
    <div style="color: red;">
        <?= $validation->listErrors() ?>
    </div>
    <?php endif; ?>

    <?php if (isset($validation) && $validation->getError('email')): ?>
    <div class="error">
        <?= $validation->getError('email') ?>
    </div>
    <?php endif; ?>
    <script src="./script.js"></script>

</body>

</html>