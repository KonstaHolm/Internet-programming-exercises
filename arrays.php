<?php include "menu.php"; ?>
	<h2>Arrays</h2>
	<p>
		This is the Arrays
	</p>
	<h2>Create arrays</h2>
	<p>

		<?php
		$names=array("Jim","Ann","Bob");
		echo 'Ensimmäinen nimi on ' .$names[0];
		?>
	</p>
	<p>
		Tulostetaan koko taulukon sisältö foreach loopilla. <br>
		<?php
		foreach ($names as $name) {
			echo $name.', ';
		}
		 ?>
	</p>
	<p>
		PHP:ssa ei ole 2-ulotteista taulukkoa, mutta sen voi toteuttaa kirjoittamalla taulukon sisään taulukoita.
	</p>
	<?php
	$persons=array(
		array("Jim","Jones"),
		array("Ann","Smith"),
		array("Bob","Simpson")
	);
	echo 'Toinen etunimi on '.$persons[1][0];
	?>
<h2>Assosiative array</h2>

<p>
	Tarkoittaa taulua, jossa alkiot on nimetty.
	<?php
	$assosiative=array(
		array("Etunimi"=>'Jim',"Sukunimi"=>'Jones'),
		array("Etunimi"=>'Ann',"Sukunimi"=>'Smith'),
		array("Etunimi"=>'Bob',"Sukunimi"=>'Simpson')
	);
 	?>
</p>
<p>
	Tulostetaan nimet foreach loopilla <br>
	<?php
	foreach ($assosiative as $row) {
		echo $row['Etunimi'].' '.$row['Sukunimi'].'<br>';
	}
	?>
</p>
<h2>html taulukko</h2>
<p>
	<table border="1">
		<thead>
			<tr>
				<th>Etunimi</th> <th>Sukunimi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Matti</td> <td>Mainio</td>
			</tr>
			<?php
			foreach ($assosiative as $row) {
				echo '<tr>';
				echo '<td>'.$row['Etunimi'].'</td> <td>'.$row['Sukunimi'].'</td>';
				echo '</tr>';
			}

			?>
		</tbody>

	</table>


</p>

<?php include "footer.php"; ?>
