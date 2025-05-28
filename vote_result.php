<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>
<?php include 'side_bar.php'; ?>
    <div id="row">
        <?php
			if(ISSET($_POST['submit']))
				{
					// College Captain male and female
					if(!ISSET($_POST['college_captain_male_id']) || !ISSET($_POST['college_captain_female_id']))
					{
						$_SESSION['college_captain_male_id'] = "";
						$_SESSION['college_captain_female_id'] = "";
					}
					else
					{
						$_SESSION['college_captain_male_id'] = $_POST['college_captain_male_id'];
						$_SESSION['college_captain_female_id'] = $_POST['college_captain_female_id'];
					}
					// Cultural Captain male and female
					if(!ISSET($_POST['cultural_captain_male_id']) || !ISSET($_POST['cultural_captain_female_id']))
					{
						$_SESSION['cultural_captain_male_id'] = "";
						$_SESSION['cultural_captain_female_id'] = "";
					}
					else
					{
						$_SESSION['cultural_captain_male_id'] = $_POST['cultural_captain_male_id'];
						$_SESSION['cultural_captain_female_id'] = $_POST['cultural_captain_female_id'];
					}
					// Sports Captain male and female
					if(!ISSET($_POST['sports_captain_male_id']) || !ISSET($_POST['sports_captain_female_id']))
					{
						$_SESSION['sports_captain_male_id'] = "";
						$_SESSION['sports_captain_female_id'] = "";
					}
					else
					{
						$_SESSION['sports_captain_male_id'] = $_POST['sports_captain_male_id'];
						$_SESSION['sports_captain_female_id'] = $_POST['sports_captain_female_id'];
					}
					// Department Captain male and female
					if(!ISSET($_POST['department_captain_male_id']) || !ISSET($_POST['department_captain_female_id']))
					{
						$_SESSION['department_captain_male_id'] = "";
						$_SESSION['department_captain_female_id'] = "";
					}
					else
					{
						$_SESSION['department_captain_male_id'] = $_POST['department_captain_male_id'];
						$_SESSION['department_captain_female_id'] = $_POST['department_captain_female_id'];
					}
					// Department Secretary male and female
					if(!ISSET($_POST['department_secretary_male_id']) || !ISSET($_POST['department_secretary_female_id']))
					{
						$_SESSION['department_secretary_male_id'] = "";
						$_SESSION['department_secretary_female_id'] = "";
					}
					else
					{
						$_SESSION['department_secretary_male_id'] = $_POST['department_secretary_male_id'];
						$_SESSION['department_secretary_female_id'] = $_POST['department_secretary_female_id'];
					}
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style="margin-left:25%; margin-right:25%;">
		  
		  <div class="alert alert-info">
			<div class="panel-heading"><center>COLLEGE CAPTAIN</center></div>
			<br />
			<?php
				if(!$_SESSION['college_captain_male_id'] && !$_SESSION['college_captain_female_id'])
					{
						
					}
				else
					{
						if($_SESSION['college_captain_male_id']){
							$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[college_captain_male_id]'")->fetch_array();
							echo $fetch['firstname']." ".$fetch['lastname']." "."<img src='admin/".$fetch['img']."' style='height:80px; width:80px; border-radius:500px;' />"; 
						}
						if($_SESSION['college_captain_female_id']){
							$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[college_captain_female_id]'")->fetch_array();
							echo $fetch['firstname']." ".$fetch['lastname']." "."<img src='admin/".$fetch['img']."' style='height:80px; width:80px; border-radius:500px;' />"; 
						}
					}
			?>
			</div>
			
			<div class="alert alert-success">
			<div class="panel-heading"><center>CULTURAL CAPTAIN</center></div>
			<br />
			<?php
				if(!$_SESSION['cultural_captain_male_id'] && !$_SESSION['cultural_captain_female_id'])
					{
						
					}
				else
					{
						if($_SESSION['cultural_captain_male_id']){
							$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[cultural_captain_male_id]'")->fetch_array();
							echo $fetch['firstname']." ".$fetch['lastname']." "."<img src='admin/".$fetch['img']."' style='height:80px; width:80px; border-radius:500px;' />"; 
						}
						if($_SESSION['cultural_captain_female_id']){
							$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[cultural_captain_female_id]'")->fetch_array();
							echo $fetch['firstname']." ".$fetch['lastname']." "."<img src='admin/".$fetch['img']."' style='height:80px; width:80px; border-radius:500px;' />"; 
						}
					}
			?>
			</div>
			
			<div class="alert alert-info">
			<div class="panel-heading"><center>SPORTS CAPTAIN</center></div>
			<br />
			<?php
				if(!$_SESSION['sports_captain_male_id'] && !$_SESSION['sports_captain_female_id'])
					{
						
					}
				else
					{
						if($_SESSION['sports_captain_male_id']){
							$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sports_captain_male_id]'")->fetch_array();
							echo $fetch['firstname']." ".$fetch['lastname']." "."<img src='admin/".$fetch['img']."' style='height:80px; width:80px; border-radius:500px;' />"; 
						}
						if($_SESSION['sports_captain_female_id']){
							$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sports_captain_female_id]'")->fetch_array();
							echo $fetch['firstname']." ".$fetch['lastname']." "."<img src='admin/".$fetch['img']."' style='height:80px; width:80px; border-radius:500px;' />"; 
						}
					}
			?>
			</div>
			
			<div class="alert alert-success">
			<div class="panel-heading"><center>DEPARTMENT CAPTAIN</center></div>
			<br />
			<?php
				if(!$_SESSION['department_captain_male_id'] && !$_SESSION['department_captain_female_id'])
					{
						
					}
				else
					{
						if($_SESSION['department_captain_male_id']){
							$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[department_captain_male_id]'")->fetch_array();
							echo $fetch['firstname']." ".$fetch['lastname']." "."<img src='admin/".$fetch['img']."' style='height:80px; width:80px; border-radius:500px;' />"; 
						}
						if($_SESSION['department_captain_female_id']){
							$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[department_captain_female_id]'")->fetch_array();
							echo $fetch['firstname']." ".$fetch['lastname']." "."<img src='admin/".$fetch['img']."' style='height:80px; width:80px; border-radius:500px;' />"; 
						}
					}
			?>
			</div>
			
			<div class="alert alert-info">
			<div class="panel-heading"><center>DEPARTMENT SECRETARY</center></div>
			<br />
			<?php
				if(!$_SESSION['department_secretary_male_id'] && !$_SESSION['department_secretary_female_id'])
					{
						
					}
				else
					{
						if($_SESSION['department_secretary_male_id']){
							$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[department_secretary_male_id]'")->fetch_array();
							echo $fetch['firstname']." ".$fetch['lastname']." "."<img src='admin/".$fetch['img']."' style='height:80px; width:80px; border-radius:500px;' />"; 
						}
						if($_SESSION['department_secretary_female_id']){
							$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[department_secretary_female_id]'")->fetch_array();
							echo $fetch['firstname']." ".$fetch['lastname']." "."<img src='admin/".$fetch['img']."' style='height:80px; width:80px; border-radius:500px;' />"; 
						}
					}
			?>
			</div>
			<br />
			</div>
	</center>
                                    <div class="modal-body">
										<p><center>Are you sure you want to submit your Votes? </center></p>
                                    </div>
									
			<div class="modal-footer"><center>
		<form method="post" action="submit_vote.php">
			<button type="submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button>
			<a href="vote.php"><button type="button" class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
		</form>
			</center></div>
                                    <!-- /.modal-content -->
                                
                                <!-- /.modal-dialog -->
                            

</body>

<?php include ('script.php');
include ('footer.php');?>
</html>
