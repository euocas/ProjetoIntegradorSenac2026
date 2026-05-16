<?php


$host = "localhost";
$dbname = "empreiteira";
$usuario = "root";
$pass = "";

try{

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$usuario,$pass);
$nome = "adm";
$email = "admin@empreiteira.com.br";
$senha = "Adm123";
$is_admin = 1;

$senhaCripto = password_hash($senha, PASSWORD_DEFAULT);

$sql = "Insert into Usuarios (nome,email,senha,is_admin) 
values(?,?,?,?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([$nome,$email,$senhaCripto,$is_admin]);

echo "Adm cadastrado com sucesso!";
echo $nome;
echo $email;
echo $senhaCripto; 
echo $is_admin; 
echo $senha;
exit;
}
catch(PDOexception $e){
    echo "erro ao cadastrar adm:". $e->getMessage();
    exit;
}
?>