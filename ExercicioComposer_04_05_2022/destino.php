<?php
    require 'header.php';

    use Claudsonm\CepPromise\CepPromise;

    require 'vendor/autoload.php';
?>  

    <div class="inicio">
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Sobre</h1>
         </div>
    </div>

<?php
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
    $dataEHora = date('d-m-Y h:i:s', time());
    $cep = filter_input(INPUT_POST, "cep", FILTER_SANITIZE_SPECIAL_CHARS);
    $address = CepPromise::fetch($cep);

    $texto = "O nome é: $nome 
O email é: $email
A mensagem é: $mensagem".PHP_EOL;

    echo "O nome é: $nome<br>O email é: $email<br>A mensagem é: $mensagem<br>A data e hora atual é: $dataEHora<br>";

    echo "O CEP É: ";
    echo  $address->zipCode."<br>";
    echo  $address->street."<br>";
    echo "Bairro: ".$address->district."<br>";
    echo "Cidade: ".$address->city."<br>";
    echo "Estado: ".$address->state."<br>";

    $arquivo = fopen("destino.txt", "w");

    $arquivo = fwrite($arquivo, "$texto$dataEHora");

    require 'footer.php';
?>