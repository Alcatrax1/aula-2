<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<style>



</style>
<body>
    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

<form action="<?= base_url('login') ?>" method="post">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br>
        
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">Login</button>
    </form>
</body>
</div>
    
</body>
</html>