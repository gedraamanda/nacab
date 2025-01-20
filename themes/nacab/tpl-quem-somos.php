<?php


/* Template Name: Quem somos */

get_header();

?>
    <section class="quem_section pt-4">
        <div class="container">
            <h2>quem somos</h2>
            <div class="row">
<!--                <div class="col-sm-2"><h3>quem somos</h3></div>-->
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="menu_quem">
                        <ul class="d-flex justify-content-between">
                            <li><a href="#"><b>A Instituição</b></a></li>
                            <li><a href="#">Parceiros</a></li>
                            <li><a href="#">Estatuto</a></li>
                            <li><a href="#">Transparência</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <div class="banner">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner-nacab-a.jpg">
        </div>
    </section>
    <section id="quem_post">
        <section id="banner_contant">
            <div class="container">
                <a class="m_top" href="#">A Instituição</a>
                <div class="pt-4">
                    <div class="row banner_contant pt-4 pb-5">
                        <div class="col-sm-6 pe-5 banner_a">
                            <h5 class="pe-4">O Núcleo de Assessoria às Comunidades Atingidas por Barragens (Nacab) é uma Associação Civil de direito privado sem fins lucrativos, sediada no munícipio de Viçosa (MG), com uma longa trajetória atuando em favor de comunidades atingidas por barragens e atividades de mineração. </h5>
                        </div>
                        <div class="col-sm-6 ps-5 banner_b">
                            <h6 class="pb-4 mb-5">O Nacab traz em seu modo de ação o diálogo, bem como o rigor e a qualidade técnica de seu trabalho, e o compromisso claro e inconteste com a defesa dos direitos das comunidades atingidas, buscando seu empoderamento para a participação, seja nas várias etapas de processos de licenciamento ambiental, seja em processos de negociação para reparação de danos.</h6>
                            <a href="#">leia mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="missao_section my-5">
            <div class="container">
                <div class="pt-4">
                    <a href="#">Missão</a>
                    <div class="row">
                        <div class="col-sm-6 missao_section_a pe-0">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/FT_BRUMADINHO.jpg">
                        </div>
                        <div class="col-sm-6 pe-5">
                            <h4>Defender e aprofundar os direitos individuais, sociais e difusos, como instrumento de reforço da solidariedade social, da saúde, dos direitos humanos, do patrimônio cultural, histórico e artístico.</h4>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="Valores_section py-4">
            <div class="container">
                <a href="#">Valores</a>
                <div class="pt-4">
                    <ul class="pt-5">
                        <li>Responsabilidade social</li>
                        <li>Integridade e transparência</li>
                        <li>Valorização e respeito pela vida </li>
                        <li>Respeito ao Meio Ambiente</li>
                        <li>Pensar no coletivo</li>
                        <li>realizar sonhos compartilhados</li>
                        <li>Ética e transparência no que falamos e vivemos</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="missao_section my-5">
            <div class="container">
                <a href="#">Visão</a>
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="visao">Focado na missão, ser uma instituição de referência em todo o território nacional, promovendo a defesa do meio ambiente, soluções economicamente justas e viáveis e o direito humano à dignidade e a vida.</h4>
                    </div>
                    <div class="col-sm-6 missao_section_a ps-0">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/FT_BRUMADINHO_a.jpg">
                    </div>
                </div>
            </div>
        </section>
        <section class="Valores_section pt-3 pb-5">
            <div class="container">
                <a href="#">Diretoria</a>
                <div class="pt-4">
                    <ul class="pt-5">
                        <li><a href="#">Lauro Fráguas</a> <span>(Presidente)</span></li>
                        <li><a href="#">Marluce Abduane</a> <span>(Diretora Financeira)</span></li>
                        <li><a href="#">Marilia Fontes</a> <span>(Secretaria Executiva)</span></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>

<?php

get_footer();


