<!DOCTYPE html>
<?
	$people = array(
	   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
	);
?>
<html lang="en">
 <head>
 	<title>Application Test</title>
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 	<style>
 		table {
 		    border-collapse: collapse;
 		}
 		table, th, td {
 		    border: 1px solid black;
 		}
 	</style>
 	<script>
 		function showInfo(event){
 			id = event.value;
 			people = <?php echo json_encode($people) ?>;

 			for(var person in people) {
 				if(people[person].id == id){
 			    	alert(people[person].first_name + ' ' + people[person].last_name + ' Email: ' + people[person].email); 
 				} 
 			 }
 		}
 	</script>
 </head>
 <body>
 	<table>
 		<thead>
 		  <tr>
 		  	<th></th>
 		    <th>First Name</th>
 		    <th>Last Name</th>
 		    <th>Email</th>
 		  </tr>
 		</thead>
 		<tbody>
		<?
			foreach($people AS $person){
			?>
			<tr>
			<?
				foreach($person AS $key => $value){ 
					if($key == 'id'){ ?>
						<td><button type="button" value="<?= $value ?>" onClick="showInfo(this)" >Info</button>
				<?	} else{ ?>
					<td><?= $value ?></td>
			<?	}
					
			}

			?>
			</tr>
			<?
			}
		?>
		</tbody>
 	</table>
 </body>

</html>