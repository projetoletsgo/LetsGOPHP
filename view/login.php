<?php include ('../view/includes/_header.php'); ?>
<h1>Login</h1>


<div class="container">
    <form action="../model/excursoes.php" method="post">
    <input type="hidden" name="tipo" value="logar" />
       <div class="row">
            <div class="col s12 m12 l12 input-field">
                <label for="email">Email</label>
                <input id="email" name="s_email" type="text" class="validate">
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12 input-field">
                <label for="password">Password</label>
                <input id="password" name="s_senha" type="password" class="validate">
            </div>
        </div>
        <div class="row">
            <a href="CadastroUsuario.php">Ainda nâo tem cadastro? </a>| <a href="ResetPassword.php">Esqueci minha senha</a>
        </div>
         <button class="btn waves-effect waves-light" type="submit" name="action">
             Entrar
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>
<div class="clear"></div>
<?php include ('../view/includes/_footer.php'); ?>