<?php include ('../view/includes/_header.php'); ?>
<h1>Resetar senha</h1>

<div class="container">
    <form action="submit">
       <div class="row">
            <div class="col s12 m12 l12 input-field">
                <label for="email">Email</label>
                <input id="email" type="text" class="validate">
            </div>
        </div>
         <button class="btn waves-effect waves-light" type="submit" name="action">
             Enviar nova senha
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>
<div class="clear"></div>
<?php include ('../view/includes/_footer.php'); ?>