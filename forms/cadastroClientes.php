<?php
    include '../views/header.php';
?>

<br><br>
<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Cadastro de Clientes</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="nome">Nome:</label>  
            <div class="col-md-6">
                <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cpf">CPF:</label>  
            <div class="col-md-6">
                <input id="cpf" name="cpf" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email:</label>  
            <div class="col-md-6">
                <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="telefone">Telefone:</label>  
            <div class="col-md-6">
                <input id="telefone" name="telefone" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="endereco">Endereço:</label>  
            <div class="col-md-6">
                <input id="endereco" name="endereco" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="numero">Número:</label>  
            <div class="col-md-2">
                <input id="numero" name="numero" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="complemento">Complemento:</label>  
            <div class="col-md-4">
                <input id="complemento" name="complemento" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="bairro">Bairro:</label>  
            <div class="col-md-6">
                <input id="bairro" name="bairro" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cidade">Cidade:</label>  
            <div class="col-md-4">
                <input id="cidade" name="cidade" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="estado">Estado:</label>
            <div class="col-md-2">
                <select id="estado" name="estado" class="form-control">
                    <option value="01">AC</option>
                    <option value="02">AL</option>
                    <option value="03">AP</option>
                    <option value="04">AM</option>
                    <option value="05">BA</option>
                    <option value="06">CE</option>
                    <option value="07">DF</option>
                    <option value="08">ES</option>
                    <option value="09">GO</option>
                    <option value="10">MA</option>
                    <option value="11">MT</option>
                    <option value="12">MS</option>
                    <option value="13">MG</option>
                    <option value="14">PA</option>
                    <option value="15">PB</option>
                    <option value="16">PR</option>
                    <option value="17">PE</option>
                    <option value="18">PI</option>
                    <option value="19">RJ</option>
                    <option value="20">RN</option>
                    <option value="21">RS</option>
                    <option value="22">RO</option>
                    <option value="23">RR</option>
                    <option value="24">SC</option>
                    <option value="25">SP</option>
                    <option value="26">SE</option>
                    <option value="27">TO</option>
                </select>
            </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="pais">País:</label>
            <div class="col-md-4">
                <div class="radio">
                    <label for="pais-0">
                        <input type="radio" name="pais" id="pais-0" value="1" checked="checked">
                        Brasil
                    </label>
                </div>
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
