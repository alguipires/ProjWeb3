<?php if ($this->temErro($campo)): ?>
    <span class="red-text text-darken-2"><?= $this->getErro($campo) ?></span>
<?php endif ?>