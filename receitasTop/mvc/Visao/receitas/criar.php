<!--PAGINA DE CRIAÇÃO DE RECEITAS-->

<!-- meu script -->
<script type="text/javascript" src="<?= URL_JS . 'receitasNew.js' ?>"></script>


<div class="container">
    <div class="row">

        <!--Nome-->
        <form id="form-newReceita" class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="input-name" type="text" class="validate" maxlength="80"
                        pattern="^(?![ ])(?!.*[ ]{2})((?:e|da|do|das|dos|de|d'|D'|la|las|el|los)\s*?|(?:[A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð'][^\s]*\s*?)(?!.*[ ]$))+$">
                    <label for="input-name">Nome da sua nova receita</label>
                </div>
            </div>

            <!--Foto-->
            <div class="row">
                <div class="input-field col m12 s12">
                    <i class="material-icons">file_upload</i>
                    <input id="upFotos" type="file" class="validate">
                </div>
                <label for="upFotos">Faça o Upload das fotos da receita</label>
            </div>

            <!--Tempo de preparo-->
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">schedule</i>
                    <input id="icon_time" type="tel" class="validate">
                    <label for="icon_time">Tempo de preparo estimado</label>
                </div>
            </div>

            <!--Ingredientes-->
            <div class="row">
                <div class="chips chips-placeholder input-field col s12"></div>
            </div>

            <!--Como fazer-->
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="comoFazer" class="materialize-textarea"></textarea>
                    <label for="comoFazer">Descreva aqui passo a passo de como fazer a receita</label>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s12">
                    <button type="submit" id="btn-submit" class="btn waves-effect blue darken-4 white-text">Enviar<i
                            class="material-icons right">send</i></button>
                </div>
            </div>
        </form>
    </div>
</div>