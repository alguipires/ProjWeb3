   <!--PAGINA DE VITRINE E RELATORIO DE BUSCA-->


   <div class="row">
     <div class="card purple darken-1">
       <div class="card-content white-text">
         <h6 class="center-align">Filtrar receitas por Ingrediente e Data</h3>
           <ul class="inline">
             <li>
               <div class="input-field">
                 <input placeholder="Sua pesquisa" id="searchInput" type="text">
               </div>
             </li>
             <li>
               <a href="#"><i class="material-icons left">search</i></a>
             </li>
             <li>
               <label>
                 <input name="group1" type="radio" checked />
                 <span>Decresente</span>
               </label>
             </li>
             <li>
               <label>
                 <input name="group1" type="radio" />
                 <span>Cresente</span>
               </label>
             </li>
           </ul>
       </div>
     </div>
   </div>
   <!--Fim Filtro de pesquisa receitas-->

   <!--Inicio vitrine conteudo-->
   <!--Vitrine cards no pc 2 linhas com 3 cards e mobile 3 linahs com 2 cards -->
   <!--NECESSAIO FAZER PAGINAÇÃO CRIANDO UMA ROW A CADA 3 ITENS-->
   <div id="vitrine" class="row">
     <?php foreach ($receitas as $receita) : ?>
       <div class="col s6 m4">
         <div class="card">
           <a href="<?= URL_RAIZ . 'receitas/' . $receita->getId() ?>">
             <div class="card-image div-tam-img-vitrine">
               <img class="img-tam-img-vitrine" src="<?= URL_IMG . $receita->getFotos() ?>">
               <span class="card-title"><?= $receita->getTitulo() ?></span>
               <a href="<?= URL_RAIZ . 'receitas/' . $receita->getId() ?>" class="btn-floating halfway-fab waves-effect waves-light purple"><i class="material-icons">comment</i></a>
             </div>
           </a>
           <div class="card-content">
             <p>Aprenda a fazer essa deliciosa receita, clique e descubra!</p>
           </div>
         </div>
       </div>
     <?php endforeach ?>
   </div>

   <!--inicio paginação-->
   <!--CRIAR JS PARA COLOCAR EFEITOS NOS BOTÕES DA PAGINAÇÃO-->
   <div class="row">
     <div class="col s12 m12">
       <ul class="pagination">
         <?php if ($pagina > 1) : ?>
           <li class="waves-effect"><a href="<?= URL_RAIZ . '?p=' . ($pagina - 1) ?>"><i class="material-icons">chevron_left</i></a></li>
         <?php endif ?>
         <!--FAZER  FOR PARA CRIAR OS ICONES ATE 5 DA ULTIMA PAGINA COM O VAR ultimaPagina-->
         <!--<li class="waves-effect"><a href="">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>-->


         <?php if ($pagina < $ultimaPagina) : ?>
           <li class="waves-effect"><a href="<?= URL_RAIZ . '?p=' . ($pagina + 1) ?>"><i class="material-icons">chevron_right</i></a></li>
         <?php endif ?>
       </ul>
     </div>
   </div>
   <!--fim paginação-->


   <div class="section"></div>
   <div class="section"></div>