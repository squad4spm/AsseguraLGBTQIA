<?php include("header.php"); ?>
<?php include("menu.php"); ?>

<div id="login-container" class="login-container">
    <div class="container-login">
    <form>
        <img class="avatar" src="./images/user.png" alt="login" />
        <div class="bem-vindo">Bem Vindos</div>
        <input type="email" placeholder="email">
        <input type="Password" placeholder="Password">
        <button>login</button>
        <div class="rede-social2" ><a>Ou faça login com:</a></div>
        <div class="rede-social">
            <img  src="./images/google.png" alt="login" />
            <img  src="./images/facebook.png" alt="login" />
        </div>
        <div class="opcao-conta">
            <a href="">Criar Conta</a>
            <a href="">Esqueceu a Senha?</a>
        </div>
    </form>
</div>

<?php include("footer.php"); ?>