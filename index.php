<form action="" method="POST">
	<input type="text" name="pesquisa">
	<input type="submit" name="pesquisar" value='pesquisar'>
</form>



<?php
$path = "C:\\xampp\htdocs\img\\";
$diretorio = dir($path);
 

 //puxar os arquivos da pasta

	$arr = array();
while($arquivo = $diretorio -> read()){
// echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";

	$arr[] = $arquivo;

}
$diretorio -> close();

// echo "ANTES: <br/>";
// var_dump($arr);

if ($_POST['pesquisa'] == NULL or $_POST['pesquisa'] == "") {
	$input = "zzzzzz";
} else {
	$input = preg_quote($_POST['pesquisa'], '~'); 

}


$arr = preg_grep('~' . $input . '~', $arr);

// echo "<br/>";
// echo "DEPOIS: <br/>";
// var_dump($arr);


foreach ($arr as $key => $value) {
	echo $var[$key];
	echo "<img src=" . $value . ">";
}

?>


