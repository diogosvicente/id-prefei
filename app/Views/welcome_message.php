
<!doctype html>
<html lang="pt-br">
<head>
    <!-- head -->
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="SIG | Sistema Integrado de Gestão">
<meta name="author" content="Diretoria Geral de Tecnologia da Informação (DGTI)">
<meta name="Access-Control-Allow-Origin" content="*">
<title>ID - PREFEI</title>

<!-- Estilos -->
<link href="<?php echo base_url('public/assets/images/favicon.png'); ?>" rel="icon" type="image/png" /><!-- Bootstrap core CSS -->
<link href="<?php echo base_url('public/assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" /><!-- Bootstrap Icons -->
<link href="<?php echo base_url('public/assets/css/bootstrap-icons.css'); ?>" rel="stylesheet" type="text/css" />
<!-- Folha de estilos padrão do sistema -->
<link href="<?php echo base_url('public/assets/css/style_system.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('public/assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
<!-- Bandeiras dos países (www.freakflagsprite.com) -->
<link href="<?php echo base_url('public/assets/css/freakflags.css'); ?> rel="stylesheet" type="text/css" />
<!-- Regras de estilo para acessibilidade (alto contraste) -->
<link href="<?php echo base_url('public/assets/css/accessibility.css'); ?>" rel="stylesheet" type="text/css" />
<!-- Regras CSS para impressão -->
<link href="<?php echo base_url('public/assets/css/print.css'); ?>" rel="stylesheet" type="text/css" />
<link href="https://sig.uerj.br/assets/vendor/jquery-ui/dist/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<!-- Data Tables -->
<link href="https://sig.uerj.br/assets/vendor/datatables.net-dt/css/dataTables.dataTables.css" rel="stylesheet" type="text/css" />
<!-- Tags Input -->
<link href="https://sig.uerj.br/assets/css/core/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />    <!-- FIM - head -->
    <!-- Estilo da página -->
        <!-- Fim - Estilo da página -->
</head>
<body class="">
<!-- Header -->
<header>
    <div class="navbar">
        <div class="container ">
            <a href="https://sig.uerj.br" class="navbar-brand marca">
                <span class="logo-uerj">
                                   </span>
                                <div class="titulo">
                    <p class="sigla">SIG</p>
                    <p class="nome">Sistema Integrado de Gestão</p>
                </div>
            </a>

            <!-- Menu de itens para melhorar a acessibilidade (tamanho da fonte e contraste) -->
            <div id="menuAcessibilidade">
                <span title="Restaurar fonte" data-bs-placement="bottom" data-bs-toggle="tooltip"
                      class="font-reset">A</span><span class="visually-hidden">Restaurar fonte</span>
                <span title="Diminuir fonte" data-bs-placement="bottom" data-bs-toggle="tooltip"
                      class="font-minus">A-</span><span class="visually-hidden">Diminuir fonte</span>
                <span title="Aumentar fonte" data-bs-placement="bottom" data-bs-toggle="tooltip"
                      class="font-plus">A+</span><span class="visually-hidden">Aumentar fonte</span>
                <span title="Alto contraste" data-bs-placement="bottom" data-bs-toggle="tooltip" class="contrast">
                    <i class="bi-circle-half"></i><span class="visually-hidden">Alto contraste</span>
                </span>
            </div>
            <span id="btnAcessibilidade" title="Menu de acessibilidade">
                <!-- Material Icons Accessible --><!--
                <svg xmlns="http://www.w3.org/2000/svg" height="1.25rem" viewBox="0 0 24 24" width="1.25rem"
                     fill="currentColor"><path d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="4" r="2"/><path
                            d="M19 13v-2c-1.54.02-3.09-.75-4.07-1.83l-1.29-1.43c-.17-.19-.38-.34-.61-.45-.01 0-.01-.01-.02-.01H13c-.35-.2-.75-.3-1.19-.26C10.76 7.11 10 8.04 10 9.09V15c0 1.1.9 2 2 2h5v5h2v-5.5c0-1.1-.9-2-2-2h-3v-3.45c1.29 1.07 3.25 1.94 5 1.95zm-6.17 5c-.41 1.16-1.52 2-2.83 2-1.66 0-3-1.34-3-3 0-1.31.84-2.41 2-2.83V12.1c-2.28.46-4 2.48-4 4.9 0 2.76 2.24 5 5 5 2.42 0 4.44-1.72 4.9-4h-2.07z"/></svg>
                -->
                <!-- Material Icons Accessibility -->
                <svg xmlns="http://www.w3.org/2000/svg" height="1.25rem" viewBox="0 0 24 24" width="1.25rem"
                     fill="currentColor"><path
                            d="M0 0h24v24H0V0z" fill="none"/><path
                            d="M12 2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm9 7h-6v13h-2v-6h-2v6H9V9H3V7h18v2z"/></svg>
                <span class="visually-hidden">Menu de Acessibilidade</span>

            </span>
            <!-- FIM - Menu acessibilidade -->

            <!-- Menu de Idiomas -->
            <!--
            <div id="menuIdiomas" class="dropdown">
                <span title="Menu de idiomas" id="btnMenuIdiomas" data-bs-toggle="dropdown" aria-expanded="false"><i
                            class="bi-globe2"></i><span class="visually-hidden">Menu de Idiomas</span></span>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="btnMenuIdiomas">
                    <li><a class="dropdown-item" href="#"><span class="fflag fflag-BR ff-sm"></span> Português</a></li>
                    <li><a class="dropdown-item" href="#"><span class="fflag fflag-ES ff-sm"></span> Español</a></li>
                    <li><a class="dropdown-item" href="#"><span class="fflag fflag-GB ff-sm"></span> English</a></li>
                </ul>
            </div>
            -->
            <!-- FIM - Menu de Idiomas -->


                            <!-- MENU OFFCANVAS -->
<button class="navbar-toggler" type="button" id="btnMenu" data-bs-toggle="offcanvas"
        data-bs-target="#menuPrincipal" aria-controls="menuPrincipal"><i class="bi-list"></i></button>
<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="menuPrincipal">
    <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <h5 class="offcanvas-title" id="menuLateralLabel">Menu</h5>
    </div>
    <div class="offcanvas-body text-end">
        <nav class="">
    <ul class="">
        <li class=""><a href="https://sig.uerj.br" class="">Página inicial</a></li>
                    <li class=""><a href="https://sig.uerj.br/login" class="">Entrar</a></li>
            <li class=""><a href="https://sig.uerj.br/first_access" class="">Primeiro acesso</a></li>
            <li class=""><a href="https://sig.uerj.br/forgot_password" class="">Esqueci minha senha</a></li>
                <li class=""><a href="https://sig.uerj.br/sobre" class="">Sobre o sistema</a></li>
    </ul>
</nav>    </div>
</div>
<!-- FIM - MENU OFFCANVAS -->

            
        </div>
    </div>
</header>

<div class="container caminho-migalhas">
<!--
    <div class="row">
        <div class="col-12 mt-0 py-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#"><i class="bi bi-house-fill"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Caminho</a></li>
                    <li class="breadcrumb-item"><a href="#">Menu</a></li>
                    <li class="breadcrumb-item"><a href="#">SubMenu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tela</li>
                </ol>
            </nav>
        </div>
    </div>
-->
</div>
<!-- FIM - Header -->

<main id="pageContent" class="container">
    <!-- Conteúdo mensagem -->
        <!-- FIM - Conteúdo mensagem -->

    <!-- Conteúdo da página -->
    
<section>
    <h3 class="page-title">Bem-vindo</h3>
    <div class="row">
        <div class="col">
            O Sistema Integrado de Gestão (SIG) é um sistema de informação que disponibiliza o acesso aos sistemas corporativos e serviços de forma unificada por um login único.
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Exibir Aviso de Privacidade
            </a>

            <div class="collapse" id="collapseExample">
            <fieldset>
                <p>
                    A Universidade do Estado do Rio de Janeiro - UERJ - valoriza a privacidade e a proteção dos dados pessoais de seus alunos e funcionários. Este aviso de privacidade descreve como coletamos, utilizamos e protegemos os dados pessoais no contexto do uso do nosso sistema SIG UERJ.
                </p>
                <p>
                    <strong>1. Dados Pessoais Coletados</strong><br>
                    Para acessar o sistema, solicitamos a confirmação de alguns dados pessoais já presentes em nossas bases de dados:
                </p>
                <ul>
                    <li>Nome</li>
                    <li>Nome da mãe</li>
                    <li>Data de nascimento</li>
                    <li>CPF</li>
                </ul>
                <p>
                    Além disso, para completar o cadastro e permitir a recuperação de senha, solicitamos o fornecimento de um e-mail pessoal.
                </p>
                <p>
                    <strong>2. Finalidade do Tratamento dos Dados</strong><br>
                    Os dados pessoais coletados serão utilizados exclusivamente para as seguintes finalidades:
                </p>
                <ul>
                    <li>Autenticação e acesso ao sistema: Confirmação da identidade do usuário para garantir a segurança do acesso.</li>
                    <li>Recuperação de senha: Utilização do e-mail pessoal e do telefone para contato para procedimentos de recuperação de senha, quando necessário.</li>
                </ul>
                <p>
                    <strong>3. Base Legal para o Tratamento dos Dados</strong><br>
                    O tratamento dos dados pessoais mencionados acima está amparado pelas seguintes bases legais da Lei Geral de Proteção de Dados (LGPD):
                </p>
                <ul>
                    <li>Execução de Políticas Públicas: A coleta e o tratamento de dados pessoais são necessários para a execução de políticas públicas educacionais e administrativas pela UERJ, conforme previsto em leis e regulamentos aplicáveis.</li>
                    <li>Cumprimento de Obrigação Legal: Tratamento de dados para cumprir obrigações legais e regulamentares da UERJ.</li>
                    <li>Legítimo Interesse: Em situações onde a coleta de dados é necessária para a operação eficiente e segura do sistema, como a recuperação de senha, atendendo aos interesses legítimos da universidade sem prejudicar os direitos e liberdades dos titulares dos dados.</li>
                </ul>
                <p>
                    <strong>4. Compartilhamento de Dados</strong><br>
                    Os dados pessoais coletados não serão compartilhados com terceiros, exceto quando houver obrigação legal ou regulatória.
                </p>
                <p>
                    <strong>5. Segurança dos Dados</strong><br>
                    Implementamos medidas técnicas e administrativas adequadas para proteger os dados pessoais contra acesso não autorizado, perda, alteração ou qualquer forma de tratamento inadequado ou ilícito.
                </p>
                <p>
                    <strong>6. Direitos dos Titulares dos Dados</strong><br>
                    Os titulares dos dados pessoais têm o direito de acessar, corrigir, excluir, solicitar a portabilidade, retirar o consentimento e exercer outros direitos previstos na LGPD. Para exercer esses direitos, os titulares podem entrar em contato com a nossa equipe de proteção de dados pelo e-mail dpo@uerj.br.
                </p>
                <p>
                    <strong>7. Alterações neste Aviso de Privacidade</strong><br>
                    Este aviso de privacidade pode ser atualizado periodicamente para refletir mudanças nas nossas práticas de tratamento de dados pessoais. Recomendamos que os usuários revisem este aviso regularmente.
                </p>
                <p>
                    <strong>8. Contato</strong><br>
                    Se você tiver qualquer dúvida sobre este aviso de privacidade ou sobre o tratamento dos seus dados pessoais, entre em contato conosco:
                </p>
                <p>
                    E-mail: atendimento.dgti@uerj.br<br>
                    Telefones: (21)3950-3322 / (21)2334-0340<br>
                    Endereço: Rua São Francisco Xavier, 524, Maracanã, Rio de Janeiro – RJ – Cep 20550-900, Campus Universitário Francisco Negrão de Lima, Pavilhão João Lyra Filho, 1º Andar, Bloco F
                </p>
                <p>
                    Agradecemos pela confiança e estamos à disposição para quaisquer esclarecimentos adicionais.
                </p>
            </fieldset>
            </div>
        </div>
    </div>
</section>

    <!-- FIM - Conteúdo da página -->

    <!--  Mensagens do Sistema  -->
    <div id="divLoading" class="col-12 alert" style="display: none;">
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span class="load">Carregando dados...</span>
    </div>
    <div id="msgErroGeral" class="col-12 alert alert-danger alert-dismissible" role="alert"
         style="display: none;"></div>
    <div id="msgSucessoGeral" class="col-12 alert alert-success alert-dismissible" role="alert"
         style="display: none;"></div>
    <div id="msgAvisoGeral" class="col-12 alert alert-warning alert-dismissible" role="alert"
         style="display: none;"></div>
<!-- FIM - Mensagens do Sistema  -->
</main>

<!-- footer -->
<footer>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-8 col-xs-12">
                SIG v2.0.4 - <small><span class="idTela">
                        IU-SIG-001-01                    </span>                 </small>
                <br>
                <small>Página renderizada em 0.0722 segundos.</small>
            </div>
            <div class="col-4 col-xs-12">
                &copy; 2024-2025.
                <a href="https://www.dgti.uerj.br" target="_blank" data-bs-toggle="tooltip" data-bs-title="Diretoria&#x20;Geral&#x20;de&#x20;Tecnologia&#x20;da&#x20;Informa&#xE7;&#xE3;o">DGTI</a>.
                Todos os direitos reservados
                            </div>
        </div>
    </div>
</footer>
<!-- FIM - footer -->

<!-- Javascripts comuns a todas as páginas -->
<!-- Scripts Javascript comuns a todas as páginas -->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://sig.uerj.br/assets/vendor/html5shiv/dist/html5shiv.min.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/vendor/respond.js/dest/respond.min.js" type="text/javascript"></script><![endif]-->

<script src="https://sig.uerj.br/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/vendor/jquery/dist/jquery.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/vendor/datatables.net/js/dataTables.min.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/vendor/cleave.js/dist/cleave.min.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/vendor/jquery-ui/dist/jquery-ui.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/vendor/tinymce/tinymce.min.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/vendor/tinymce/themes/silver/theme.min.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/config/tinymce/langs/pt_BR.js" type="text/javascript"></script>
<script src="https://sig.uerj.br/assets/js/libs/bootstrap-tagsinput.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/js/libs/jquery-mask/jquery.maskedinput.js" type="text/javascript"></script>
<script src="https://sig.uerj.br/assets/js/core/base.mask.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/js/core/phpjs.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/js/core/accessibility.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/js/core/functions.js" type="text/javascript"></script><script src="https://sig.uerj.br/assets/js/core/functions_layout.js" type="text/javascript"></script>
<script src="https://sig.uerj.br/assets/js/core/autorizacao_rbac_interno/layout.js" type="text/javascript"></script><!-- FIM - Javascripts comuns a todas as páginas -->
<!-- FIM - Javascripts comuns a todas as páginas -->

<!-- Javascript da página -->

<!-- FIM - Javascript da página -->

</body>
</html>