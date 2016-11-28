<?php include ('../view/includes/_header.php'); ?>
<h1>Cadastro</h1>

<div class="container">
    <form action="../model/excursoes.php" method="post">
    <input type="hidden" name="tipo" value="cadastrarUsuario" />
        <div class="row">
            <h5>Quem é você?</h5>
        </div>
        <div class="row">
            <div class="col s12 m12 l4 input-field">
                <label for="nome" >Nome</label>
                <input id="nome" name="s_nome" type="text" class="validate">
            </div>

            <div class="col s12 m12 l4 input-field">
                <label for="sobrenome">Sobrenome</label>
                <input id="sobrenome" name="s_sobrenome" type="text" class="validate">
            </div>

            <div class="col s12 m12 l4 input-field">
                <label for="nascimento">Data Nascimento</label>
                <input id="nascimento" name="dt_nascimento"type="text" class="validate">
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l6 input-field">
                <input id="cidade" name="s_cidade" type="text" class="autocomplete">
                <label for="cidade">Cidade</label>
            </div>
            <div class="col s12 m12 l6 input-field">
                <input id="estado" name="s_estado" type="text" class="autocomplete">
                <label for="estado">Estado</label>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m12 l6 input-field">
                <input id="rg" name="s_rg" type="text" class="validate">
                <label for="rg">RG</label>
            </div>

            <div class="col s12 m12 l6 input-field">
                <input id="cpf" name="s_cpf" type="text" class="validate">
                <label for="cpf">CPF</label>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m12 l6 input-field">
                <input id="email" name="s_email" type="email" class="validate">
                <label for="email">Email</label>
            </div>

            <div class="col s12 m12 l6 input-field">
                <input id="confEmail" type="email" class="validate">
                <label for="confEmail">Confirmar Email</label>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m12 l6 input-field">
                <input id="senha" name="s_senha" type="password" class="validate">
                <label for="senha">Senha</label>
            </div>

            <div class="col s12 m12 l6 input-field">
                <input id="confSenha" type="password" class="validate">
                <label for="confSenha">Confirmar Senha</label>
            </div>
        </div>
        <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="action">
             Confirmar
        </button>

            <div class="col s12 hide-on-med-and-up"></div>

            <div class="col s12 m3 offset-m6">
                <a class="waves-effect waves-light btn red" href="login.html">Voltar</a>
            </div>
        </div>
    </form>
</div>
<br>
<br>
<?php include ('../view/includes/_footer.php'); ?>