<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Formulario Acceso</title>
		<link href="Estilos/styles.css" rel="stylesheet" type="text/css" />		
	</head>
	<body>
<h1>Aplicar estilo</h1>	
<hr>
<ul id="sfWebDebugDetails" class="menu">
            <li>{$phpDebugVersion}</li>
            <li><a href="#" onclick="sfWebDebugShowDetailsFor(\'sfWebDebugConfig\'); return false;"><img src="{$imagesPath}/config.png" alt="Config" /> vars &amp; config</a></li>
            <li><a href="#" onclick="sfWebDebugShowDetailsFor(\'sfWebDebugLog\'); return false;"><img src="{$imagesPath}/comment.png" alt="Comment" /> logs &amp; msgs</a></li>
            <li><a href="#" onclick="sfWebDebugShowDetailsFor(\'sfWebDebugDatabaseDetails\'); return false;"><img src="{$imagesPath}/database.png" alt="Database" /> {$nb_queries}</a></li>
            <li><a href="#" onclick="sfWebDebugShowDetailsFor(\'sfWebDebugW3CDetails\'); return false;">W3C</a></li>
            <li class="last"><a href="#" onclick="sfWebDebugShowDetailsFor(\'sfWebDebugTimeDetails\'); return false;"><img src="{$imagesPath}/time.png" alt="Time" /> {$exec_time} ms</a></li>
        </ul>
<hr>		
<?php
echo '<a>hola mate </a><br>';

require_once "Formulario/Panel.php";

$f = new Panel('Panel','principal','panelid');
$f->SetWidth('500px');
$f->SetHeight('500px');

$f2 = new Panel('dos','celda','panelid');
$f3 = new Panel('tres','principal','panelid');

$f2->AgregarSubPanel($f3->DibujarPanel());
$f2->AgregarSubPanel($f3->DibujarPanel());
$f2->AgregarSubPanel($f3->DibujarPanel());
$f->AgregarSubPanel($f2->DibujarPanel());


//$f->test();
echo $f->DibujarPanel();

?>
	</body>
</html>
