<?php if (isset($_GET['erro'])) { ?>
    <div class="alert alert-danger" role="alert">
        Usuário e/ou senha inválidos.
    </div>
<?php } ?>

<h1 style="text-align:center">Bem-vindo ao Pagamentos PIX</h1>

<?php if (!isset($_SESSION['login'])) { ?>
    <form method="post" action="login/login.php">
        <label class="badge badge-secondary">Usuário:</label>
        <input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">
        <br>
        <label class="badge badge-secondary">Senha:</label>
        <input type="password" name="senha" placeholder="Digite a senha" class="form-control">
        <br>
        <input type="submit" value="Entrar" class="btn btn-success">
    </form>
    <br>
<?php }
