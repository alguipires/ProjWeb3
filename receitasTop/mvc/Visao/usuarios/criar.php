<!--PAGINA DE CRIAÇÃO DE USUARIOS-->
 
    <!--carregando script cep-->
    <script type="text/javascript" src="<?= URL_JS . 'usuarios.js' ?>"></script>
    <!--fim carregando script cep-->
    <!--Main inicio-->
    <!--Texto instuitivo -->
    <div class="row">
        <div class="col s12 m12">
            <div class="card purple darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Cadastro</span>
                    <p>Realizando o cadastro tera acesso total do nosso site assim pode
                        compartilahr suas deliciosas receitas, comentar e muito mais!!!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section"></div>

    <div class="container">
        <div class="row">
            <form action="<?= URL_RAIZ . 'usuarios' ?>" method="post"  class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nome" name="nome" type="text" class="validate <?= $this->getErroCss('nome') ?>" value="<?= $this->getPost('nome') ?>" maxlength="80"
                            pattern="^(?![ ])(?!.*[ ]{2})((?:e|da|do|das|dos|de|d'|D'|la|las|el|los)\s*?|(?:[A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð'][^\s]*\s*?)(?!.*[ ]$))+$">
                        <label for="nome">Nome</label>
                        <?php $this->incluirVisao('util/formErro.php', ['campo' => 'nome']) ?>
                    </div>
                </div>

                <!--campo cpf desativado por não estar funcinado corretamente, ao cadastrar no bd fica um nuimero aleatorio/ opcional-->
                <!--
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">doc</i>
                        <input id="cpf" name="cpf" type="number" class="validate" maxlength="15"
                            pattern="/^[0-9]{3}|[0-9]{2}[.][0-9]{3}[.][0-9]{3}[-][0-9]{2}$"
                            placeholder="Ex.: 000.000.000-00">
                        <label for="cpf">Cpf</label>
                    </div>
                </div>-->

                <!--endereço com busca desativado por não ter classe modelo e tabela bd/ opcional-->
                <!--
                <div class="row">
                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <input id="cep" name="cep" type="text"  maxlength="9" placeholder="Ex.: 85010-100" onblur="pesquisacep(this.value);">
                            pattern="/^[0-9]{5}+-+[0-9]{3}$/"
                            <label for="cep">Cep</label>
                        </div>
                        <div class="input-field col s4">
                            class="validate"
                            <input id="rua" name="rua" type="text"
                                placeholder="Ex.: Rua. XV de Novembro">
                            <label for="rua">Rua</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="numero" name="numero" type="text" class="validate" maxlength="10"
                                placeholder="Ex.: 000">
                            <label for="numero">Numero</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <input id="cidade" name="cidade" type="text" class="validate" maxlength="60" 
                                placeholder="Ex.: Guarapuava">
                            <label for="cidade">Cidade</label>
                        </div>
                        <div class="input-field col s4">
                        <input id="uf" name="uf" type="text" class="validate" maxlength="40" 
                                placeholder="Ex.: Paraná">
                            <label for="uf">Estado</label>
                        </div>
                    </div>
                </div>-->

                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate <?= $this->getErroCss('email') ?>" value="<?= $this->getPost('email') ?>" maxlength="40"
                            pattern="^([\w\-]+\.)*[\w\- ]+@([\w\- ]+\.)+([\w\-]{2,3})$" placeholder="seu@email.com" >
                        <label for="email">Email</label>
                        <?php $this->incluirVisao('util/formErro.php', ['campo' => 'email']) ?>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input id="senha" name="senha" type="password"  maxlength="40" 
                            placeholder="*************" class="validate <?= $this->getErroCss('senha') ?>">
                        <label for="senha">Senha</label>
                        <?php $this->incluirVisao('util/formErro.php', ['campo' => 'senha']) ?>
                    </div>
                    <div class="input-field col s6">
                        <input id="senha-confirma" name="senha-confirma" type="password" maxlength="40"
                            placeholder="*************" class="validate <?= $this->getErroCss('senha') ?>">
                        <label for="senha-confirmar">Repita a senha</label>
                        <?php $this->incluirVisao('util/formErro.php', ['campo' => 'senha']) ?>
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
    <!--Main fim-->