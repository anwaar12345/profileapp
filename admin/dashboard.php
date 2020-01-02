<?php
include('header.php');
?>
        <div class="container">
    
        <div class="row" style="margin-top:50px;">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-12">
                    <h4><b><?php echo "$row[1] $row[2]";?></b></h4>
                    <h5><strong>Email: </strong> <?php echo "$row[3]";?> </h5>
                    <h5><strong>Gender: </strong><?php echo "$row[4]";?></h5>
                    <h5><strong>City: </strong>
                        <span class="tags"><?php echo "$row[5]";?></span> 
                    </h5>
                    <h5><strong>Country: </strong>
                        <span class="tags"><?php echo "$row[6]";?></span> 
                    </h5>
                </div> 
            </div>            
            
    	 </div>                 
		</div>
	</div>
</div>
<?php
include('footer.php');
?>