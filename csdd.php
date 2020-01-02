<?php
include("db.php");
$country = mysqli_query($conn,"SELECT * FROM `country`");
$city = mysqli_query($conn,"SELECT * FROM `city`");
$fet_city = mysqli_fetch_all($city);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cascading Drop Down</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
</head>
<body>
<SELECT name="country" id="country">
	
<option value="" disabled="" selected>Select Country</option>}
<?php
while($fet_country = mysqli_fetch_array($country)){
echo "<option value='".$fet_country['id']."'>".$fet_country['name']."</option>";
}
?>
</SELECT>
<select name="city" id="city">
	<option value="" disabled selected="">Select City</option>
	<script>
		$(document).ready(function(){
			$(document).on("change","#country",function(){
				$('#city').empty();
				$('#city').append(`<option value="" disabled selected="">Select City</option>`);
				var c_id = $(this).val();
				var city = <?php echo json_encode($fet_city) ;?>;
				$(city).each(function(index,val){
					if(c_id==val[1]){
						$('#city').append(`<option value='${val[0]}'>${val[2]}</option>`);
					}
				});
			});
		});
	</script>
</select>
</body>
</html>