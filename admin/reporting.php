<!DOCTYPE html>
<html>
<head>
	<title>Reporting</title>
	<!-- stylesheet for datatable --> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
<!-- stylesheet for exporting buttons --> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
<!-- script for jquery --> 
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>
<div class="span7" style="margin: 100px;">   
<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
				
					<h3>Registered Users</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered" id="example">
						<thead>
                        
							<tr>
								<th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>City</th>
                                <th>Country</th>
                                
							</tr>
						</thead>
						<tbody>
                                 
                        <?php
                        include '../db.php';
                        $q = mysqli_query($conn,"select * from tbluser");
                            while($row=mysqli_fetch_array($q)){
                              
                            
                            ?>  
					<tr> 
                            <td><?php  echo "$row[1]"; ?></td>
                            <td><?php  echo "$row[2]"; ?></td>
                            <td><?php  echo "$row[3]"; ?></td>
                            <td><?php  echo "$row[4]"; ?></td>
                            <td><?php  echo "$row[5]"; ?></td>
                            <td><?php  echo "$row[6]"; ?></td>
                        
                           </tr>
     
                            <?php } ?>
							</tbody>
						</table>
					
                        <a href="signup.html" class="btn btn-info">Back</a>
				</div> <!-- /widget-content -->
			
			</div> <!-- /widget -->
            </div>
</body>
<!-- script for table -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
<!-- script for button -->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script> 	
<!-- script for print button --> 
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
<!-- script for excel button --> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<!-- script for pdf button --> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
</html>