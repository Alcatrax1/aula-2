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
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>

                <a>ou use seu e-mail para cadastro</a>
                <input type="text" placeholder="Nome" id="username" name="username" />
                <input type="email" placeholder="Email" id="email" name="email" />
                <input type="password" placeholder="Senha" id="password" name="password" />
                <button>Criar</button>
            </form>

        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Entar</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Entre Com a Sua Conta</span>
                <input type="email" placeholder="Email" id="email" name="email" />
                <input type="password" placeholder="Senha" id="password" name="password" />
                <a href="#">Esqueceu sua senha?</a>
                <button>Sign In</button>
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
                    <h1>Ola, Amigo</h1>
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