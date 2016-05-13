<?php
require 'views/header.php';
require 'config.php';

class cadastrar
{

    public $redirect = "/Banco/views/cadastro.php";

    public function redirect()
    {
        header("location:$this->redirect");
        exit;
    }

    public function cadastrarPizzas()
    {
        global $DB;
        
        $_SESSION['nomePizza'] = $_POST["nome_pizza"];
        $_SESSION['tipoPizza'] = $_POST["tipo_pizza"];
        $_SESSION['precoPizza'] = $_POST["preco_pizza"];
        

        if (!isset($_POST["nome_pizza"]) OR empty($_POST["nome_pizza"])) 
        {
            $_SESSION["erro"] = "O campo Nome está vazio";
            $this->redirect();
        }

        $nomePizza = $_POST["nome_pizza"];

        if (!isset($_POST["tipo_pizza"])OR empty($_POST["tipo_pizza"]))
        {
            $_SESSION["erro"] = "O campo Tipo da Pizza está vazio";
            $this->redirect();
        }

        $tipoPizza = $_POST["tipo_pizza"];

        if (!isset($_POST["preco_pizza"])OR empty($_POST["preco_pizza"]))
        {
            $_SESSION["erro"] = "O campo Preço da Pizza está vazio";
            $this->redirect();
        }

        $valor = $_POST["preco_pizza"];
        
        //falta editar para baixo
        

        $query = pg_query($DB, "SELECT max(id) FROM item; ");
        $maxId = pg_fetch_row($query)[0];
        $maxId = $maxId + 1;

        $query = pg_query($DB, "INSERT INTO item ( id, item_descricao, descricao_comp, reserva, descto)  VALUES ($maxId, '$nome', '$descricao', '$valor', '$promocao')");

        if (!$query)
        {
            echo "A query não foi executada ";
        }
        else
        {
            echo "<html>
                    <body>
                        <p>Formulário enviado com sucesso!</p>
                    </body>
                  </html>";
        }
        
        unset($_SESSION['nome']);
        unset($_SESSION['descricao']);
        unset($_SESSION['valor']);
        unset($_SESSION['promocao']);
        
        
    }
}

$service = new cadastrar();
$item = $service->cadastrarItens();
?>