<?php
    include '../views/header.php';
?>

<br><br>
<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Cadastro de Pizzas</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Nome">Nome:</label>  
            <div class="col-md-6">
                <input id="Nome" name="Nome" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="tipo">Tipo:</label>
            <div class="col-md-4">
                <div class="radio">
                    <label for="tipo-0">
                        <input type="radio" name="tipo" id="tipo-0" value="1" checked="checked">
                        Doce
                    </label>
                </div>
                <div class="radio">
                    <label for="tipo-1">
                        <input type="radio" name="tipo" id="tipo-1" value="2">
                        Salgada
                    </label>
                </div>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="preco">Preço:</label>  
            <div class="col-md-6">
                <input id="preco" name="preco" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>

    </fieldset>
</form>