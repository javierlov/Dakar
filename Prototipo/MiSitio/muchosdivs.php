﻿<?php

echo  "
<div align='center' class='ContenidoSeccion' style='text-align:left; width:640px;' border='1'; >
				<div style='color:#0f539c; font-weight:bold; margin-top:18px;'>DATOS PERSONALES</div>
				
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Nombre 1</label>
					<input id='nombre1' maxlength='25' name='nombre1' style='text-transform:uppercase; width:80%;' type='text' /> *
				</div>
				
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Nombre 2</label>
					<input id='nombre2' maxlength='25' name='nombre2' style='text-transform:uppercase; width:80%' type='text' />
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Apellido 1</label>
					<input id='apellido1' maxlength='25' name='apellido1' style='text-transform:uppercase; width:292px;' type='text' /> *
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Apellido 2</label>
					<input id='apellido2' maxlength='25' name='apellido2' style='text-transform:uppercase; width:292px;' type='text' />
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Fecha de Nacimiento dd/mm/aaaa</label>
					<input id='fechaNacimiento' maxlength='10' name='fechaNacimiento' style='width:80px;' type='text'>
					<input class='botonFecha' id='btnFechaNacimiento' name='btnFechaNacimiento' type='button' value=''> *
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Sexo</label>
					<input id='sexo' name='sexo' type='radio' value='0' />
					<label>Femenino</label>
					<input id='sexo' name='sexo' type='radio' value='-1' />
					<label>Masculino</label> *
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Estado Civil</label>
					<select id='estadoCivil' name='estadoCivil' style='width:282px;'></select> *
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>País de Nacimiento</label>
					<select id='paisNacimiento' name='paisNacimiento' style='width:241px;'></select> *
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Nacionalidad</label>
					<select id='nacionalidad' name='nacionalidad' style='width:277px;'></select> *
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Tipo de Documento</label>
					<select id='tipoDocumento' name='tipoDocumento' style='width:128px;'></select> *
					<label>Nro</label>
					<input id='numeroDocumento' maxlength='30' name='numeroDocumento' style='width:70px;' type='text' /> *
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Teléfono Fijo</label>
					<input id='telefonoFijo' maxlength='20' name='telefonoFijo' style='width:275px;' type='text' /> *
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Teléfono Celular</label>
					<input id='telefonoCelular' maxlength='20' name='telefonoCelular' style='width:254px;' type='text' />
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>e-Mail</label>
					<input id='email' maxlength='100' name='email' style='width:314px;' type='text' />
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Calle</label>
					<input id='calle' maxlength='30' name='calle' style='width:319px;' type='text' /> *
				</div>
				
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Número</label>
					<input id='numeroCalle' maxlength='8' name='numeroCalle' style='width:59px;' type='text' /> *
					<label style='margin-left:2px;'>Piso</label>
					<input id='piso' maxlength='8' name='piso' style='width:54px;' type='text' />
					<label style='margin-left:2px;'>Departamento</label>
					<input id='departamento' maxlength='8' name='departamento' style='width:54px;' type='text' />
				</div>
				
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Torre</label>
					<input id='torre' maxlength='8' name='torre' style='width:41px;' type='text' />
					<label>Manzana</label>
					<input id='manzana' maxlength='8' name='manzana' style='width:41px;' type='text' />
					<label>Sector</label>
					<input id='sector' maxlength='8' name='sector' style='width:41px;' type='text' />
					<label>CP</label>
					<input id='cp' maxlength='12' name='cp' style='width:67px;' type='text' /> *
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Localidad</label>
					<select id='localidad' name='localidad' style='width:296px;'></select> *
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Provincia</label>
					<select id='provincia' name='provincia' style='width:297px;'></select> *
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Partido</label>
					<select id='partido' name='partido' style='width:309px;'></select>
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>País</label>
					<select id='pais' name='pais' style='width:326px;'></select> *
				</div>
				<div style='font-weight:bold; margin-top:8px; color:#0f539c;'>
					<label>FOTO</label>
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Adjuntar foto en formato jpg y peso max de 70 KB</label>
					<br />
					<input class='InputText' id='foto' name='foto' style='width:351px;' type='file' />
				</div>

				<div style='font-weight:bold; margin-top:8px; color:#0f539c;'>
					<label>FORMACIÓN</label>
				</div>
				<div id='formacion1'>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Nivel</label>
						<select id='nivelFormacion1' name='nivelFormacion1' style='width:321px;'></select> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Completo</label>
						<input id='completo1' name='completo1' type='radio' value='-1' />
						<label>Sí</label>
						<input id='completo1' name='completo1' type='radio' value='0' />
						<label>No</label> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Título</label>
						<select id='titulo1' name='titulo1' style='width:318px;'></select> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Institución</label>
						<select id='institucion1' name='institucion1' style='width:290px;'></select> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Carrera</label>
						<select id='carrera1' name='carrera1' style='width:304px;'></select> *
					</div>
				</div>

				<div id='formacion2' style='display:none;'>
					<input id='formacion2visible' name='formacion2visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Nivel</label>
						<select id='nivelFormacion2' name='nivelFormacion2' style='width:321px;'></select> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Completo</label>
						<input id='completo2' name='completo2' type='radio' value='-1' />
						<label>Sí</label>
						<input id='completo2' name='completo2' type='radio' value='0' />
						<label>No</label> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Título</label>
						<select id='titulo2' name='titulo2' style='width:318px;'></select> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Institución</label>
						<select id='institucion2' name='institucion2' style='width:290px;'></select> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Carrera</label>
						<select id='carrera2' name='carrera2' style='width:304px;'></select> *
					</div>
				</div>

				<div id='formacion3' style='display:none;'>
					<input id='formacion3visible' name='formacion3visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Nivel</label>
						<select id='nivelFormacion3' name='nivelFormacion3' style='width:321px;'></select> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Completo</label>
						<input id='completo3' name='completo3' type='radio' value='-1' />
						<label>Sí</label>
						<input id='completo3' name='completo3' type='radio' value='0' />
						<label>No</label> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Título</label>
						<select id='titulo3' name='titulo3' style='width:318px;'></select> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Institución</label>
						<select id='institucion3' name='institucion3' style='width:290px;'></select> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Carrera</label>
						<select id='carrera3' name='carrera3' style='width:304px;'></select> *
					</div>
				</div>

				<div id='formacion4' style='display:none;'>
					<input id='formacion4visible' name='formacion4visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Nivel</label>
						<select id='nivelFormacion4' name='nivelFormacion4' style='width:321px;'></select> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Completo</label>
						<input id='completo4' name='completo4' type='radio' value='-1' />
						<label>Sí</label>
						<input id='completo4' name='completo4' type='radio' value='0' />
						<label>No</label> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Título</label>
						<select id='titulo4' name='titulo4' style='width:318px;'></select> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Institución</label>
						<select id='institucion4' name='institucion4' style='width:290px;'></select> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Carrera</label>
						<select id='carrera4' name='carrera4' style='width:304px;'></select> *
					</div>
				</div>
				<div style='margin-left:30px; margin-top:8px; color:#0f539c;'>
					<a href='javascript:agregarEstudio()' id='agregarEstudio'>[+] Agregar otro estudio</a>
					<a href='javascript:quitarEstudio()' id='quitarEstudio' style='display:none; margin-left:152px;'>[-] Quitar</a>
				</div>

				<div style='font-weight:bold; margin-top:8px; color:#0f539c;'>
					<label>EXPERIENCIA LABORAL</label>
				</div>
				<div id='experienciaLaboral1'>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Fecha desde</label>
						<input id='fechaDesde1' maxlength='10' name='fechaDesde1' style='width:72px;' type='text' />
						<input class='botonFecha' id='btnFechaDesde1' name='btnFechaDesde1' type='button' value=''> *
						<label style='margin-left:13px;'>hasta</label>
						<input id='fechaHasta1' maxlength='10' name='fechaHasta1' style='width:72px;' type='text' />
						<input class='botonFecha' id='btnFechaHasta1' name='btnFechaHasta1' type='button' value=''>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Empresa</label>
						<input id='empresa1' maxlength='60' name='empresa1' style='text-transform:uppercase; width:298px;' type='text' /> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Cargo anterior</label>
						<input id='cargoAnterior1' maxlength='50' name='cargoAnterior1' style='text-transform:uppercase; width:264px;' type='text' />
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Breve descripción de tareas *</label>
						<br />
						<textarea class='InputText' id='tareas1' maxlength='200' name='tareas1' style='height:50px; text-transform:uppercase; width:352px;'></textarea>
					</div>
				</div>

				<div id='experienciaLaboral2' style='display:none;'>
					<input id='experienciaLaboral2visible' name='experienciaLaboral2visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Fecha desde</label>
						<input id='fechaDesde2' maxlength='10' name='fechaDesde2' style='width:72px;' type='text' />
						<input class='botonFecha' id='btnFechaDesde2' name='btnFechaDesde2' type='button' value=''> *
						<label style='margin-left:13px;'>hasta</label>
						<input id='fechaHasta2' maxlength='10' name='fechaHasta2' style='width:72px;' type='text' />
						<input class='botonFecha' id='btnFechaHasta2' name='btnFechaHasta2' type='button' value=''>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Empresa</label>
						<input id='empresa2' maxlength='60' name='empresa2' style='text-transform:uppercase; width:298px;' type='text' /> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Cargo anterior</label>
						<input id='cargoAnterior2' maxlength='50' name='cargoAnterior2' style='text-transform:uppercase; width:264px;' type='text' />
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Breve descripción de tareas *</label>
						<br />
						<textarea class='InputText' id='tareas2' maxlength='200' name='tareas2' style='height:50px; text-transform:uppercase; width:352px;'></textarea>
					</div>
				</div>

				<div id='experienciaLaboral3' style='display:none;'>
					<input id='experienciaLaboral3visible' name='experienciaLaboral3visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Fecha desde</label>
						<input id='fechaDesde3' maxlength='10' name='fechaDesde3' style='width:72px;' type='text' />
						<input class='botonFecha' id='btnFechaDesde3' name='btnFechaDesde3' type='button' value=''> *
						<label style='margin-left:13px;'>hasta</label>
						<input id='fechaHasta3' maxlength='10' name='fechaHasta3' style='width:72px;' type='text' />
						<input class='botonFecha' id='btnFechaHasta3' name='btnFechaHasta3' type='button' value=''>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Empresa</label>
						<input id='empresa3' maxlength='60' name='empresa3' style='text-transform:uppercase; width:298px;' type='text' /> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Cargo anterior</label>
						<input id='cargoAnterior3' maxlength='50' name='cargoAnterior3' style='text-transform:uppercase; width:264px;' type='text' />
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Breve descripción de tareas *</label>
						<br />
						<textarea class='InputText' id='tareas3' maxlength='200' name='tareas3' style='height:50px; text-transform:uppercase; width:352px;'></textarea>
					</div>
				</div>

				<div id='experienciaLaboral4' style='display:none;'>
					<input id='experienciaLaboral4visible' name='experienciaLaboral4visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Fecha desde</label>
						<input id='fechaDesde4' maxlength='10' name='fechaDesde4' style='width:72px;' type='text' />
						<input class='botonFecha' id='btnFechaDesde4' name='btnFechaDesde4' type='button' value=''> *
						<label style='margin-left:13px;'>hasta</label>
						<input id='fechaHasta4' maxlength='10' name='fechaHasta4' style='width:72px;' type='text' />
						<input class='botonFecha' id='btnFechaHasta4' name='btnFechaHasta4' type='button' value=''>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Empresa</label>
						<input id='empresa4' maxlength='60' name='empresa4' style='text-transform:uppercase; width:298px;' type='text' /> *
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Cargo anterior</label>
						<input id='cargoAnterior4' maxlength='50' name='cargoAnterior4' style='text-transform:uppercase; width:264px;' type='text' />
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Breve descripción de tareas *</label>
						<br />
						<textarea class='InputText' id='tareas4' maxlength='200' name='tareas4' style='height:50px; text-transform:uppercase; width:352px;'></textarea>
					</div>
				</div>
				<div style='margin-left:30px; margin-top:8px; color:#0f539c;'>
					<a href='javascript:agregarExperienciaLaboral()' id='agregarExperienciaLaboral'>[+] Agregar otra experiencia laboral</a>
					<a href='javascript:quitarExperienciaLaboral()' id='quitarExperienciaLaboral' style='display:none; margin-left:86px;'>[-] Quitar</a>
				</div>

				<div style='font-weight:bold; margin-top:8px; color:#0f539c;'>
					<label>IDIOMAS</label>
				</div>
				<div id='divIdioma1'>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Idioma</label>
						<select id='idioma1' name='idioma1' style='width:309px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Habla - Nivel</label>
						<select id='hablaNivel1' name='hablaNivel1' style='width:276px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Lee - Nivel</label>
						<select id='leeNivel1' name='leeNivel1' style='width:288px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Escribe - Nivel</label>
						<select id='escribeNivel1' name='escribeNivel1' style='width:267px;'></select>
					</div>
				</div>

				<div id='divIdioma2' style='display:none;'>
					<input id='idioma2visible' name='idioma2visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Idioma</label>
						<select id='idioma2' name='idioma2' style='width:309px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Habla - Nivel</label>
						<select id='hablaNivel2' name='hablaNivel2' style='width:276px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Lee - Nivel</label>
						<select id='leeNivel2' name='leeNivel2' style='width:288px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Escribe - Nivel</label>
						<select id='escribeNivel2' name='escribeNivel2' style='width:267px;'></select>
					</div>
				</div>

				<div id='divIdioma3' style='display:none;'>
					<input id='idioma3visible' name='idioma3visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Idioma</label>
						<select id='idioma3' name='idioma3' style='width:309px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Habla - Nivel</label>
						<select id='hablaNivel3' name='hablaNivel3' style='width:276px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Lee - Nivel</label>
						<select id='leeNivel3' name='leeNivel3' style='width:288px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Escribe - Nivel</label>
						<select id='escribeNivel3' name='escribeNivel3' style='width:267px;'></select>
					</div>
				</div>

				<div id='divIdioma4' style='display:none;'>
					<input id='idioma4visible' name='idioma4visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Idioma</label>
						<select id='idioma4' name='idioma4' style='width:309px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Habla - Nivel</label>
						<select id='hablaNivel4' name='hablaNivel4' style='width:276px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Lee - Nivel</label>
						<select id='leeNivel4' name='leeNivel4' style='width:288px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Escribe - Nivel</label>
						<select id='escribeNivel4' name='escribeNivel4' style='width:267px;'></select>
					</div>
				</div>
				<div style='margin-left:30px; margin-top:8px; color:#0f539c;'>
					<a href='javascript:agregarIdioma()' id='agregarIdioma'>[+] Agregar otro idioma</a>
					<a href='javascript:quitarIdioma()' id='quitarIdioma' style='display:none; margin-left:156px;'>[-] Quitar</a>
				</div>

				<div style='font-weight:bold; margin-top:8px; color:#0f539c;'>
					<label>CURSOS Y OTROS CONOCIMIENTOS</label>
				</div>
				<div id='curso1'>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Tipo de Curso</label>
						<select id='tipoCurso1' name='tipoCurso1' style='width:269px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Nombre del Curso</label>
						<input id='nombreCurso1' maxlength='50' name='nombreCurso1' style='text-transform:uppercase; width:244px;' type='text' />
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Fecha de Curso dd/mm/aaaa</label>
						<input id='fechaCurso1' maxlength='10' name='fechaCurso1' style='width:80px;' type='text' />
						<input class='botonFecha' id='btnFechaCurso1' name='btnFechaCurso1' type='button' value=''>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Instituto</label>
						<select id='instituto1' name='instituto1' style='width:302px;'></select>
					</div>
				</div>

				<div id='curso2' style='display:none;'>
					<input id='curso2visible' name='curso2visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Tipo de Curso</label>
						<select id='tipoCurso2' name='tipoCurso2' style='width:269px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Nombre del Curso</label>
						<input id='nombreCurso2' maxlength='50' name='nombreCurso2' style='text-transform:uppercase; width:244px;' type='text' />
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Fecha de Curso dd/mm/aaaa</label>
						<input id='fechaCurso2' maxlength='10' name='fechaCurso2' style='width:80px;' type='text' />
						<input class='botonFecha' id='btnFechaCurso2' name='btnFechaCurso2' type='button' value=''>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Instituto</label>
						<select id='instituto2' name='instituto2' style='width:302px;'></select>
					</div>
				</div>

				<div id='curso3' style='display:none;'>
					<input id='curso3visible' name='curso3visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Tipo de Curso</label>
						<select id='tipoCurso3' name='tipoCurso3' style='width:269px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Nombre del Curso</label>
						<input id='nombreCurso3' maxlength='50' name='nombreCurso3' style='text-transform:uppercase; width:244px;' type='text' />
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Fecha de Curso dd/mm/aaaa</label>
						<input id='fechaCurso3' maxlength='10' name='fechaCurso3' style='width:80px;' type='text' />
						<input class='botonFecha' id='btnFechaCurso3' name='btnFechaCurso3' type='button' value=''>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Instituto</label>
						<select id='instituto3' name='instituto3' style='width:302px;'></select>
					</div>
				</div>

				<div id='curso4' style='display:none;'>
					<input id='curso4visible' name='curso4visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Tipo de Curso</label>
						<select id='tipoCurso4' name='tipoCurso4' style='width:269px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Nombre del Curso</label>
						<input id='nombreCurso4' maxlength='50' name='nombreCurso4' style='text-transform:uppercase; width:244px;' type='text' />
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Fecha de Curso dd/mm/aaaa</label>
						<input id='fechaCurso4' maxlength='10' name='fechaCurso4' style='width:80px;' type='text' />
						<input class='botonFecha' id='btnFechaCurso4' name='btnFechaCurso4' type='button' value=''>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Instituto</label>
						<select id='instituto4' name='instituto4' style='width:302px;'></select>
					</div>
				</div>
				<div style='margin-left:30px; margin-top:8px; color:#0f539c;'>
					<a href='javascript:agregarCurso()' id='agregarCurso'>[+] Agregar otro curso</a>
					<a href='javascript:quitarCurso()' id='quitarCurso' style='display:none; margin-left:162px;'>[-] Quitar</a>
				</div>

				<div style='font-weight:bold; margin-top:8px; color:#0f539c;'>
					<label>ESPECIALIZACIONES</label>
				</div>
				<div id='especializacion1'>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Tipo</label>
						<select id='tipo1' name='tipo1' style='width:325px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Elemento</label>
						<select id='elemento1' name='elemento1' style='width:296px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Nivel</label>
						<select id='nivelEspecializacion1' name='nivelEspecializacion1' style='width:321px;'></select>
					</div>
				</div>

				<div id='especializacion2' style='display:none;'>
					<input id='especializacion2visible' name='especializacion2visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Tipo</label>
						<select id='tipo2' name='tipo2' style='width:325px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Elemento</label>
						<select id='elemento2' name='elemento2' style='width:296px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Nivel</label>
						<select id='nivelEspecializacion2' name='nivelEspecializacion2' style='width:321px;'></select>
					</div>
				</div>

				<div id='especializacion3' style='display:none;'>
					<input id='especializacion3visible' name='especializacion3visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Tipo</label>
						<select id='tipo3' name='tipo3' style='width:325px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Elemento</label>
						<select id='elemento3' name='elemento3' style='width:296px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Nivel</label>
						<select id='nivelEspecializacion3' name='nivelEspecializacion3' style='width:321px;'></select>
					</div>
				</div>

				<div id='especializacion4' style='display:none;'>
					<input id='especializacion4visible' name='especializacion4visible' type='hidden' value='f'>
					<hr style='background-color:#0f539c; border:0; height:2px; margin-left:24px; width:368px;' />
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Tipo</label>
						<select id='tipo4' name='tipo4' style='width:325px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Elemento</label>
						<select id='elemento4' name='elemento4' style='width:296px;'></select>
					</div>
					<div style='margin-left:30px; margin-top:8px;'>
						<label>Nivel</label>
						<select id='nivelEspecializacion4' name='nivelEspecializacion4' style='width:321px;'></select>
					</div>
				</div>
				<div style='margin-left:30px; margin-top:8px; color:#0f539c;'>
					<a href='javascript:agregarEspecializacion()' id='agregarEspecializacion'>[+] Agregar otra especialización</a>
					<a href='javascript:quitarEspecializacion()' id='quitarEspecializacion' style='display:none; margin-left:108px;'>[-] Quitar</a>
				</div>

				<div style='margin-left:30px; margin-top:8px;'>
					<label>Remuneración pretendida</label>
					<input id='remuneracion' maxlength='15' name='remuneracion' style='width:201px;' type='text' />
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Adjuntar CV en formato .doc o .pdf</label>
					<br />
					<input class='InputText' id='cv' name='cv' style='width:351px;' type='file' />
				</div>
				<div style='margin-left:30px; margin-top:8px;'>
					<label>Ingrese el captcha</label>
					<input id='captcha' name='captcha' style='width:128px;' type='text' />
					<img border='0' id='imgCaptcha' src='/functions/captcha.php' style='margin-left:16px; vertical-align:-4px;' />
					<img border='0' src='/images/reload.png' style='cursor:hand; margin-left:4px; vertical-align:px;' title='Recargar captcha' onClick='recargarCaptcha(document)' />
				</div>
				<div style='margin-left:331px; margin-top:16px;'>
					<input class='btnEnviar' id='imgEnviar' type='button' value='' onClick='enviar()' />
					<img border='0' id='imgProcesando' src='/images/loading.gif' style='display:none;' title='Procesando, aguarde unos segundos por favor...' />
				</div>
				<div style='margin-bottom:8px; margin-left:30px; margin-top:16px;'><i>* Datos obligatorios.</i><br /></div>
				<p id='guardadoOk' style='background:#0f539c; color:#fff; display:none; margin-left:30px; padding:4px; width:252px;'>Los datos fueron guardados exitosamente.</p>
				<div id='divErrores' style='display:none; margin-top:8px;'>
					<table border='1' bordercolor='#ff0000' align='center' cellpadding='6' cellspacing='0'>
						<tr>
							<td>
								<table cellpadding='4' cellspacing='0'>
									<tr>
										<td><img border='0' src='/images/atencion.jpg'></td>
										<td class='ContenidoSeccion'>
											<font color='#000000'>
												No es posible continuar mientras no se corrijan los siguientes errores:
												<br />
												<br />
												<span id='errores'></span>
											</font>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<input id='foco' name='foco' readonly style='height:1px; width:1px;' type='checkbox' />
				</div>
			</div>";