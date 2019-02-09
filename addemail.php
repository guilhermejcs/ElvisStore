<?php
$dbc = mysqli_connect('localhost', 'id7371191_elmer', 'theking', 'id7371191_elvis_store')
or die('Erro ao se conectar ao servidor MySQL server');

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];

$query = "INSERT INTO email_list(first_name, last_name, email) " .
"VALUES('$first_name', '$last_name', '$email')";
mysqli_query($dbc, $query)
or die('Erro ao acessar o banco de dados');
echo 'Cliente adicionado';
mysqli_close($dbc);
