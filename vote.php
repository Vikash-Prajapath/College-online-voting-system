<?php include ('head.php');?>
<?php include("sess.php");?>
<body>
	<?php include 'side_bar.php'; ?>
    <div id="wrapper">
    </div>
	<form method="POST" action="vote_result.php">
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading"><center>COLLEGE CAPTAIN</center></div>
				<div class="panel-body" style="background-color:;">
					<div style="display:flex; justify-content: space-between;">
						<div style="width:48%;">
							<h4>Female Candidates</h4>
							<?php
								$query_female = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'College Captain' AND `gender` = 'Female'") or die(mysqli_errno());
								while($fetch = $query_female->fetch_array()){
							?>
							<div id="position" style="margin-bottom: 15px;">
								<center><img src="admin/<?php echo $fetch['img']?>" style="border-radius:6px;" height="150px" width="150px" class="img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Level: </strong>".$fetch['year_level']."<br/><strong>Party: </strong>".$fetch['party']?></center>
								<center><input type="checkbox" value="<?php echo $fetch['candidate_id'] ?>" name="college_captain_female_id" class="college_captain_female">Give Vote</center>
							</div>
							<?php } ?>
						</div>
						<div style="width:48%;">
							<h4>Male Candidates</h4>
							<?php
								$query_male = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'College Captain' AND `gender` = 'Male'") or die(mysqli_errno());
								while($fetch = $query_male->fetch_array()){
							?>
							<div id="position" style="margin-bottom: 15px;">
								<center><img src="admin/<?php echo $fetch['img']?>" style="border-radius:6px;" height="150px" width="150px" class="img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Level: </strong>".$fetch['year_level']."<br/><strong>Party: </strong>".$fetch['party']?></center>
								<center><input type="checkbox" value="<?php echo $fetch['candidate_id'] ?>" name="college_captain_male_id" class="college_captain_male">Give Vote</center>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading"><center>CULTURAL CAPTAIN</center></div>
				<div class="panel-body" style="background-color:;">
					<div style="display:flex; justify-content: space-between;">
						<div style="width:48%;">
							<h4>Female Candidates</h4>
							<?php
								$query_female = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Cultural Captain' AND `gender` = 'Female'") or die(mysqli_errno());
								while($fetch = $query_female->fetch_array()){
							?>
							<div id="position" style="margin-bottom: 15px;">
								<center><img src="admin/<?php echo $fetch['img']?>" style="border-radius:6px;" height="150px" width="150px" class="img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Level: </strong>".$fetch['year_level']."<br/><strong>Party: </strong>".$fetch['party']?></center>
								<center><input type="checkbox" value="<?php echo $fetch['candidate_id'] ?>" name="cultural_captain_female_id" class="cultural_captain_female">Give Vote</center>
							</div>
							<?php } ?>
						</div>
						<div style="width:48%;">
							<h4>Male Candidates</h4>
							<?php
								$query_male = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Cultural Captain' AND `gender` = 'Male'") or die(mysqli_errno());
								while($fetch = $query_male->fetch_array()){
							?>
							<div id="position" style="margin-bottom: 15px;">
								<center><img src="admin/<?php echo $fetch['img']?>" style="border-radius:6px;" height="150px" width="150px" class="img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Level: </strong>".$fetch['year_level']."<br/><strong>Party: </strong>".$fetch['party']?></center>
								<center><input type="checkbox" value="<?php echo $fetch['candidate_id'] ?>" name="cultural_captain_male_id" class="cultural_captain_male">Give Vote</center>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading"><center>SPORTS CAPTAIN</center></div>
				<div class="panel-body" style="background-color:;">
					<div style="display:flex; justify-content: space-between;">
						<div style="width:48%;">
							<h4>Female Candidates</h4>
							<?php
								$query_female = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Sports Captain' AND `gender` = 'Female'") or die(mysqli_errno());
								while($fetch = $query_female->fetch_array()){
							?>
							<div id="position" style="margin-bottom: 15px;">
								<center><img src="admin/<?php echo $fetch['img']?>" style="border-radius:6px;" height="150px" width="150px" class="img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Level: </strong>".$fetch['year_level']."<br/><strong>Party: </strong>".$fetch['party']?></center>
								<center><input type="checkbox" value="<?php echo $fetch['candidate_id'] ?>" name="sports_captain_female_id" class="sports_captain_female">Give Vote</center>
							</div>
							<?php } ?>
						</div>
						<div style="width:48%;">
							<h4>Male Candidates</h4>
							<?php
								$query_male = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Sports Captain' AND `gender` = 'Male'") or die(mysqli_errno());
								while($fetch = $query_male->fetch_array()){
							?>
							<div id="position" style="margin-bottom: 15px;">
								<center><img src="admin/<?php echo $fetch['img']?>" style="border-radius:6px;" height="150px" width="150px" class="img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Level: </strong>".$fetch['year_level']."<br/><strong>Party: </strong>".$fetch['party']?></center>
								<center><input type="checkbox" value="<?php echo $fetch['candidate_id'] ?>" name="sports_captain_male_id" class="sports_captain_male">Give Vote</center>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading"><center>DEPARTMENT CAPTAIN</center></div>
				<div class="panel-body" style="background-color:;">
					<div style="display:flex; justify-content: space-between;">
						<div style="width:48%;">
							<h4>Female Candidates</h4>
							<?php
								$query_female = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Department Captain' AND `gender` = 'Female'") or die(mysqli_errno());
								while($fetch = $query_female->fetch_array()){
							?>
							<div id="position" style="margin-bottom: 15px;">
								<center><img src="admin/<?php echo $fetch['img']?>" style="border-radius:6px;" height="150px" width="150px" class="img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Level: </strong>".$fetch['year_level']."<br/><strong>Party: </strong>".$fetch['party']?></center>
								<center><input type="checkbox" value="<?php echo $fetch['candidate_id'] ?>" name="department_captain_female_id" class="department_captain_female">Give Vote</center>
							</div>
							<?php } ?>
						</div>
						<div style="width:48%;">
							<h4>Male Candidates</h4>
							<?php
								$query_male = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Department Captain' AND `gender` = 'Male'") or die(mysqli_errno());
								while($fetch = $query_male->fetch_array()){
							?>
							<div id="position" style="margin-bottom: 15px;">
								<center><img src="admin/<?php echo $fetch['img']?>" style="border-radius:6px;" height="150px" width="150px" class="img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Level: </strong>".$fetch['year_level']."<br/><strong>Party: </strong>".$fetch['party']?></center>
								<center><input type="checkbox" value="<?php echo $fetch['candidate_id'] ?>" name="department_captain_male_id" class="department_captain_male">Give Vote</center>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading"><center>DEPARTMENT SECRETARY</center></div>
				<div class="panel-body" style="background-color:;">
					<div style="display:flex; justify-content: space-between;">
						<div style="width:48%;">
							<h4>Female Candidates</h4>
							<?php
								$query_female = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Department Secretary' AND `gender` = 'Female'") or die(mysqli_errno());
								while($fetch = $query_female->fetch_array()){
							?>
							<div id="position" style="margin-bottom: 15px;">
								<center><img src="admin/<?php echo $fetch['img']?>" style="border-radius:6px;" height="150px" width="150px" class="img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Level: </strong>".$fetch['year_level']."<br/><strong>Party: </strong>".$fetch['party']?></center>
								<center><input type="checkbox" value="<?php echo $fetch['candidate_id'] ?>" name="department_secretary_female_id" class="department_secretary_female">Give Vote</center>
							</div>
							<?php } ?>
						</div>
						<div style="width:48%;">
							<h4>Male Candidates</h4>
							<?php
								$query_male = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Department Secretary' AND `gender` = 'Male'") or die(mysqli_errno());
								while($fetch = $query_male->fetch_array()){
							?>
							<div id="position" style="margin-bottom: 15px;">
								<center><img src="admin/<?php echo $fetch['img']?>" style="border-radius:6px;" height="150px" width="150px" class="img"></center>
								<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Level: </strong>".$fetch['year_level']."<br/><strong>Party: </strong>".$fetch['party']?></center>
								<center><input type="checkbox" value="<?php echo $fetch['candidate_id'] ?>" name="department_secretary_male_id" class="department_secretary_male">Give Vote</center>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<hr/>

		<center><button class="btn btn-success ballot" type="submit" name="submit">Submit Ballot</button></center>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</form>
</body>
<?php include ('script.php');?>

<script type="text/javascript">
	$(document).ready(function(){
		$(".college_captain_male").on("change", function(){
			if($(".college_captain_male:checked").length == 1){
				$(".college_captain_male").attr("disabled", "disabled");
				$(".college_captain_male:checked").removeAttr("disabled");
			} else {
				$(".college_captain_male").removeAttr("disabled");
			}
		});
		$(".college_captain_female").on("change", function(){
			if($(".college_captain_female:checked").length == 1){
				$(".college_captain_female").attr("disabled", "disabled");
				$(".college_captain_female:checked").removeAttr("disabled");
			} else {
				$(".college_captain_female").removeAttr("disabled");
			}
		});
		$(".cultural_captain_male").on("change", function(){
			if($(".cultural_captain_male:checked").length == 1){
				$(".cultural_captain_male").attr("disabled", "disabled");
				$(".cultural_captain_male:checked").removeAttr("disabled");
			} else {
				$(".cultural_captain_male").removeAttr("disabled");
			}
		});
		$(".cultural_captain_female").on("change", function(){
			if($(".cultural_captain_female:checked").length == 1){
				$(".cultural_captain_female").attr("disabled", "disabled");
				$(".cultural_captain_female:checked").removeAttr("disabled");
			} else {
				$(".cultural_captain_female").removeAttr("disabled");
			}
		});
		$(".sports_captain_male").on("change", function(){
			if($(".sports_captain_male:checked").length == 1){
				$(".sports_captain_male").attr("disabled", "disabled");
				$(".sports_captain_male:checked").removeAttr("disabled");
			} else {
				$(".sports_captain_male").removeAttr("disabled");
			}
		});
		$(".sports_captain_female").on("change", function(){
			if($(".sports_captain_female:checked").length == 1){
				$(".sports_captain_female").attr("disabled", "disabled");
				$(".sports_captain_female:checked").removeAttr("disabled");
			} else {
				$(".sports_captain_female").removeAttr("disabled");
			}
		});
		$(".department_captain_male").on("change", function(){
			if($(".department_captain_male:checked").length == 1){
				$(".department_captain_male").attr("disabled", "disabled");
				$(".department_captain_male:checked").removeAttr("disabled");
			} else {
				$(".department_captain_male").removeAttr("disabled");
			}
		});
		$(".department_captain_female").on("change", function(){
			if($(".department_captain_female:checked").length == 1){
				$(".department_captain_female").attr("disabled", "disabled");
				$(".department_captain_female:checked").removeAttr("disabled");
			} else {
				$(".department_captain_female").removeAttr("disabled");
			}
		});
		$(".department_secretary_male").on("change", function(){
			if($(".department_secretary_male:checked").length == 1){
				$(".department_secretary_male").attr("disabled", "disabled");
				$(".department_secretary_male:checked").removeAttr("disabled");
			} else {
				$(".department_secretary_male").removeAttr("disabled");
			}
		});
		$(".department_secretary_female").on("change", function(){
			if($(".department_secretary_female:checked").length == 1){
				$(".department_secretary_female").attr("disabled", "disabled");
				$(".department_secretary_female:checked").removeAttr("disabled");
			} else {
				$(".department_secretary_female").removeAttr("disabled");
			}
		});
	});	
</script>
</html>
