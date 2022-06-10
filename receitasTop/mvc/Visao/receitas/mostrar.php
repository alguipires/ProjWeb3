<!--PAGINA DE APRESENTAÇÃO DE UMA RECEITA-->
<!-- meu script -->
<script type="text/javascript" src="<?= URL_JS . 'receitas.js' ?>"></script>


<div class="container">

    <!--Titulo-->
    <div class="row">
        <div class="col s12 m12">
            <h3 class="purple-text text-darken-2" id="titulo-receita"><?= $receita->getTitulo() ?></h3>
        </div>
    </div>

    <!--Carousel/ coluna direita-->
    <div id="picturesProd" class="row">
        <!--Linha carousel de fotos-->
        <div class="col s6 m6">
            <div class="carousel carousel-slider">
                <a class="carousel-item" href="#one!"><img src="assets/resources/img/vitrine/lasanha-ex.jpg"></a>
                <a class="carousel-item" href="#two!"><img src="assets/resources/img/vitrine/lasanha-ex.jpg"></a>
                <a class="carousel-item" href="#three!"><img src="assets/resources/img/vitrine/lasanha-ex.jpg"></a>
                <a class="carousel-item" href="#four!"><img src="assets/resources/img/vitrine/lasanha-ex.jpg"></a>
                <a class="carousel-item" href="#five!"><img src="assets/resources/img/vitrine/lasanha-ex.jpg"></a>
            </div>
        </div>

        <!--coluna com navegação/ancora, criador, data, tempo preparo, etc-->
        <div class="col s6 m6">
            <div class="row">
                <div class="chip"><img src="assets/resources/img/vitrine/lasanha-ex.jpg" alt="Contact Person"><?= $nomeUsuario ?></div>
                <div class="chip"><i class="material-icons">schedule</i><?= $receita->getTempoPreparo() . ' ' ?> min</div>
                <div class="chip"><i class="material-icons">publish</i><?= $receita->getDataPublicacao() ?></div>
            </div>
            <div class="row">
                <ul class="section table-of-contents">
                    <li>
                        <a href="#picturesProd" class="active">Fotos</a>
                    </li>
                    <li>
                        <a href="#ingredients" class="">Ingredientes</a>
                    </li>
                    <li>
                        <a href="#howMake" class="">Como fazer</a>
                    </li>
                    <li>
                        <a href="#comments" class="">Comentarios</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!--INGREDIENTES CAMPO HIDDEN PARA FAZER CAMBIS-->
    <div class="row">
        <div class="chips chips-placeholder input-field col s12" value="" name="ingrediente1" id="ingrediente1" class="validate <?= $this->getErroCss('ingrediente') ?>"></div>
        <input type="hidden" id="ingrediente" name="ingrediente" value="<? $receita->getIngrediente() ?>">
    </div>

    <script>
        var aux = document.querySelector("#ingrediente");
        auxb = JSON.parse($("#ingrediente").val());
        auxc = JSON.stringify(aux);
        console.log('query logg ' + aux);
        console.log('json logg ' + auxb);
        console.log('json logg c ' + auxc);


        /*var chipsData = JSON.parse($("#ingrediente").val());
        console.log('chipsss linha 62 ' + chipsData);

        $('.chips-placeholder').chips({
            placeholder: 'Enter a tag',
            secondaryPlaceholder: '+Tag',
            data: chipsData,
            onChipAdd: (event, chip) => {
                var chipsData = M.Chips.getInstance($('.chips')).chipsData;
                var chipsDataJson = JSON.stringify(chipsData);
                $("#ingrediente").val(chipsDataJson);
            },
            onChipSelect: () => {

            },
            onChipDelete: () => {
                var chipsData = M.Chips.getInstance($('.chips')).chipsData;
                var chipsDataJson = JSON.stringify(chipsData);
                $("#ingrediente").val(chipsDataJson);
            }
        });*/
    </script>


    <!--Linha collapsible Ingredientes, etc-->
    <div class="row">
        <div class="col s12 m12">
            <ul class="collapsible popout">
                <li>
                    <div id="ingredients" class="collapsible-header"><i class="material-icons">filter_drama</i>Ingredientes</div>
                    <div class="collapsible-body">
                        <ul class="collection">
                            <li class="collection-item"><i class="material-icons">fiber_manual_record</i></li>
                            <li class="collection-item"><i class="material-icons">fiber_manual_record</i>Paprica
                            </li>
                            <li class="collection-item"><i class="material-icons">fiber_manual_record</i>Oregano
                            </li>
                            <li class="collection-item"><i class="material-icons">fiber_manual_record</i>Molho de
                                tomate</li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div id="howMake" class="collapsible-header"><i class="material-icons">filter_drama</i>Como
                        Fazer</div>
                    <div class="collapsible-body">
                        <span><?= $receita->getComoFazer() ?></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--Comentarios avatar contant-->
    <div class="row" id="comments">
        <div class="col s12 m12">
            <ul class="collection">
                <li class="collection-item avatar">
                    <img src="assets/resources/img/vitrine/lasanha-ex.jpg" alt="Postado Por teste" class="circle">
                    <span class="title"><strong>Deliciosaa!</strong></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, voluptatum, possimus
                        maxime consequatur soluta dolor eaque animi mollitia, tempora fuga ea quae? Laudantium
                        labore, quis earum autem non quae tenetur.</p>
                    <!--<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>-->
                </li>
                <li class="collection-item avatar">
                    <img src="assets/resources/img/vitrine/lasanha-ex.jpg" alt="Postado Por teste" class="circle">
                    <span class="title"><strong>Super rapido e ficou otimo!</strong></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, voluptatum, possimus
                        maxime consequatur soluta dolor eaque animi mollitia, tempora fuga ea quae? Laudantium
                        labore, quis earum autem non quae tenetur.</p>
                    <!--<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>-->
                </li>
                <li class="collection-item avatar">
                    <img src="assets/resources/img/vitrine/lasanha-ex.jpg" alt="Postado Por teste" class="circle">
                    <span class="title"><strong>Ameii</strong></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, voluptatum, possimus
                        maxime consequatur soluta dolor eaque animi mollitia, tempora fuga ea quae? Laudantium
                        labore, quis earum autem non quae tenetur.</p>
                    <!--<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>-->
                </li>
            </ul>
        </div>

        <!--Botão comentario, mostrar inputs ao clicar e se logado-->
        <div id="divComments" class="col s12 m12">
            <a class="waves-effect waves-light btn"><i class="material-icons left">comment</i>Comentar</a>

            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textTitle" class="materialize-textarea"></textarea>
                        <label for="textTitle">Titulo</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textComment" class="materialize-textarea"></textarea>
                        <label for="textComment">Comentario</label>
                    </div>
                </div>

                <button type="submit" id="btn-submit" class="btn waves-effect blue darken-4 white-text">Postar<i class="material-icons right">send</i></button>
            </form>
        </div>

    </div>

    <!--Paginação ou e botão voltar-->

</div>