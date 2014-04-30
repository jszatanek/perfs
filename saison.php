<html>
	<head>

<style type="text/css">
td.gars {
  color: 0000FF;
  background-color: white;
}
td.gars:hover {
  color: yellow;
  background-color: #c0c0c0;
}
td.fille {
  color: FF00FF;
  background-color: white;
}
td.fille:hover {
  color: yellow;
  background-color: #c0c0c0;
}
</style>
</head>
	<body> Liste des meilleurs temps de la saison. 
	<table border="1" width="60%" cellspacing=0> 
		<tr><td colspan="3" align="center">
			<form name="selectcat" action="saison.php">
			<select name="cat">
				<option "XXX">Toutes cat</option>
				<option "FMP">Mini Poussines</option>
				<option "MMP">Mini Poussins</option>
				<option "FPO">Poussines</option>
				<option "MPO">Poussins</option>
				<option "FPU">Pupilles F.</option>
				<option "MPU">Pupilles G.</option>
				<option "FBE">Benjamines</option>
				<option "MBE">Benjamins</option>
				<option "FMI">Minimes F.</option>
				<option "MMI">Minimes G.</option>

			</select>
		</form>
			</td><td colspan="4">Natation (Nage libre)</td><td colspan="4">Course à Pied</td></tr>
		<tr><td>Nom Prénom</td><td>Année</td><td>Catégorie</td><td>50m</td><td>100m</td><td>200m</td><td>400m</td><td>200m</td><td>400m</td><td>800m</td><td>1000m</td></tr>
		
<!--
		SELECT min(tps),a.prenom,a.nom 
FROM jeune a
LEFT JOIN perf b ON a.id = b.id_jeune
where b.dist="50" and b.discipline="NAT"
ORDER BY a.nom
LIMIT 0 , 30

select min(tps) from perf b where id_jeune=1 and dist="50" and discipline="NAT"
-->
		<tr><td><a href="fichejeune.php">Blatner Florian</a></td><td>2002</td><td class=gars>MBE</td><td>1'05"</td><td>2'10'</td><td>4'33'</td><td>8'40"</td><td>45"</td><td>1'30"</td><td>4'</td><td>5'</td></tr>
		<tr><td><a href="fichejeune.php">Barbier Elia</a></td><td>2003</td><td class=fille>FPU</td><td>1'15"</td><td>2'45'</td><td>4'23'</td><td>9'40"</td><td>55"</td><td>1'50"</td><td>4'30</td><td>5'30</td></tr>
		<tr><td><a href="fichejeune.php">Szatanek Léanne</a></td><td>2002</td><td class=fille>FBE</td><td>1'10"</td><td>2'20'</td><td>4'03'</td><td>8'40"</td><td>45"</td><td>1'30"</td><td>4'</td><td>5'</td></tr>
		<tr><td><a href="fichejeune.php">Szatanek Mathilde</a></td><td>2005</td><td class=fille>FPO</td><td>1'20"</td><td>2'40'</td><td>4'43'</td><td>9'40"</td><td>55"</td><td>1'50"</td><td>4'30</td><td>5'30</td></tr>
	</table>
	</body>
</htlm>