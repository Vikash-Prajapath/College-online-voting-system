<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                </div>
                <hr/>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="alert alert-success">Election Report</h4>    
                    </div>
                    <br/>
                    <form method="post" action="sort.php">
                        <select name="position" id="position" class="form-control pull-left" style="width:300px;margin-left:19px;">
                            <option readonly>----Sort by Position----</option>
                            <option></option>
                            <option>College Captain</option>
                            <option>Cultural Captain</option>
                            <option>Sports Captain</option>
                            <option>Department Captain</option>
                            <option>Department Secretary</option>
                        </select>
                        &nbsp;&nbsp;
                        <button id="sort" class="btn btn-success">Sort</button>
                        <button type="button" onclick="window.print();" style="margin-right:14px;" id="print" class="pull-right btn btn-info"><i class="fa fa-print"></i> Print</button>
                        <a href="excel.php"><button type="button" style="margin-right:14px;" id="print" class="pull-right btn btn-info"><i class="fa fa-print"></i>Export to Excel</button></a>
                    </form>    
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                                <td style="width:600px;" class="alert alert-success">Candidate for College Captain</td>
                                <td style="width:200px;" class="alert alert-success">Image</td>
                                <td class="alert alert-success">Total</td>
                            </thead>
                            <?php
                                require 'dbcon.php';
                                $query = $conn->query("SELECT * FROM candidate WHERE position = 'College Captain'");
                                while($fetch = $query->fetch_array())
                                {
                                    $id = $fetch['candidate_id'];
                                    $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
                                    $fetch1 = $query1->fetch_assoc();
                            ?>
                            <tbody> 
                                <td><?php echo $fetch['firstname']. " ".$fetch['lastname'];?></td>
                                <td><img src="<?php echo $fetch['img'];?>" style="width:40px; height:40px; border-radius:500px;"></td>
                                <td style="width:20px; text-align:center"><button class="btn btn-primary" disabled><?php echo $fetch1['total'];?></button></td>
                            <?php }?>
                            </tbody>
                        </table>    
                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                                <td style="width:600px;" class="alert alert-success">Candidate for Cultural Captain</td>
                                <td style="width:200px;" class="alert alert-success">Image</td>
                                <td class="alert alert-success">Total</td>
                            </thead>
                            <?php
                                require 'dbcon.php';
                                $query = $conn->query("SELECT * FROM candidate WHERE position = 'Cultural Captain'");
                                while($fetch = $query->fetch_array())
                                {
                                    $id = $fetch['candidate_id'];
                                    $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
                                    $fetch1 = $query1->fetch_assoc();
                            ?>
                            <tbody> 
                                <td><?php echo $fetch['firstname']. " ".$fetch['lastname'];?></td>
                                <td><img src="<?php echo $fetch['img'];?>" style="width:40px; height:40px; border-radius:500px;"></td>
                                <td style="width:20px; text-align:center"><button class="btn btn-primary" disabled><?php echo $fetch1['total'];?></button></td>
                            <?php }?>
                            </tbody>
                        </table>    
                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                                <td style="width:600px;" class="alert alert-success">Candidate for Sports Captain</td>
                                <td style="width:200px;" class="alert alert-success">Image</td>
                                <td class="alert alert-success">Total</td>
                            </thead>
                            <?php
                                require 'dbcon.php';
                                $query = $conn->query("SELECT * FROM candidate WHERE position = 'Sports Captain'");
                                while($fetch = $query->fetch_array())
                                {
                                    $id = $fetch['candidate_id'];
                                    $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
                                    $fetch1 = $query1->fetch_assoc();
                            ?>
                            <tbody> 
                                <td><?php echo $fetch['firstname']. " ".$fetch['lastname'];?></td>
                                <td><img src="<?php echo $fetch['img'];?>" style="width:40px; height:40px; border-radius:500px;"></td>
                                <td style="width:20px; text-align:center"><button class="btn btn-primary" disabled><?php echo $fetch1['total'];?></button></td>
                            <?php }?>
                            </tbody>
                        </table>        
                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                                <td style="width:600px;" class="alert alert-success">Candidate for Department Captain</td>
                                <td style="width:200px;" class="alert alert-success">Image</td>
                                <td class="alert alert-success">Total</td>
                            </thead>
                            <?php
                                require 'dbcon.php';
                                $query = $conn->query("SELECT * FROM candidate WHERE position = 'Department Captain'");
                                while($fetch = $query->fetch_array())
                                {
                                    $id = $fetch['candidate_id'];
                                    $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
                                    $fetch1 = $query1->fetch_assoc();
                            ?>
                            <tbody> 
                                <td><?php echo $fetch['firstname']. " ".$fetch['lastname'];?></td>
                                <td><img src="<?php echo $fetch['img'];?>" style="width:40px; height:40px; border-radius:500px;"></td>
                                <td style="width:20px; text-align:center"><button class="btn btn-primary" disabled><?php echo $fetch1['total'];?></button></td>
                            <?php }?>
                            </tbody>
                        </table>    
                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                                <td style="width:600px;" class="alert alert-success">Candidate for Department Secretary</td>
                                <td style="width:200px;" class="alert alert-success">Image</td>
                                <td class="alert alert-success">Total</td>
                            </thead>
                            <?php
                                require 'dbcon.php';
                                $query = $conn->query("SELECT * FROM candidate WHERE position = 'Department Secretary'");
                                while($fetch = $query->fetch_array())
                                {
                                    $id = $fetch['candidate_id'];
                                    $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
                                    $fetch1 = $query1->fetch_assoc();
                            ?>
                            <tbody> 
                                <td><?php echo $fetch['firstname']. " ".$fetch['lastname'];?></td>
                                <td><img src="<?php echo $fetch['img'];?>" style="width:40px; height:40px; border-radius:500px;"></td>
                                <td style="width:20px; text-align:center"><button class="btn btn-primary" disabled><?php echo $fetch1['total'];?></button></td>
                            <?php }?>
                            </tbody>
                        </table>    
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <?php include ('script.php');?>
</body>
</html>
