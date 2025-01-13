<?php


/* Template Name: paraopeba - sobre */

get_header();
?>
	<section class="projetos_section pt-2">
		<div class="container">
			<h2>projetos</h2>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<div class="menu_projectos">
						<ul>
							<li class="active"><a href="#"><b>Paraopeba</b></a></li>
							<li><a href="#">Mina do Sapo</a></li>
							<li><a href="#">Cachoeira Grande</a></li>
						</ul>
						<div class="mx-5 px-4">
							<ul class="sub_menu mx-5">
								<li class=""><a href="#">Notícias</a></li>
								<li>

									<div class="dropdown">
										<button onclick="openMenuInt()" class="dropbtn">Reparação <img src="<?php echo get_template_directory_uri() ?>/assets/img/dropdown.svg"></button>
										<div id="myDropdown" class="dropdown-content">
											<ol id="projetos_dropdown">
												<li><a class="dropdown-item" href="#">SOBRE</a></li>
												<li><a class="dropdown-item" href="#">Linha do Tempo</a></li>
												<li><a class="dropdown-item" href="#">Documentos importantes</a></li>
												<li><a class="dropdown-item" href="#">Acordo Judicial</a></li>
												<li><a class="dropdown-item" href="#">Estudos (ERSHRE)</a></li>
												<li><a class="dropdown-item" href="#">Auditoria AECOM</a></li>
											</ol>
										</div>
									</div>



								</li>
								<li><a href="#">Sobre</a></li>
								<li><a href="#">Organograma</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-2"></div>
			</div>
		</div>
	</section>

	<section id="project_contant">
		<section class="projetos_contant">
			<div class="container py-3">
				<div class="row py-5">
					<div class="col-sm-8 mx-auto">
						<h4>A reparação dos danos causados pelo rompimento da barragem da Vale na bacia do Paraopeba não é uma tarefa simples, uma vez que desastres-crime como este causam impactos nas mais diversas áreas da vida da população atingida. Os danos afetam o trabalho e a geração de renda, a moradia, a saúde física e mental, o lazer, a relação com a natureza, a vida em comunidade e os projetos de vida de cada um. Assim, diante de um cenário complexo, são necessárias diversas frentes de atuação para que haja, de fato, uma reparação integral.</h4>
					</div>
				</div>
			</div>
		</section>

		<section id="number_section">
			<div class="container py-5">
				<div class="row">
					<div class="col-8 mx-auto">
						<div class="number_blok pt-2 pb-4 mb-4">
							<h2>1</h2>
							<h5 class="">Investigação dos fatos e conhecimento da verdade sobre o rompimento da barragem;</h5>
						</div>
						<div class="number_blok pt-2 pb-4 mb-4">
							<h2>2</h2>
							<h5 class="">Reabilitação física, psicológica e moral das vítimas, que devem contar com serviços sociais e jurídicos;</h5>
						</div>
						<div class="number_blok pt-2 pb-4 mb-4">
							<h2>3</h2>
							<h5 class="">Restituição das condições de vida anteriores ao desastre-crime, quando possível;</h5>
						</div>
						<div class="number_blok pt-2 pb-4 mb-4">
							<h2>4</h2>
							<h5 class="">Garantias de não repetição, por meio do estabelecimento de medidas que impeçam que a mineradora cometa violação de direitos novamente;</h5>
						</div>
						<div class="number_blok pt-2 pb-4 mb-4">
							<h2>5</h2>
							<h5 class="">Satisfação das vítimas e reestabelecimento de sua dignidade e memória, isto é, as pessoas atingidas devem se sentir satisfeitas com as medidas de reparação implementadas;</h5>
						</div>
						<div class="number_blok pt-2 pb-4 mb-4">
							<h2>6</h2>
							<h5 class="">Indenização, por meio do pagamento em dinheiro daquilo que não pode ser restituído.</h5>
						</div>
						<p class="pt-4 pb-5">Todo esse o processo de reparação possui dimensões coletivas e individuais. Aqui nesta seção, reunimos todas as informações referentes à ação coletiva de reparação, que desde o dia 4 de fevereiro de 2021 é pautada principalmente pelo acordo judicial assinado entre o Estado de Minas Gerais, a Vale e as Instituições de Justiça. Confira!</p>

					</div>
				</div>
				</div>
		</section>






	</section>

<?php
get_footer();
