<header class="my_header <?php echo !is_home() ? 'mb-3' : ''  ?>">
	<div class="container">
        <?php if(is_home()) { ?>
            <div class="row m-0">
                <div class="col-sm-2"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/Logo_Nacab_Principal.png"></a></div>
                <div class="col-sm-8 menu_section">
                    <nav class="navbar justify-content-between">
                        <div class="menu">
                            <ul class="d-flex justify-content-between">
                                <li class="menu_a ps-0"><a href="#">quem somos</a></li>
                                <li class="menu_b"><a href="#">comunicação</a></li>
                                <li class="menu_c"><a href="#">PROJETOS</a></li>
                                <li class="menu_d me-0"><a href="#">oportunidades</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-sm-2 toggal">
                    <ul>
                        <li><button class="toggal_btn"><img class="open" src="<?php echo get_template_directory_uri() ?>/assets/img/toggal_icon.png"><img class="close" src="<?php echo get_template_directory_uri() ?>/assets/img/menu_close.svg"></button><span class="search_icon"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/search_icon.png"></a></span></li>
                        <!--                 <li>

						<div class="d-block">
							  <input type="search" id="search" class="form-control position-absolute shadow-sm" placeholder="Search">
							  <a class="btn btn-light me-2" role="button" id="btn-search" href="#">🔎</a>
							  <a class="btn btn-primary" role="button" href="#">Login</a>
							</div>

										</li> -->
                    </ul>
                </div>
            </div>
        <?php } else { ?>
            <div class="row m-0">
                <div class="col-sm-2"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/Logo_other_page.svg"></a></div>
                <div class="col-sm-8 menu_section">
                    <!-- <nav class="navbar">
						<div class="menu">
						<ul>
							<li class="menu_a"><a href="#">quem somos</a></li>
							<li class="menu_b"><a href="#">comunicação</a></li>
							<li class="menu_c"><a href="#">PROJETOS</a></li>
							<li class="menu_d"><a href="#">oportunidades</a></li>
						</ul>
						</div>
					</nav> -->
                </div>
                <div class="col-sm-2 toggal">
                    <ul>
                        <li><button class="toggal_btn"><img class="open" src="<?php echo get_template_directory_uri() ?>/assets/img/toggal_icon.png"><img class="close" src="<?php echo get_template_directory_uri() ?>/assets/img/menu_close.svg"></button><span class="search_icon"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/search_icon.png"></a></span></li>
                    </ul>
                </div>
            </div>
        <?php } ?>


	</div>
</header>

<div class="menu-hide py-5">
    <a href="" class="close"></a>
    <div class="container">
        <div class="row m-0 toggal_section" id="">

            <div class="col-sm-9 offset-md-1">
                <div class="toggal_menu">
                    <ul class="d-flex justify-content-between">
                        <li class="one bd">
                            <p class="ref"><a href="">quem somos</a></p>
                            <ol class="toggal_a">
                                <li><a href="#">A Instituição</a></li>
                                <li><a href="#">Parceiros</a></li>
                                <li><a href="#">Governança</a></li>
                                <li><a href="#">Transparência</a></li>
                                <li><a href="#">Contato</a></li>
                            </ol>
                        </li>
                        <li class="two bd">
                            <p class="ref"><a href="">comunicação</a></p>
                            <ol class="toggal_b">
                                <li class="px-0"><a href="#">Notícias institucionais</a></li>
                                <li><a href="#">Imprensa</a></li>
                                <li><a href="#">Serviços prestados</a></li>
                                <li><a href="#">Galerias</a></li>
                                <li><a href="#">Videos</a></li>
                            </ol>
                        </li>
                        <li class="three bd">
                            <p class="ref"><a href="">projetos</a></p>
                            <ol class="toggal_c">
                                <li><a href="#">Paraopeba</a></li>
                                <li><a href="#">Médio Espinhaço</a></li>
                                <li><a href="#">Cachoeira Grande</a></li>
                            </ol>
                        </li>
                        <li class="four bd">
                            <p class="ref"><a href="">oportunidades</a></p>
                            <ol class="toggal_d">
                                <li><a href="#">Atos convocatórios</a></li>
                                <li><a href="#">Editais</a></li>
                            </ol>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-1 ">
                <ul class="toggal_social">
                    <li>
                        <ol class="social-media">
                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/mail.svg"></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/insta.svg"></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/fb.svg"></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/youtube.svg"></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/linkedin.svg"></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/fl.svg"></a></li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>