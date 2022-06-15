<!--CODIGO PARA CARREGAR UMA PAGINA HTML, NO CASO UMA TAG SPAN-->

<?php if ($this->temErro($campo)): ?>
    <span class="helper-text red-text" data-error="wrong" ><?= $this->getErro($campo) ?></span>
<?php endif ?>