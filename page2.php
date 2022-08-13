<?php
	include("dados.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>

.main_tutorial img{
    width: 20%;
}

.main_tutorial p{
    margin: 0px 0;
	font-size: 1.6em;
	text-align: justify;
}

.main_tutorial h3{
    font-size: 1.0em;
}

.main_tutorial article{
    flex-basis: 90%;
    margin-bottom: 10px;
}

</style>
</head>
<body>
<header>
		<nav>
      <div class="logo">
			<img src="img/logoDona.png" alt="logo" width='100' height='100'/>
		</div>
			<ul>
				<li><a href="#Marmitas" title="Marmitas" alt="Marmitas">Marmitas</a></li>
				<li><a href="#Pedidos" title="Pedidos" alt="Pedidos">Pedidos</a></li>
				<li><a href="#Contato" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>	
		<section class="main_tutorial">
			<?php
				if(isset($_GET['id']) && !empty($_GET['id'])){
					$id = $_GET['id'];
					foreach($tutoriais as $key => $value){
						if($value['id'] == $id){
							$data = new DateTime($value['data']);
					?>
						<header class="main_tutorial_header">
							<h1><?=$value['titulo'];?></h1>
							<h3>Publicado em: <?=$data->format('d/m/Y');?></h3>
						</header>
						<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>">
						<p><?=$value['descricao'];?></p>			
						<?php
						}
					}
				}else{
					echo "Não existe";
				}
			?>
		</section>
        <section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Veja Outra Opções</h1>
			</header>
			<?php
			$id = 0;
				foreach($tutoriais as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><a href="page2.php?id=<?=$value['id'];?>"><?=$value['titulo'];?></a></h2>
	    	</article>
			<?php
                    }
				}
			?>
		</section>
      <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Cadastre-se para receber nossas novidades</h1>
                    <p>Informe seu nome e e-mail</p>
                </header>
                <form>
                     <input type="text" name = "nome" placeholder="Seu nome">
                    <input type="email" name = "email" placeholder="Seu melhor e-mail">
                    <button>OK</button>
                </form>
            </div>
        </article>
        </main>

	<footer>
	<p> Aluno: Rodrigo de Oliveira / RA - 1906016-5</p>
	</footer>
</body>
</html>