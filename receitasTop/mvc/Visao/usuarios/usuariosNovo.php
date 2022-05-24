/*pagina de criação de novo usuario*/

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
            <form id="form-curriculo" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="input-name" type="text" class="validate" maxlength="80"
                            pattern="^(?![ ])(?!.*[ ]{2})((?:e|da|do|das|dos|de|d'|D'|la|las|el|los)\s*?|(?:[A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð'][^\s]*\s*?)(?!.*[ ]$))+$">
                        <label for="input-name">Nome Completo</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <label for="">Gênero</label>
                        <p>
                            <label for="input-gender-masculine">
                                <input id="input-gender-masculine" name="gender-group" type="radio" value="M" />
                                <span>Masculino</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input id="input-gender-feminine" name="gender-group" type="radio" value="F" />
                                <span>Feminino</span>
                            </label>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">cake</i>
                        <input id="input-birthdate" type="text" class="datepicker" placeholder="Ex.: 01/01/1990">
                        <label for="input-birthdate">Data de nascimento</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">doc</i>
                        <input id="input-cpf" type="number" class="validate" maxlength="15"
                            pattern="/^[0-9]{3}|[0-9]{2}[.][0-9]{3}[.][0-9]{3}[-][0-9]{2}$"
                            placeholder="Ex.: 000.000.000-00">
                        <label for="input-cpf">Cpf</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">phone</i>
                        <input id="input-telefone" type="tel" class="validate" maxlength="15"
                            pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" placeholder="Ex.: (00) 00000-0000">
                        <label for="input-telefone">Telefone</label>
                    </div>
                </div>

                <div class="row">
                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <input id="input-cep" type="tel" class="validate" maxlength="15"
                                pattern="/^[0-9]{5}+-+[0-9]{3}$/" placeholder="Ex.: 85010-100">
                            <label for="input-cep">Cep</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="input-street" type="text" class="validate" maxlength="40" pattern=""
                                placeholder="Ex.: Rua. XV de Novembro">
                            <label for="input-street">Rua</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="input-number-home" type="text" class="validate" maxlength="10" pattern=""
                                placeholder="Ex.: 000">
                            <label for="input-number-home">Numero</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="input-city" type="text" class="validate" maxlength="60" pattern=""
                                placeholder="Ex.: Guarapuava">
                            <label for="input-city">Cidade</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="input-state" type="text" class="validate" maxlength="40" pattern=""
                                placeholder="Ex.: Paraná">
                            <label for="input-state">Estado</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="input-country" type="text" class="validate" maxlength="40" pattern=""
                                placeholder="Ex.: Brasil">
                            <label for="input-country">Pais</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="input-email" type="email" class="validate" maxlength="40"
                            pattern="^([\w\-]+\.)*[\w\- ]+@([\w\- ]+\.)+([\w\-]{2,3})$" placeholder="seu@email.com"
                            required>
                        <label for="input-email">Email</label>
                        <span class="helper-text" data-error="Favor digitar e-mail valido"
                            data-success="Correto">ajuda</span>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input id="input-pasword" type="password" class="validate" maxlength="40" pattern=""
                            placeholder="*************" required>
                        <label for="input-pasword">Senha</label>
                        <span class="helper-text" data-error="Favor digitar uma senha mais forte"
                            data-success="Correto">ajuda</span>
                    </div>
                    <div class="input-field col s6">
                        <input id="input-pasword-confir" type="password" class="validate" maxlength="40" pattern=""
                            placeholder="*************" required>
                        <label for="input-pasword-confir">Repita a senha</label>
                        <span class="helper-text" data-error="Favor digitar uma senha mais forte"
                            data-success="Correto"></span>
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