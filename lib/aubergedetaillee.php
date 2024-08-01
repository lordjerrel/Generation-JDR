<?php

function appeltableauauberge(){

$output ='';
	$output.='<h2>Paramètres de l\'établissement</h2>';
	$output.='<form method="post" onsubmit="return valid();"action="index.php?page=aubergedetaillee">
		<table>
			<tr>
				<td><label for="typeetablissement">Type d\'établissement : </label></td>
				<td><select name="typeetablissement">
					<OPTION VALUE="0">Auberge</OPTION>
					<OPTION VALUE="1">Taverne</OPTION>
					<OPTION VALUE="2">Hostelerie</OPTION>
				</SELECT></td>
			</tr>

			<tr>
				<td><label for="qualite">Qualité des services : </label></td>
				<td><select name="qualite">
					<OPTION VALUE="0">Aléatoire</OPTION>
					<OPTION VALUE="1">Faible</OPTION>
					<OPTION VALUE="2">Moyenne</OPTION>
					<OPTION VALUE="3">Elevée</OPTION>
				</SELECT></td>
			</tr>

			<tr>
				<td><label for="environnement">Environnement : </label></td>
				<td><select name="environnement">
					<OPTION VALUE="0">Aléatoire</OPTION>
					<OPTION VALUE="1">Rural</OPTION>
					<OPTION VALUE="2">Urbain</OPTION>
					</SELECT></td>
			</tr>

			<!--<tr>
				<td><label for="aqua"></label></td>
				<FORM>
				<td>
					<input type="checkbox" name="aqua" value="0" checked="checked" style="visibility:hidden"/>
					<INPUT type="checkbox" name="aqua" value="1"> Proximité d\'une côte ou d\'un fleuve
				</td>
			</tr>-->
			
			<tr>
				<td><label for="race">Race principale des lieux : </label></td>
				<td><select name="race">
					<OPTION VALUE="0">Humain</OPTION>
					<OPTION VALUE="1">Halfelin</OPTION>
					<OPTION VALUE="2">Gnome</OPTION>
					<OPTION VALUE="3">Nain</OPTION>
					<OPTION VALUE="4">Elfe</OPTION>
				</SELECT></td>
			</tr>
			<tr><td align="center" colspan="3"><input type="submit" name="generer" value="Générer" /></td></tr>		
		</table>';
		
		return $output;
		}

?>