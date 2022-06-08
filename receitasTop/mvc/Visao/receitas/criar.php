<!--PAGINA DE CRIAÇÃO DE RECEITAS-->

<!-- meu script -->
<script type="text/javascript" src="<?= URL_JS . 'receitas.js' ?>"></script>


<div class="container">
    <div class="row">

        <!--Nome-->
        <form action="<?= URL_RAIZ . 'receitas' ?>" method="post" id="form-Receita" class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="titulo" name="titulo" value="<?= $this->getPost('titulo') ?>" type="text" class="validate <?= $this->getErroCss('titulo') ?>" maxlength="80" pattern="^(?![ ])(?!.*[ ]{2})((?:e|da|do|das|dos|de|d'|D'|la|las|el|los)\s*?|(?:[A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð'][^\s]*\s*?)(?!.*[ ]$))+$">
                    <label for="titulo">Nome da sua nova receita</label>
                    <?php $this->incluirVisao('util/formErro.php', ['campo' => 'titulo']) ?>
                </div>
            </div>

            <!--Foto-->
            <div class="row">
                <div class="input-field col m12 s12">
                    <i class="material-icons">file_upload</i>
                    <input id="fotos" name="fotos" type="file" class="validate <?= $this->getErroCss('fotos') ?>">
                    <?php $this->incluirVisao('util/formErro.php', ['campo' => 'fotos']) ?>
                </div>
                <label for="fotos">Faça o Upload das fotos da receita - Foto (somente PNG)</label>
            </div>

            <!--Tempo de preparo-->
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">schedule</i>
                    <input id="tempoPreparo" name="tempoPreparo" value="<?= $this->getPost('email') ?>" type="tel" class="validate <?= $this->getErroCss('tempoPreparo') ?>">
                    <label for="tempoPreparo">Tempo de preparo estimado</label>
                    <?php $this->incluirVisao('util/formErro.php', ['campo' => 'tempoPreparo']) ?>
                </div>
            </div>

            <!--Ingredientes-->
            <!--DESENVOLVER CODE PARA PASSAR DE CHIPS PARA O PHP EM POST-->
            <div class="row">
                <div class="chips chips-placeholder input-field col s12" value="<?= $this->getPost('ingrediente') ?>" name="ingrediente1" id="ingrediente1" class="validate <?= $this->getErroCss('ingrediente') ?>" onblur="criaArray()"></div>
                <?php $this->incluirVisao('util/formErro.php', ['campo' => 'ingrediente']) ?>
                <input type="hidden" id="ingrediente" name="ingrediente" value="">
            </div>


            <!--Como fazer-->
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="comoFazer" name="comoFazer" value="<?= $this->getPost('comoFazer') ?>" class="materialize-textarea" class="validate <?= $this->getErroCss('comoFazer') ?>"></textarea>
                    <label for="comoFazer">Descreva aqui passo a passo de como fazer a receita</label>
                    <?php $this->incluirVisao('util/formErro.php', ['campo' => 'comoFazer']) ?>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s12">
                    <button type="submit" id="btn-submit" class="btn waves-effect blue darken-4 white-text">Enviar<i class="material-icons right">send</i></button>
                </div>
            </div>
        </form>
    </div>
</div>