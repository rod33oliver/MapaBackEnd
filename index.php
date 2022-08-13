<?php
	require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
			<header class="main_tutorial_header">
				<h1><a name="tutorial">As Marmitas mais Vendidas</h1></a>
				<p>Escolha a que mais combine com o seu Gosto!</p>
			</header>
			<?php
			if(is_array($tutoriais) && !empty($tutoriais)){
				foreach($tutoriais as $key => $value){
			?>
			<article>
				<a href="page2.php?id=<?=$value['id'];?>">
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
			}
		}else{
			echo "Sem Tutoriais no momento!!!";
		}
			?>
				</section>
		 <article class="main_suport">
            <div class="main_suport_content">
                <header>                    
                    <h1>Cadastre-se para receber nossas novidades</h1>
                    <p>Informe seu nome e e-mail</p>
                </header>
                <form action="page1.php" method="POST">
                    <input type="text" name = "nome" placeholder="Seu nome">
                    <input type="email" name = "email" placeholder="Seu melhor e-mail">
                    <button>OK</button>
                </form>
            </div>
        </article>
        </main>

	<footer>
	<p>Aluno: Rodrigo de Oliveira / RA - 1906016-5</p>
	</footer>
</body>
</html>