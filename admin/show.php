<?php
// include("../db.php");
include('header.php');
$q = mysqli_query($conn,"select * from tbluser");

?>
<div class="col-md-9">
<div class="span7" style="margin: 100px;">   
<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
				
					<h3>Registered Users</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered">
						<thead>
                        
							<tr>
								<th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>City</th>
                                <th>Country</th>
                                <th style="width:250px;">Actions</th>
								<th class="td-actions"></th>
							</tr>
						</thead>
						<tbody>
                                 
                        <?php
                            while($row=mysqli_fetch_array($q)){
                              
                            
                            ?>  
					<tr> 
                            <td><?php  echo "$row[1]"; ?></td>
                            <td><?php  echo "$row[2]"; ?></td>
                            <td><?php  echo "$row[3]"; ?></td>
                            <td><?php  echo "$row[4]"; ?></td>
                            <td><?php  echo "$row[5]"; ?></td>
                            <td><?php  echo "$row[6]"; ?></td>
                            <td><?php echo "<img src='../upload/$row[9]' height='100px' width='100px'> ";?></td>
                      
                           <td><a href="update.php?id=<?php echo $row[0];?>" class="btn btn-primary">Update</a>&nbsp;<a href="../delete.php?id=<?php echo $row[0]; ?>" class="btn btn-danger">Delete</a></td>
                           </tr>
     
                            <?php } ?>
							</tbody>
						</table>
					
                        <a href="signup.html" class="btn btn-info">Back</a>
				</div> <!-- /widget-content -->
			
			</div> <!-- /widget -->
            </div>
            </div>

<?php
include('footer.php');

?>