<?php
//Включение отладочной информации
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', 1);
//Конец включения отладочной информации
require_once __DIR__.'/../settings.php';
require_once 'password.php';
check_password();

$startdate=isset($_GET['startdate'])?DateTime::createFromFormat('d.m.y', $_GET['startdate']):new DateTime();
$enddate=isset($_GET['enddate'])?DateTime::createFromFormat('d.m.y', $_GET['enddate']):new DateTime();

$date_str='';
if (isset($_GET['startdate'])&& isset($_GET['enddate'])) {
    $startstr = $_GET['startdate'];
    $endstr = $_GET['enddate'];
    $date_str="&startdate={$startstr}&enddate={$endstr}";
}
?>
<!doctype html>
<html lang="PT-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>blog</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet" />
    <!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/nalika-icon.css" />
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css" />
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css" />
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css" />
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="/admin/index.php?password=<?=$_GET['password']?><?=$date_str!==''?$date_str:''?>"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><img src="img/favicon.png" alt="" style="width:50px"/></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="https://t.me/yellow_web"><img src="img/notification/4.jpg" alt="" /></a>
                    <?php include "version.php" ?>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                  <ul class="metismenu" id="menu1">
                        <li class="active">

                            <a class="has-arrow" href="index.php?password=<?=$_GET['password']?><?=$date_str!==''?$date_str:''?>" aria-expanded="false"><i class="icon nalika-bar-chart icon-wrap"></i> <span class="mini-click-non">Traffic</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Стата" href="statistics.php?password=<?=$_GET['password']?><?=$date_str!==''?$date_str:''?>"><span class="mini-sub-pro">Statistics</span></a></li>
                                <li><a title="Разрешённый" href="index.php?password=<?=$_GET['password']?><?=$date_str!==''?$date_str:''?>"><span class="mini-sub-pro">Allowed</span></a></li>
                                <li><a title="Лиды" href="index.php?filter=leads&password=<?=$_GET['password']?><?=$date_str!==''?$date_str:''?>"><span class="mini-sub-pro">Leads</span></a></li>
                                <li><a title="Заблокированный" href="index.php?filter=blocked&password=<?=$_GET['password']?><?=$date_str!==''?$date_str:''?>"><span class="mini-sub-pro">Blocked</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="modifysettings.php?password=<?=$_GET['password']?><?=$date_str!==''?$date_str:''?>" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Settings</span></a>
                        </li>
                  </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>

                                    <div class="col-lg-11 col-md-1 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                             <li class="nav-item">
                            <a class="nav-link" href="" onClick="location.reload()">Refresh</a>
                            </li>
                                                </i>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <a name="top"></a>

    <form action="savesettings.php?password=<?=$log_password?>" method="post">
        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <hr>
<h4>#1 Configuração do white</h4>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Selecione o método: </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$white_action==='folder'?'checked':''?> value="folder" name="white.action" onclick="(document.getElementById('b_2').style.display='block'); (document.getElementById('b_3').style.display='none'); (document.getElementById('b_4').style.display='none'); (document.getElementById('b_5').style.display='none')"> White-page local da pasta </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$white_action==='redirect'?'checked':''?> value="redirect" name="white.action" onclick="(document.getElementById('b_2').style.display='none'); (document.getElementById('b_3').style.display='block'); (document.getElementById('b_4').style.display='none'); (document.getElementById('b_5').style.display='none')"> Redirecionamento (Não recomendado) </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$white_action==='curl'?'checked':''?> value="curl" name="white.action" onclick="(document.getElementById('b_2').style.display='none'); (document.getElementById('b_3').style.display='none'); (document.getElementById('b_4').style.display='block'); (document.getElementById('b_5').style.display='none')">  Carregamento de site externo via curl </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$white_action==='error'?'checked':''?> value="error" name="white.action" onclick="(document.getElementById('b_2').style.display='none'); (document.getElementById('b_3').style.display='none'); (document.getElementById('b_4').style.display='none'); (document.getElementById('b_5').style.display='block')">  Retorno do código HTTP <small>(por exemplo, erro 404 ou apenas 200)</small> </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="b_2" style="display:<?=$white_action==='folder'?'block':'none'?>;">
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Pasta onde o arquivo está: </label>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="input-group custom-go-button">
                    <input type="text" class="form-control" placeholder="white" name="white.folder.names" value="<?=implode(',',$white_folder_names)?>">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="b_3" style="display:<?=$white_action==='redirect'?'block':'none'?>;">
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Endereço para redirecionamento: </label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="https://ya.ru" name="white.redirect.urls" value="<?=implode(',',$white_redirect_urls)?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Selecione o código de redirecionamento: </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$white_redirect_type==='301'?'checked':''?> value="301" name="white.redirect.type"> 301 </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$white_redirect_type==='302'?'checked':''?> value="302" name="white.redirect.type"> 302 </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$white_redirect_type==='303'?'checked':''?> value="303" name="white.redirect.type">  303 </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$white_redirect_type==='307'?'checked':''?> value="307" name="white.redirect.type">  307 </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="b_4" style="display:<?=$white_action==='curl'?'block':'none'?>;">
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Endereço para carregamento via curl:</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="https://ya.ru" name="white.curl.urls" value="<?=implode(',',$white_curl_urls)?>">
            </div>
        </div>
    </div>
</div>
</div>

<div id="b_5" style="display:<?=$white_action==='error'?'block':'none'?>;">
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Código HTTP para retorno em vez do arquivo:</label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="404" name="white.error.codes" value="<?=implode(',',$white_error_codes)?>">
            </div>
        </div>
    </div>
</div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Exibir arquivo individual para cada domínio?</label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$white_use_domain_specific===false?'checked':''?> value="false" name="white.domainfilter.use" onclick="(document.getElementById('b_6').style.display='none')"> Não </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$white_use_domain_specific===true?'checked':''?> value="true" name="white.domainfilter.use" onclick="(document.getElementById('b_6').style.display='block')"> Sim, mostrar. </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="b_6" style="display:<?=$white_use_domain_specific===true?'block':'none'?>;">
<div id="white_domainspecific">
<?php for($j=0;$j<count($white_domain_specific);$j++){ ?>
<div class="form-group-inner white">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <label class="login2 pull-left pull-left-pro">Domínio => Método: Redirecionamento</label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
             <div class="input-group">
                <input type="text" class="form-control" placeholder="xxx.yyy.com" value="<?=$white_domain_specific[$j]["name"]?>" name="white.domainfilter.domains[<?=$j?>][name]">
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
             <p>=></p>  
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="site:white" value="<?=$white_domain_specific[$j]["action"]?>" name="white.domainfilter.domains[<?=$j?>][action]">
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            <a href="javascript:void(0)" class="remove-domain-item btn btn-sm btn-primary">Remover</a>
        </div>
    </div>
</div>
<?php } ?>
</div>
<a id="add-domain-item" class="btn btn-sm btn-primary" href="javascript:;">Adicionar</a>
</div>

<div class="form-group-inner">
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <label class="login2 pull-left pull-left-pro">Utilizar verificação em JS? 
            <small>
            Se a verificação em JS estiver ativada, o usuário sempre é direcionado primeiro para o white, e somente se a verificação for aprovada, ele verá o black.
            </small> 
        </label>
    </div>
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
        <div class="bt-df-checkbox pull-left">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="i-checks pull-left">
                        <label>
                                <input type="radio" <?=$use_js_checks===false?'checked="checked"':''?> value="false" name="white.jschecks.enabled" onclick="(document.getElementById('jscheckssettings').style.display = 'none')"> Não, nunca usar. </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="i-checks pull-left">
                        <label>
                                <input type="radio" value="true" <?=$use_js_checks===true?'checked="checked"':''?> name="white.jschecks.enabled" onclick="(document.getElementById('jscheckssettings').style.display = 'block')">  Sim, Usar. </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="jscheckssettings" style="display:<?=$use_js_checks===true?'block':'none'?>;">
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Tempo de teste em milissegundos: </label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="10000" name="white.jschecks.timeout" value="<?=$js_timeout?>">
            </div>
        </div>
    </div>
</div>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">O que verificar?</label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="checkbox" name="white.jschecks.events[]" value="mousemove" <?=in_array('mousemove',$js_checks)?'checked':''?>> Movimentos do mouse </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="checkbox" name="white.jschecks.events[]" value="keydown" <?=in_array('keydown',$js_checks)?'checked':''?>>Pressionamentos de teclas</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="checkbox" name="white.jschecks.events[]" value="scroll" <?=in_array('scroll',$js_checks)?'checked':''?>> Rolagem </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="checkbox" name="white.jschecks.events[]" value="devicemotion" <?=in_array('devicemotion',$js_checks)?'checked':''?>> Sensor de movimento (apenas para Android)</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="checkbox" name="white.jschecks.events[]" value="deviceorientation" <?=in_array('deviceorientation',$js_checks)?'checked':''?>> Sensor de orientação espacial (apenas para Android)</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="checkbox" name="white.jschecks.events[]" value="audiocontext" <?=in_array('audiocontext',$js_checks)?'checked':''?>> Presença de mecanismo de áudio no navegador</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input id="tzcheck" type="checkbox" name="white.jschecks.events[]" value="timezone" <?=in_array('timezone',$js_checks)?'checked':''?> onchange="(document.getElementById('jscheckstz').style.display = this.checked?'block':'none')"> Fuso horário</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="jscheckstz" class="form-group-inner" style="display:<?=in_array('timezone',$js_checks)?'block':'none'?>;">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Fuso horário mínimo permitido</label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="-3" name="white.jschecks.tzstart" value="<?=$js_tzstart?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Fuso horário mínimo permitido</label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="3" name="white.jschecks.tzend" value="<?=$js_tzend?>">
            </div>
        </div>
    </div>
</div>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Mascarar o código da verificação em JS? </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" value="true" <?=$js_obfuscate===true?'checked="checked"':''?> name="white.jschecks.obfuscate"> Mascarar </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" value="false" <?=$js_obfuscate===false?'checked="checked"':''?> name="white.jschecks.obfuscate"> Não, não mascarar </label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<br>
<hr>
<h4>#2 Configuração do black (bloco de conteúdo oculto)</h4>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Escolha o método de carregamento das páginas intermediárias: </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_preland_action==='none'?'checked':''?> value="none" name="black.prelanding.action" onclick="(document.getElementById('b_8').style.display='none')"> Não utilizar pre-landing </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_preland_action==='folder'?'checked':''?> value="folder" name="black.prelanding.action" onclick="(document.getElementById('b_8').style.display='block')"> Pre-landing local da pasta </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="b_8" style="display:<?=$black_preland_action==='folder'?'block':'none'?>;">
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-left pull-left-pro">Pastas onde os pre-landings estão armazenados</label>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="input-group custom-go-button">
                    <input type="text" class="form-control" placeholder="p1,p2" name="black.prelanding.folders" value="<?=implode(',',$black_preland_folder_names)?>">
                </div>
            </div>
        </div>
    </div>

</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Selecione o método de carregamento dos landings: </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_land_action==='folder'?'checked':''?> value="folder" name="black.landing.action" onclick="(document.getElementById('b_landings_redirect').style.display='none'); (document.getElementById('b_landings_folder').style.display='block')"> Landing local da pasta</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_land_action==='redirect'?'checked':''?> value="redirect" name="black.landing.action" onclick="(document.getElementById('b_landings_redirect').style.display='block'); (document.getElementById('b_landings_folder').style.display='none')"> Redirecionamento </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="b_landings_folder" style="display:<?=$black_land_action==='folder'?'block':'none'?>;">
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Pastas onde os landings estão armazenados</label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="l1,l2" name="black.landing.folder.names" value="<?=implode(',',$black_land_folder_names)?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Usar página de agradecimento:</label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_land_use_custom_thankyou_page===true?'checked':''?> value="true" name="black.landing.folder.customthankyoupage.use" onclick="(document.getElementById('ctpage').style.display = 'block'); (document.getElementById('pppage').style.display = 'none')"> Customizada, do lado do c-l-o-a-k-e-r</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_land_use_custom_thankyou_page===false?'checked':''?> value="false" name="black.landing.folder.customthankyoupage.use" onclick="(document.getElementById('ctpage').style.display = 'none'); (document.getElementById('pppage').style.display = 'block')"> Обычную, на стороне ПП </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="ctpage" class="form-group-inner" style="display:<?=$black_land_use_custom_thankyou_page===true?'block':'none'?>">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">O idioma em que mostrar a página de agradecimento Cloaker: </label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="EN" name="black.landing.folder.customthankyoupage.language" value="<?=$black_land_thankyou_page_language?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro"> O caminho da raiz do landing page até o script de envio de dados do formulário:</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="order.php" name="black.landing.folder.conversions.script" value="<?=$black_land_conversion_script?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Usar scripts adicionais na página de agradecimento: </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$thankyou_upsell===true?'checked':''?> value="true" name="black.landing.folder.customthankyoupage.upsell.use" onclick="document.getElementById('thankupsell').style.display = 'block'"> Sim</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$thankyou_upsell===false?'checked':''?> value="false" name="black.landing.folder.customthankyoupage.upsell.use" onclick="document.getElementById('thankupsell').style.display = 'none'">Não</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="thankupsell" class="form-group-inner" style="display:<?=$thankyou_upsell===true?'block':'none'?>">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Заголовок апсейла:</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="This is a header" name="black.landing.folder.customthankyoupage.upsell.header" value="<?=$thankyou_upsell_header?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Текст апсейла:</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="This is a text" name="black.landing.folder.customthankyoupage.upsell.text" value="<?=$thankyou_upsell_text?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Полный адрес ленSim апсейла:</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="https://ya.ru" name="black.landing.folder.customthankyoupage.upsell.url" value="<?=$thankyou_upsell_url?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Имя папки с картинками для витрины <small>папка должна быть созSimна в thankyou/upsell</small></label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="img" name="black.landing.folder.customthankyoupage.upsell.imgdir" value="<?=$thankyou_upsell_imgdir?>">
            </div>
        </div>
    </div>
</div>
<div id="pppage" class="form-group-inner" style="display:<?=$black_land_use_custom_thankyou_page===false?'block':'none'?>">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Добавить в обработчик кнопки Заказать на ленде подсчёт конверсий кло? </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_land_log_conversions_on_button_click===false?'checked':''?> value="false" name="black.landing.folder.conversions.logonbuttonclick"> Não <small>(конверсия будет считаться на КАСТОМНОЙ стр.Спасибо)</small> </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_land_log_conversions_on_button_click===true?'checked':''?> value="true" name="black.landing.folder.conversions.logonbuttonclick"> Sim </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">ОткуSim отстукивать в Facebook конверсию? </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$fb_add_button_pixel===false?'checked':''?> value="false" name="pixels.fb.conversion.fireonbutton"> Со страницы спасибо <small>(если не используете кастомную Спасибо, впишите код пикселя!)</small></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$fb_add_button_pixel===true?'checked':''?> value="true" name="pixels.fb.conversion.fireonbutton"> С кнопки на ленде </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">ОткуSim отстукивать в TikTok конверсию? </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$tt_add_button_pixel===false?'checked':''?> value="false" name="pixels.tt.conversion.fireonbutton"> Со страницы спасибо <small>(если не используете кастомную Спасибо, впишите код пикселя!)</small></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$tt_add_button_pixel===true?'checked':''?> value="true" name="pixels.tt.conversion.fireonbutton"> С кнопки на ленде </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="b_landings_redirect" style="display:<?=$black_land_action==='redirect'?'block':'none'?>;">
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Endereços para redirecionamento:<small>(Pode ser VÁRIOS separados por vírgula)</small> </label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="https://ya.ru,https://google.com" name="black.landing.redirect.urls" value="<?=implode(',',$black_land_redirect_urls)?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Selecione o código de redirecionamento: </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_land_redirect_type==='301'?'checked':''?> value="301" name="black.landing.redirect.type"> 301 </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_land_redirect_type==='302'?'checked':''?> value="302" name="black.landing.redirect.type"> 302 </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_land_redirect_type==='303'?'checked':''?> value="303" name="black.landing.redirect.type">  303 </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_land_redirect_type==='307'?'checked':''?> value="307" name="black.landing.redirect.type">  307 </label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Ação ao conectar o cloaker via Javascript (para construtores). <small>Se um redirecionamento for escolhido como black, sempre haverá redirecionamento do construtor. Se o black for local, as únicas opções são: substituição ou iframe.</small> </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_jsconnect_action==='redirect'?'checked':''?> value="redirect" name="black.jsconnect"> Redirecionamento </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_jsconnect_action==='replace'?'checked':''?> value="replace" name="black.jsconnect"> Substituição </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$black_jsconnect_action==='iframe'?'checked':''?> value="iframe" name="black.jsconnect"> IFrame </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr>
<h4>#3 Configuração de métricas e pixels</h4>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Идентификатор Google Tag Manager: </label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder=" " name="pixels.gtm.id" value="<?=$gtm_id?>">
            </div>
        </div>
    </div>
</div>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Идентификатор Яндекс.Метрики: </label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="" name="pixels.ya.id" value="<?=$ya_id?>">
            </div>
        </div>
    </div>
</div>

<h5>#3.1 Configuração do pixel do Facebook</h5>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Имя параметра в котором лежит ID пикселя Facebook: </label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="px" name="pixels.fb.subname" value="<?=$fbpixel_subname?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Добавлять ли на проклы-ленды событие PageView? </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$fb_use_pageview===false?'checked':''?> value="false" name="pixels.fb.pageview"> Não </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$fb_use_pageview===true?'checked':''?> value="true" name="pixels.fb.pageview"> Sim, добавлять </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Добавлять событие ViewContent после просмотра страницы в течении указанного ниже времени? </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$fb_use_viewcontent===false?'checked':''?> value="false" name="pixels.fb.viewcontent.use" onclick="(document.getElementById('b_8-2').style.display='none')"> Não </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$fb_use_viewcontent===true?'checked':''?> value="true" name="pixels.fb.viewcontent.use" onclick="(document.getElementById('b_8-2').style.display='block')"> Sim, добавлять </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="b_8-2" style="display:<?=$fb_use_viewcontent===true?'block':'none'?>;">
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Время в сек после которго отправляется ViewContent:<br><small>если 0, то событие не будет вызвано</small> </label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="30" name="pixels.fb.viewcontent.time" value="<?=$fb_view_content_time?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Процент проскролливания страницы, до вызова события ViewContent:<br><small>если 0, то событие не будет вызвано</small> </label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="75" name="pixels.fb.viewcontent.percent" value="<?=$fb_view_content_percent?>">
            </div>
        </div>
    </div>
</div>
</div>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Какое событие будем использовать для конверсии в Facebook? <small>Например: Lead или Purchase</small></label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="Lead" name="pixels.fb.conversion.event" value="<?=$fb_thankyou_event?>">
            </div>
        </div>
    </div>
</div>
<h5>#3.2 Configuração do pixel do TikTok</h5>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Имя параметра в котором лежит ID пикселя TikTok: </label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="tpx" name="pixels.tt.subname" value="<?=$ttpixel_subname?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Добавлять ли на проклы-ленды событие PageView? </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$tt_use_pageview===false?'checked':''?> value="false" name="pixels.tt.pageview"> Não </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$tt_use_pageview===true?'checked':''?> value="true" name="pixels.tt.pageview"> Sim, добавлять </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Добавлять событие ViewContent после просмотра страницы в течении указанного ниже времени? </label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$tt_use_viewcontent===false?'checked':''?> value="false" name="pixels.tt.viewcontent.use" onclick="(document.getElementById('tt_8-2').style.display='none')"> Não </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$tt_use_viewcontent===true?'checked':''?> value="true" name="pixels.tt.viewcontent.use" onclick="(document.getElementById('tt_8-2').style.display='block')"> Sim, добавлять </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tt_8-2" style="display:<?=$tt_use_viewcontent===true?'block':'none'?>;">
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Время в сек после которго отправляется ViewContent:<br><small>если 0, то событие не будет вызвано</small> </label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="30" name="pixels.tt.viewcontent.time" value="<?=$tt_view_content_time?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Процент проскролливания страницы, до вызова события ViewContent:<br><small>если 0, то событие не будет вызвано</small> </label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="75" name="pixels.tt.viewcontent.percent" value="<?=$tt_view_content_percent?>">
            </div>
        </div>
    </div>
</div>
</div>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Какое событие будем использовать для конверсии в TikTok? <small>Например: CompletePayment или AddPaymentInfo</small></label>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="Lead" name="pixels.tt.conversion.event" value="<?=$tt_thankyou_event?>">
            </div>
        </div>
    </div>
</div>
<br>
<hr>
<h4>#4 Configuração do Sistema de Distribuição de Tráfego</h4>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Modo do Filtro do Tráfego:</label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$tds_mode==='on'?'checked':''?> value="on" name="tds.mode"> Normal </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$tds_mode==='full'?'checked':''?> value="full" name="tds.mode"> Enviar todos para o white.</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$tds_mode==='off'?'checked':''?> value="off" name="tds.mode"> Enviar todos para o black (Cloaker desativado).</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Enviar o mesmo usuário para páginas personalizadas (pré-landers e landings)?</label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$save_user_flow===false?'checked':''?> value="false" name="tds.saveuserflow"> Não. </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$save_user_flow===true?'checked':''?> value="true" name="tds.saveuserflow"> Sim, enviar. </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<hr>
<h4>#5 Configuração de filtros</h4>
<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Lista de sistemas operacionais permitidos:</label>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" name="tds.filters.allowed.os" class="form-control" placeholder="Android,iOS,Windows,OS X" value="<?=implode(',',$os_white)?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Lista de países permitidos: <small>(WW ou valor vazio para todo o mundo)</small></label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" name="tds.filters.allowed.countries" class="form-control" placeholder="RU,UA" value="<?=implode(',',$country_white)?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Lista de idiomas permitidos: <small>(any ou valor vazio para todos os idiomas)</small></label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" name="tds.filters.allowed.languages" class="form-control" placeholder="en,ru,de" value="<?=implode(',',$lang_white)?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <label class="login2 pull-left pull-left-pro">Nome do arquivo de base adicional com endereços IP proibidos <small>o arquivo deve estar na pasta "bases"</small></label>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" name="tds.filters.blocked.ips.filename" class="form-control" placeholder="blackbase.txt" value="<?=$ip_black_filename?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Base adicional de IPs proibidos no formato CIDR?</label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$ip_black_cidr===false?'checked':''?> value="false" name="tds.filters.blocked.ips.cidrformat"> Não </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$ip_black_cidr===true?'checked':''?> value="true" name="tds.filters.blocked.ips.cidrformat"> Sim </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Palavras separadas por vírgula, cuja presença no endereço de referência (no link pelo qual chegaram) fará com que o usuário seja enviado para a white-page</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" name="tds.filters.blocked.tokens" class="form-control" placeholder="" value="<?=implode(',',$tokens_black)?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Palavras separadas por vírgula que devem estar presentes no endereço. Se faltar alguma delas, a white-page será exibida.</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" name="tds.filters.allowed.inurl" class="form-control" placeholder="" value="<?=implode(',',$url_should_contain)?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Palavras separadas por vírgula, cuja presença no UserAgent fará com que o usuário seja enviado para a white-page.</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" class="form-control" placeholder="facebook,Facebot,curl,gce-spider,yandex.com/bots" name="tds.filters.blocked.useragents" value="<?=implode(',',$ua_black)?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Bloqueio por provedor (ISP), por exemplo: facebook, google</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" name="tds.filters.blocked.isps" class="form-control" placeholder="facebook,google,yandex,amazon,azure,digitalocean" value="<?=implode(',',$isp_black)?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Enviar todas as solicitações sem referer para a white-page?</label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$block_without_referer===false?'checked':''?> value="false" name="tds.filters.blocked.referer.empty"> Não </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$block_without_referer===true?'checked':''?> value="true" name="tds.filters.blocked.referer.empty"> Sim </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Palavras separadas por vírgula, cuja presença no referer fará com que o usuário seja enviado para a white-page.</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="input-group custom-go-button">
                <input type="text" name="tds.filters.blocked.referer.stopwords" class="form-control" placeholder="adheart" value="<?=implode(',',$referer_stopwords)?>">
            </div>
        </div>
    </div>
</div>

<div class="form-group-inner">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <label class="login2 pull-left pull-left-pro">Enviar todos que usam VPN e Tor para a white-page?</label>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$block_vpnandtor===false?'checked':''?> value="false" name="tds.filters.blocked.vpntor"> Não </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                                    <input type="radio" <?=$block_vpnandtor===true?'checked':''?> value="true" name="tds.filters.blocked.vpntor"> Sim </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr>
<h4>#6 Configuração de scripts adicionais</h4>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<label class="login2 pull-left pull-left-pro">O que fazer com o botão Voltar?</label>
</div>
<div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
<div class="bt-df-checkbox pull-left">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="i-checks pull-left">
                <label>
                        <input type="radio" <?=$back_button_action==='off'?'checked':''?> value="off" name="scripts.back.action" onclick="(document.getElementById('b_9').style.display='none')"> Deixar como padrão. </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="i-checks pull-left">
                <label>
                        <input type="radio" <?=$back_button_action==='disable'?'checked':''?> value="disable" name="scripts.back.action" onclick="(document.getElementById('b_9').style.display='none')"> Desativar (deixa de ser clicável).</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="i-checks pull-left">
                <label>
                        <input type="radio" <?=$back_button_action==='replace'?'checked':''?> value="replace" name="scripts.back.action" onclick="(document.getElementById('b_9').style.display='block')"> Atribuir a ela um redirecionamento para o URL (Back Redirect).</label>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div id="b_9" style="display:<?=$back_button_action==='replace'?'block':'none'?>;">
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">Para onde direcionar ao clicar em Voltar?</label>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<div class="input-group custom-go-button">
    <input type="text" name="scripts.back.value" class="form-control" placeholder="http://ya.ru?pixel={px}&subid={subid}&prelanding={prelanding}" value="<?=$replace_back_address?>">
</div>
</div>
</div>
</div>
</div>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<label class="login2 pull-left pull-left-pro">Proibir a seleção e salvamento de texto com Ctrl+S, desabilitar o menu contextual?</label>
</div>
<div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
<div class="bt-df-checkbox pull-left">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="i-checks pull-left">
                <label>
                        <input type="radio" <?=$disable_text_copy===false?'checked':''?> value="false" name="scripts.disabletextcopy"> Não </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="i-checks pull-left">
                <label>
                        <input type="radio" <?=$disable_text_copy===true?'checked':''?> value="true" name="scripts.disabletextcopy"> Sim, Proibir </label>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<label class="login2 pull-left pull-left-pro">Abrir links para o landing em uma nova janela, substituindo o pré-lander na janela antiga pelo URL indicado abaixo?</label>
</div>
<div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
<div class="bt-df-checkbox pull-left">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="i-checks pull-left">
                <label>
                        <input type="radio" <?=$replace_prelanding===false?'checked':''?> value="false" name="scripts.prelandingreplace.use" onclick="(document.getElementById('b_10').style.display='none')"> Não </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="i-checks pull-left">
                <label>
                        <input type="radio" <?=$replace_prelanding===true?'checked':''?> value="true" name="scripts.prelandingreplace.use" onclick="(document.getElementById('b_10').style.display='block')"> Sim, Abrir Links.  </label>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div id="b_10" style="display:<?=$replace_prelanding===true?'block':'none'?>;">
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">URL que será aberto na janela antiga:</label>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<div class="input-group custom-go-button">
    <input type="text" name="scripts.prelandingreplace.url" class="form-control" placeholder="http://ya.ru?pixel={px}&subid={subid}&prelanding={prelanding}" value="<?=$replace_prelanding_address?>">
</div>
</div>
</div>
</div>
</div>


<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<label class="login2 pull-left pull-left-pro">Abrir a página de agradecimento do landing em uma nova janela, substituindo o landing na janela antiga pelo URL indicado abaixo?</label>
</div>
<div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
<div class="bt-df-checkbox pull-left">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="i-checks pull-left">
                <label>
                        <input type="radio" <?=$replace_landing===false?'checked':''?> value="false" name="scripts.landingreplace.use" onclick="(document.getElementById('b_1010').style.display='none')"> Não. </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="i-checks pull-left">
                <label>
                        <input type="radio" <?=$replace_landing===true?'checked':''?> value="true" name="scripts.landingreplace.use" onclick="(document.getElementById('b_1010').style.display='block')"> Sim, abrir,  </label>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div id="b_1010" style="display:<?=$replace_landing===true?'block':'none'?>;">
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">URL que será aberto na janela antiga:</label>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<div class="input-group custom-go-button">
    <input type="text" name="scripts.landingreplace.url" class="form-control" placeholder="http://ya.ru?pixel={px}&subid={subid}&prelanding={prelanding}" value="<?=$replace_landing_address?>">
</div>
</div>
</div>
</div>
</div>

<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<label class="login2 pull-left pull-left-pro">Uma máscara será adicionada ao campo de entrada de telefone NO LANDING conforme indicado abaixo.</label>
</div>
<div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
<div class="bt-df-checkbox pull-left">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="i-checks pull-left">
                <label>
                        <input type="radio" <?=$black_land_use_phone_mask===false?'checked':''?> value="false" name="scripts.phonemask.use" onclick="(document.getElementById('b_11').style.display='none')"> Não </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="i-checks pull-left">
                <label>
                        <input type="radio" <?=$black_land_use_phone_mask===true?'checked':''?> value="true" name="scripts.phonemask.use" onclick="(document.getElementById('b_11').style.display='block')"> Sim, добавить маску </label>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<div id="b_11" style="display:<?=$black_land_use_phone_mask===true?'block':'none'?>;">
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">Укажите маску:</label>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="input-group custom-go-button">
<input type="text" name="scripts.phonemask.mask" class="form-control" placeholder="+421 999 999 999" value="<?=$black_land_phone_mask?>">
</div>
</div>
</div>
</div>
</div>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<label class="login2 pull-left pull-left-pro">Включить скрипт Comebacker?</label>
</div>
<div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
<div class="bt-df-checkbox pull-left">

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="i-checks pull-left">
            <label>
                    <input type="radio" <?=$comebacker===false?'checked':''?> value="false" name="scripts.comebacker"> Não </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="i-checks pull-left">
            <label>
                    <input type="radio" <?=$comebacker===true?'checked':''?> value="true" name="scripts.comebacker"> Sim</label>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<label class="login2 pull-left pull-left-pro">Включить скрипт Callbacker?</label>
</div>
<div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
<div class="bt-df-checkbox pull-left">

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="i-checks pull-left">
            <label>
                    <input type="radio" <?=$callbacker===false?'checked':''?> value="false" name="scripts.callbacker"> Não </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="i-checks pull-left">
            <label>
                    <input type="radio" <?=$callbacker===true?'checked':''?> value="true" name="scripts.callbacker"> Sim</label>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<label class="login2 pull-left pull-left-pro">Включить скрипт, показывающий всплывающие сообщения о том, что кто-то приобрёл товар?</label>
</div>
<div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
<div class="bt-df-checkbox pull-left">

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="i-checks pull-left">
            <label>
                    <input type="radio" <?=$addedtocart===false?'checked':''?> value="false" name="scripts.addedtocart"> Não </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="i-checks pull-left">
            <label>
                    <input type="radio" <?=$addedtocart===true?'checked':''?> value="true" name="scripts.addedtocart"> Sim</label>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<label class="login2 pull-left pull-left-pro">Использовать отложенную загрузку (lazy loading) для картинок на преленSimх/ленSimх?</label>
</div>
<div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
<div class="bt-df-checkbox pull-left">

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="i-checks pull-left">
            <label>
                    <input type="radio" <?=$images_lazy_load===false?'checked':''?> value="false" name="scripts.imageslazyload"> Não </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="i-checks pull-left">
            <label>
                    <input type="radio" <?=$images_lazy_load===true?'checked':''?> value="true" name="scripts.imageslazyload"> Sim</label>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<br>
<hr>
<h4>#7 Configuração de sub-tags</h4>
<p>O cloaker pega da barra de endereços as sub-tags que estão à esquerda e:<br>
1. Se você tem um landing page local, o cloaker grava os valores das tags em cada formulário no landing page nos campos com os nomes que estão à direita<br>
2. Se você tem um landing page em uma Parceria de Publicidade (PP), o cloaker adiciona os valores das tags ao link da PP com os nomes que estão à direita<br>
Dessa forma, transferimos os valores das sub-tags para a PP, para que as informações necessárias apareçam nas estatísticas da PP<br>
Além disso, isso é necessário para transferir o subid para o postback<br>
Existem 3 tags "pré-definidas": <br>
- subid - identificador único do usuário, criado quando o usuário acessa o black, armazenado nos cookies<br>
- prelanding - nome da pasta do pré-lander<br>
- landing - nome da pasta do landing<br><br />
Exemplo: <br>
se na barra de endereço você tiver http://xxx.com?cn=MyCampaign<br>
e você escreveu na configuração: cn => utm_campaign <br />
no formulário do landing será adicionado <pre>&lt;input type="hidden" name="utm_campaign" value="MyCampaign"/&gt;</pre>

</p>
<div id="subs_container">
<?php  for ($i=0;$i<count($sub_ids);$i++){?>
<div class="form-group-inner subs">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
     <div class="input-group">
        <input type="text" class="form-control" placeholder="subid" value="<?=$sub_ids[$i]["name"]?>" name="subids[<?=$i?>][name]">
    </div>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
    <p>=></p>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
    <div class="input-group custom-go-button">
        <input type="text" class="form-control" placeholder="sub_id" value="<?=$sub_ids[$i]["rewrite"]?>" name="subids[<?=$i?>][rewrite]">
    </div>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
    <a href="javascript:void(0)" class="remove-sub-item btn btn-sm btn-primary">УSimлить</a>
</div>
</div>
</div>
<?php }?>
</div>
<a id="add-sub-item" class="btn btn-sm btn-primary" href="javascript:;">Добавить</a>

<br>
<hr>
<h4>#8 Настройка статистики</h4>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">Пароль от админ-панели: <br><small>добавлять как: /admin?password=xxxxx</small></label>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="input-group custom-go-button">
<input type="password" name="statistics.password" class="form-control" placeholder="12345" value="<?=$log_password?>">
</div>
</div>
</div>
</div>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">Часовой пояс для отображения статы</label>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="input-group custom-go-button">
<?=select_timezone('statistics.timezone',$stats_timezone) ?>
</div>
</div>
</div>
</div>
<br/>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">Настройка отображения таблиц по субметкам в стате:</label>
<br/>
<br/>
<p>Слева название метки, которую кло возьмёт из адреса перехоSim.</p>
<p>Справа название НА АНГЛИЙСКОМ таблицы, в которой будут показаны все значения выбранной метки и их стата: клики, конверсии</p>
</div>
</div>

<div id="stats_subs_container">
<?php  for ($i=0;$i<count($stats_sub_names);$i++){?>
<div class="form-group-inner stats_subs">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
     <div class="input-group">
        <input type="text" class="form-control" placeholder="camp" value="<?=$stats_sub_names[$i]["name"]?>" name="statistics.subnames[<?=$i?>][name]">
    </div>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
    <p>=></p>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
    <div class="input-group custom-go-button">
        <input type="text" class="form-control" placeholder="Campaigns" value="<?=$stats_sub_names[$i]["value"]?>" name="statistics.subnames[<?=$i?>][value]">
    </div>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
    <a href="javascript:void(0)" class="remove-stats-sub-item btn btn-sm btn-primary">УSimлить</a>
</div>
</div>
</div>
<?php }?>
</div>
<a id="add-stats-sub-item" class="btn btn-sm btn-primary" href="javascript:;">Добавить</a>
</div>
<br>
<hr>
<h4>#9 Настройка постбэков</h4>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">Здесь необходимо прописать статусы лидов, в том виде, как их вам отправляет в постбэке ПП:</label>
</div>
</div>
</div>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">Lead</label>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="input-group custom-go-button">
<input type="text" name="postback.lead" class="form-control" placeholder="Lead" value="<?=$lead_status_name?>">
</div>
</div>
</div>
</div>

<div class="form-group-inner">
<div class="row">
<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">Purchase</label>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="input-group custom-go-button">
<input type="text" name="postback.purchase" class="form-control" placeholder="Purchase" value="<?=$purchase_status_name?>">
</div>
</div>
</div>
</div>

<div class="form-group-inner">
<div class="row">
<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">Reject</label>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="input-group custom-go-button">
<input type="text" name="postback.reject" class="form-control" placeholder="Reject" value="<?=$reject_status_name?>">
</div>
</div>
</div>
</div>

<div class="form-group-inner">
<div class="row">
<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">Trash</label>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="input-group custom-go-button">
<input type="text" name="postback.trash" class="form-control" placeholder="Trash" value="<?=$trash_status_name?>">
</div>
</div>
</div>
</div>
<div class="form-group-inner">
<div class="row">
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
<label class="login2 pull-left pull-left-pro">Настойка S2S-постбеков:</label>
<br/>
</div>
</div>

<div id="s2s_container">
<?php  for ($i=0;$i<count($s2s_postbacks);$i++){?>
<div class="form-group-inner s2s">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
    <label class="login2 pull-left pull-left-pro">Адрес:</label>
    <br/><br/>
<p>Внутри адреса постбэка можно использовать следующие макросы:
{subid}, {prelanding}, {landing}, {px}, {domain}, {status}</p>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
     <div class="input-group">
        <input type="text" class="form-control" placeholder="https://s2s-postback.com" value="<?=$s2s_postbacks[$i]["url"]?>" name="postback.s2s[<?=$i?>][url]">
    </div>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
    <a href="javascript:void(0)" class="remove-s2s-item btn btn-sm btn-primary">УSimлить</a>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
    <label class="login2 pull-left pull-left-pro">Метод отправки постбэка:</label>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
     <div class="input-group">
        <select class="form-control" name="postback.s2s[<?=$i?>][method]">
            <option value="GET" <?=($s2s_postbacks[$i]["method"]==="GET"?' selected':'')?>>GET</option>
            <option value="POST"<?=($s2s_postbacks[$i]["method"]==="POST"?' selected':'')?>>POST</option>
        </select>
    </div>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
    <label class="login2 pull-left pull-left-pro">События, при которых будет отправлен постбэк:</label>
</div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
    <br/>
    <br/>
        <?php
            function s2s_postback_contains($conv_event,$s2s_postback){
                if (!array_key_exists("events",$s2s_postback)) return false;
                return in_array($conv_event,$s2s_postback["events"]);
            }
        ?>
         <label class="form-check-input">
        <input type="checkbox" class="form-check-input" name="postback.s2s[<?=$i?>][events][]" value="Lead"<?=(s2s_postback_contains("Lead",$s2s_postbacks[$i])?' checked':'')?>>Lead</label>&nbsp;&nbsp;
         <label class="form-check-input">
        <input type="checkbox" class="form-check-input" name="postback.s2s[<?=$i?>][events][]" value="Purchase"<?=(s2s_postback_contains("Purchase",$s2s_postbacks[$i])?' checked':'')?>>Purchase</label>&nbsp;&nbsp;
         <label class="form-check-input">
        <input type="checkbox" class="form-check-input" name="postback.s2s[<?=$i?>][events][]" value="Reject"<?=(s2s_postback_contains("Reject",$s2s_postbacks[$i])?' checked':'')?>>Reject</label>&nbsp;&nbsp;
         <label class="form-check-input">
        <input type="checkbox" class="form-check-input" name="postback.s2s[<?=$i?>][events][]" value="Trash"<?=(s2s_postback_contains("Trash",$s2s_postbacks[$i])?' checked':'')?>>Trash
</label>
</div>
</div>
<?php }?>
</div>
<a id="add-s2s-item" class="btn btn-sm btn-primary" href="javascript:;">Добавить</a>
</div>

<hr>
<div class="form-group-inner">
<div class="login-btn-inner">
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-9">
<div class="login-horizental cancel-wp pull-left">
    <button class="btn btn-sm btn-primary" type="submit"><strong>Сохранить настройки</strong></button>
</div>
</div>
</div>
</div>
</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>

</div>
<!-- jquery
    ============================================ -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--cloneData-->
<script src="js/cloneData.js"></script>
<script>
$('#add-domain-item').cloneData({
    mainContainerId: 'white_domainspecific',
    cloneContainer: 'white',
    removeButtonClass: 'remove-domain-item',
    maxLimit: 5,
    minLimit: 1,
    removeConfirm: false
});

$('#add-sub-item').cloneData({
    mainContainerId: 'subs_container',
    cloneContainer: 'subs',
    removeButtonClass: 'remove-sub-item',
    maxLimit: 10,
    minLimit: 1,
    removeConfirm: false
});

$('#add-stats-sub-item').cloneData({
    mainContainerId: 'stats_subs_container',
    cloneContainer: 'stats_subs',
    removeButtonClass: 'remove-stats-sub-item',
    maxLimit: 10,
    minLimit: 1,
    removeConfirm: false
});

$('#add-s2s-item').cloneData({
    mainContainerId: 's2s_container',
    cloneContainer: 's2s',
    removeButtonClass: 'remove-s2s-item',
    maxLimit: 5,
    minLimit: 1,
    removeConfirm: false
});
</script>
<!-- meanmenu JS
    ============================================ -->
<script src="js/jquery.meanmenu.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="js/jquery.sticky.js"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="js/metisMenu/metisMenu.min.js"></script>
<script src="js/metisMenu/metisMenu-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="js/main.js"></script>
</body>

<?php
function select_timezone($selectname,$selected = '') {
$zones = timezone_identifiers_list();
$select= "<select name='".$selectname."' class='form-control'>";
foreach($zones as $zone)
{
    $tz=new DateTimeZone($zone);
    $offset=$tz->getOffset(new DateTime)/3600;
    $select .='<option value="'.$zone.'"';
    $select .= ($zone == $selected ? ' selected' : '');
    $select .= '>'.$zone.' '.$offset.'</option>';
}  
$select.='</select>';
return $select;
}
?>

</html>
