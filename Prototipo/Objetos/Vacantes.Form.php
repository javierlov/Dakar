<?php

require_once "Clases/Formulario.php";
require_once "Clases/Label.php";
require_once "Clases/Input.php";

function Get_Formulario(){
//Declaraciones
	$L1 = new Label('Nombre','','controles','idL1','');
	$I1 = new Input('','nada','controles','idI1','text');
	$I1->SetMaxLength('20');
	$I1->SetStyle('width:120px;');
	
	$L2 = new Label('Apellido','','controles','idL2','');
	$I2 = new Input('','nada','controles','idI2','text');
	$I2->SetMaxLength('20');
	$I2->SetStyle('width:120px;');
	
/****
<label>Torre</label>
<input id="torre" maxlength="8" name="torre" style="width:41px;" type="text" />
<label>Manzana</label>
<input id="manzana" maxlength="8" name="manzana" style="width:41px;" type="text" />
<label>Sector</label>
<input id="sector" maxlength="8" name="sector" style="width:41px;" type="text" />
<label>CP</label>
<input id="cp" maxlength="12" name="cp" style="width:67px;" type="text" /> *
****/	
	$LTorr = new Label('Torre','','controles','idLTorr','');
	$ITorr = new Input('','nada','controles','idITorr','text');
	$ITorr->SetMaxLength('8');
	$ITorr->SetStyle('width:70px;');
	
	$LManz = new Label('Manzana','','controles','idLManz','');
	$IManz = new Input('','nada','controles','idIManz','text');
	$IManz->SetMaxLength('8');
	$IManz->SetStyle('width:70px;');
	
	$LSec = new Label('Sector','','controles','idLSec','');
	$ISec = new Input('','nada','controles','idISec','text');
	$ISec->SetMaxLength('8');
	$ISec->SetStyle('width:70px;');
	
	$LCP = new Label('CP','','controles','idLCP','');
	$ICP = new Input('','nada','controles','idICP','text');
	$ICP->SetMaxLength('12');
	$ICP->SetStyle('width:90px;');
	
	
	
	$IBoton1 = new Input('','nada','celda','idI2','submit');
	$IBoton1->SetValue('Clickeame');
	
	$IBoton2 = new Input('','nada','celda','idI2','button');
	$IBoton2->SetValue('Solo soy un  boton');

	$f = new Formulario('celda','formuid', '90%');
//Asignaciones	
	$f->SetPie('Nota al pie', 'pieform','idpie' );
	$f->SetEncabezado('Ingreso de vacantes', 'principal','idhead' );

	$f->SetCuerpo($L1->GetHTML()." ".$I1->GetHTML(), '','' );
	$f->SetCuerpo($L2->GetHTML()." ".$I2->GetHTML(), '','' );
	
	$f->SetCuerpo($LTorr->GetHTML()." ".$ITorr->GetHTML()." ".
				   $LManz->GetHTML()." ".$IManz->GetHTML()." ".
				   $LSec->GetHTML()." ".$ISec->GetHTML()." ".
				   $LCP->GetHTML()." ".$ICP->GetHTML(), '','' );
	
	$f->SetCuerpo($IBoton1->GetHTML(), '','' );
	$f->SetCuerpo($IBoton2->GetHTML(), '','' );	
		
//Mostrar Controles	
	echo $f->Draw();
	
}