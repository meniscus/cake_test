<h1>title</h1>
<table>
	<tr>
		<th>column1</th>
		<th>column2</th>
		<th>column3</th>
	</tr>

<?php 
foreach($cruds as $crud) {
		foreach($crud as $row) {
				echo '<tr>';
				foreach ($row as $col) {
						echo '<td>' . $col . '</td>';
				}
				echo '</tr>';
		}
}
?>
</table>
