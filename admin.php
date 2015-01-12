<?php
global $wpdb;
$savedLibro = get_option( 'bible_defalt_libro' );
$savedCapitulo = get_option( 'bible_defalt_capitulo' );
$savedVersiculo = get_option( 'bible_defalt_versiculo' );
$savedVersion = get_option( 'bible_defalt_version' );
$savedColor = get_option( 'bible_defalt_highlight_color' );

if(isset($_POST['submitButton'])){
	$libro 		= $_POST['libro'];
	$capitulo 	= $_POST['capitulo'];
	$versiculo 	= $_POST['versiculo'];
	$version 	= $_POST['version'];
	$color 	= $_POST['color'];
	update_option( 'bible_defalt_libro', $libro );
	update_option( 'bible_defalt_capitulo', $capitulo );
	update_option( 'bible_defalt_versiculo', $versiculo );
	update_option( 'bible_defalt_version', $version );
	update_option( 'bible_defalt_highlight_color', "#".$color );
	header('Location: admin.php?page=biblia-y-concordancia/admin.php');
}

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo plugins_url('biblia-y-concordancia'); ?>/css/colorpicker.css" />
<script type="text/javascript" src="<?php echo plugins_url('biblia-y-concordancia'); ?>/js/colorpicker.js"></script>
<script>
	$(document).ready(function(){
		$('#color').ColorPicker({
			onChange: function (hsb, hex, rgb) {
				$('#color').val(hex);
			}}
		);
		$("#libroDrop option[value='<?php echo $savedLibro;?>']").attr("selected", "selected");
		$("#capitulo option[value='<?php echo $savedCapitulo;?>']").attr("selected", "selected");
		$("#versiculo option[value='<?php echo $savedVersiculo;?>']").attr("selected", "selected");
		$("#versionDrop option[value='<?php echo $savedVersion;?>']").attr("selected", "selected");
	});
</script>
<h3>Bible Form Details:</h3>
<form action="" method="post">
<table class="form-table" style="table-border">
<tr>
	<td>Libro:</td>
	<td>
		<select id='libroDrop' name="libro" size="1">
			<option value="">Seleccionar Libro</option>
			<option value="1">G&eacute;nesis</option>
			<option value="2" >&Eacute;xodo</option>
			<option value="3" >Lev&iacute;tico</option>
			<option value="4" >N&uacute;meros</option>
			<option value="5" >Deuteronomio</option>
			<option value="6" >Josu&eacute;</option>
			<option value="7" >Jueces</option>
			<option value="8" >Rut</option>
			<option value="9" >1 Samuel</option>
			<option value="10" >2 Samuel</option>
			<option value="11" >1 Reyes</option>
			<option value="12" >2 Reyes</option>
			<option value="13" >1 Cr&oacute;nicas</option>
			<option value="14" >2 Cr&oacute;nicas</option>
			<option value="15" >Esdras</option>
			<option value="16" >Nehem&iacute;as</option>
			<option value="17" >Ester</option>
			<option value="18" >Job</option>
			<option value="19" >Salmos</option>
			<option value="20" >Proverbios</option>
			<option value="21" >Eclesiast&eacute;s</option>
			<option value="22" >Cantares</option>
			<option value="23" >Isa&iacute;as</option>
			<option value="24" >Jerem&iacute;as</option>
			<option value="25" >Lamentaciones</option>
			<option value="26" >Ezequiel</option>
			<option value="27" >Daniel</option>
			<option value="28" >Oseas</option>
			<option value="29" >Joel</option>
			<option value="30" >Am&oacute;s</option>
			<option value="31" >Abd&iacute;as</option>
			<option value="32" >Jon&aacute;s</option>
			<option value="33" >Miqueas</option>
			<option value="34" >Nah&uacute;m</option>
			<option value="35" >Habacuc</option>
			<option value="36" >Sofon&iacute;as</option>
			<option value="37" >Hageo</option>
			<option value="38" >Zacar&iacute;as</option>
			<option value="39" >Malaqu&iacute;as</option>
			<option value="40" >Mateo</option>
			<option value="41">Marcos</option>
			<option value="42">Lucas</option>
			<option value="43">Juan</option>
			<option value="44">Hechos</option>
			<option value="45">Romanos</option>
			<option value="46">1 Corintios</option>
			<option value="47">2 Corintios</option>
			<option value="48">G&aacute;latas</option>
			<option value="49">Efecios</option>
			<option value="50">Filipenses</option>
			<option value="51">Colosenses</option>
			<option value="52">1 Tesalonicenses</option>
			<option value="53">2 Tesalonicenses</option>
			<option value="54">1 Timoteo</option>
			<option value="55">2 Timoteo</option>
			<option value="56">Tito</option>
			<option value="57">Filem&oacute;n</option>
			<option value="58">Hebreos</option>
			<option value="59">Santiago</option>
			<option value="60">1 Pedro</option>
			<option value="61">2 Pedro</option>
			<option value="62">1 Juan</option>
			<option value="63">2 Juan</option>
			<option value="64">3 Juan</option>
			<option value="65">Judas</option>
			<option value="66">Apocalipsis</option>
        </select>
	</td>
</tr>
<tr>
	<td>Cap&iacute;tulo:</td>
	<td>
		<select name="capitulo" id="capitulo" class="txt_form">
			<option value=" " disabled="disabled" selected="selected">Cap&iacute;tulo</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			<option value="34">34</option>
			<option value="35">35</option>
			<option value="36">36</option>
		</select>
	</td>
</tr>
<tr>
	<td>Vers&iacute;culo:</td>
	<td>
		<select name="versiculo" id="versiculo" class="txt_form">
			<option value=" " disabled="disabled" selected="selected">Vers&iacute;culo</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
		</select>
	</td>
</tr>
<tr>
	<td>Version:</td>
	<td>
		<select id="versionDrop" name="version" size="1">
			<option value="biblia_1960">Reina Valera 1960</option>
			<option value="biblia_1909">Reina Valera 1909</option>
			<option value="biblia_1989">Reina Valera Actualizada 1989</option>
			<option value="biblia_1569">Sagradas Escrituras 1569</option>
			<option value="biblia_ntv">Nueva Traduccion Viviente</option>
			<option value="biblia_rvc">Reina Valera Contemporanea</option>
			<option value="biblia_rvg">Reina Valera Gomez</option>
			<option value="biblia_lbla">La Biblia de las Americas</option>
			<option value="biblia_pdt">Palabra de Dios para Todos</option>
			<option value="biblia_kjv">King James Version</option>
			<option value="biblia_portugues">Portugues</option>
			<option value="biblia_italiano">Italiano</option>
		</select>
	</td>
</tr>
<tr>
	<td>Color:</td>
	<td>
		<input type="text" name="color" id="color" value="<?php echo $savedColor;?>" readonly>
	</td>
</tr>
<tr>
	<td><input type="submit" name="submitButton"></td>
</tr>
</table>
</form>