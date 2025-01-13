<?php


/* Template Name: Esta. transp. */

get_header();
?>


	<!-- =============================
				 Contant-start
		 ============================= -->
	<section class="quem_section pt-4">
		<div class="container">
			<h2>quem somos</h2>
			<div class="row">
				<div class="col-sm-2"><h3>quem somos</h3></div>
				<div class="col-sm-8">
					<div class="menu_quem">
						<ul class="d-flex justify-content-between">
							<li><a href="#">A Instituição</a></li>
							<li><a href="#">Parceiros</a></li>
							<li><a href="#"><b>Estatuto</b></a></li>
							<li><a href="#">Transparência</a></li>
							<li><a href="#">Contato</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</section>

	<section id="parceiros" class="container">
		<section class="parceiros_doc">
			<div class="container">
				<div class="row pt-5">
					<div class="col-sm-6 mx-auto">
						<a href="#">Estatuto</a>

						<div class="text-center mt-4">
							<a href="" class="comum">ACESSE AQUI O ESTATUTO SOCIAL DO NACAB</a>
						</div>
					</div>
				</div>

				<div class="row pt-5">
					<div class="col-sm-8 mx-auto">
						<a href="#">Transparência</a>
						<p class="pt-5 pb-4">Zelando pelos princípios de integridade e transparência, o Núcleo de Assessoria às Comunidades Atingidas por Barragens (Nacab) torna públicos:</p>
						<button>RPCC - Regulamento de Princípios de Compras e Contratações</button>
						<ul class="mt-4">
							<li>
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/doc_icone.png">
								<h4 class="pt-2"><a href="#">março/2023</a></h4>
								<h4>[vigente]</h4>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/doc_icone.png">
								<h4 class="pt-2"><a href="#">Abril/2020</a></h4>
								<h4>[Revogado]</h4>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/doc_icone.png">
								<h4 class="pt-2"><a href="#">agosto/2020</a></h4>
								<h4>[Revogado]</h4>
							</li>
						</ul>
						<div class="mt-5 mb-5">
							<div class="dropdown pb-5">
								<button onclick="openAtos()" class="dropbutton">ATOS / ano <img src="<?php echo get_template_directory_uri() ?>/assets/img/dropdown.svg"></button>
								<div id="myDropdown" class="dropdown-content">
									<ol id="atos_dropdown">
										<li><a class="dropdown-item" href="#">ATOS 2020</a></li>
										<li><a class="dropdown-item" href="#">ATOS 2021</a></li>
										<li><a class="dropdown-item" href="#">ATOS 2022</a></li>
										<li><a class="dropdown-item" href="#">ATOS 2023</a></li>
										<li><a class="dropdown-item" href="#">ATOS 2024</a></li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="parceiros_doc">
			<div class="container">
				<div class="row mx-5">
					<div class="col-sm-12 px-5">
						<a href="#">Relatórios de atividades ATI Paraopeba</a>
						<div class="row parceiros_owl mt-4 mb-5">
							<div class="col-sm-3"></div>
							<div class="col-sm-6 mt-3 mb-5">
								<div class="owl-carousel owl-theme estatuto-sl">
									<div class="item">
										<div class="section_a">
											<div class="parceiros_slide">
												<img src="<?php echo get_template_directory_uri() ?>/assets/img/parceiros_slide.jpg">
											</div>
										</div>
									</div>
									<div class="item">
										<div class="section_a">
											<div class="parceiros_slide">
												<img src="<?php echo get_template_directory_uri() ?>/assets/img/parceiros_slide.jpg">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="affected_dams mb-5">
			<div class="container pb-5">
				<div class="row mx-5">
					<div class="col-sm-2 px-5"></div>
					<div class="col-sm-8 px-5">
						<div class="dams">
							<h4>Núcleo de Assessoria às Comunidades Atingidas por Barragens</h4>
							<p>R. Santo Antônio, Nº 30, Apto 2, Bairro João Braz - Viçosa/MG | CEP 36576-208</p>
							<ul>
								<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/mail.svg"> contato@nacab.org.br</a></li>
								<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/telefone.svg"> (31) 99560-7244</a></li>
							</ul>
						</div>
						<div class="dams mt-2 pt-1">
							<h5>ATI Paraopeba Nacab</h5>
							<ul>
								<li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/whatsapp.svg"> Atendimento pessoas atingidas (Chip Dúvidas) - (31) 99596-9065</a></li>
							</ul>
						</div>
						<div class="dams mt-2 pt-1">
							<h5>Escritório Esmeraldas</h5>
							<p>R. Senador Melo Viana, nº 158, 2º andar, Centro</p>
							<p>Esmeraldas/MG | CEP 32800-098</p>
						</div>
						<div class="dams mt-2 pt-1">
							<h5>Escritório Pará de Minas</h5>
							<p>Rua Minas Gerais, Nº 413, Bairro São José</p>
							<p>Pará de Minas/MG | CEP: 35660-116</p>
						</div>
						<div class="dams mt-2 pt-1">
							<h5>Escritório Paraopeba</h5>
							<p>Av. Dom Cirilo, Nº 609, Centro</p>
							<p>Paraopeba/MG | CEP: 35774-000</p>
						</div>
						<div class="dams border_remove mt-2 pt-1">
							<h5>Escritório Belo Horizonte</h5>
							<p>R. Bueno Brandão, Nº 351, Bairro Santa Tereza</p>
							<p>Belo Horizonte/MG | CEP 31010-060</p>
							<p class="ps-5">(31) 3245-8059</p>
						</div>
						<div class="dams border_remove my-5 pt-1 pb-5">
							<h4>ATI 39</h4>
							<p>R. Capitão Miguel Safe, Nº 180, Centro</p>
							<p>Conceição do Mato Dentro/MG | CEP 35860-000</p>
						</div>
					</div>
					<div class="col-sm-2 px-5"></div>
				</div>
			</div>
		</section>


	</section>

<?php

get_footer();


