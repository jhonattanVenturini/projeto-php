<?php

$titulo = "Upload de Arquivos";
include "./ASSETS/logo.png";

?>
<div class="row">
    <div class="col-md-4">
        <form action="./ASSETS" method="POST" enctype="multipart/form-data">
            <label>Selecione a Imagem </label>
            <input type="file" name="imagem" accept="image/*">
            <button></button>
        </form>
    </div>
</div>