<?php 

	include_once 'includes/conecta.php';
	include_once 'includes/common.inc.php';

	$programas = listar($conexao);
 ?>
 	<ul class="sidebar-nav">
 		<?php foreach($programas as $programa) : ?>
 			<li><a href="#<?=$programa['ID_PROGRAMA']?>"><?= $programa['NOME']?></a></li>
 		<?php endforeach ?>
 	</ul>