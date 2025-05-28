<?php include('head.php'); ?>
<body>
  <div id="wrapper">
    <?php include('view_banner.php'); ?>
    
    <div id="page-wrapper">
      <!-- HERO -->
      <section class="hero">
        <h1><b>Your Vote Shapes the Future</b></h1>
        <p><h4>Select a candidate group below to see who’s running.</h4></p>
      </section>

      <!-- DROPDOWN -->
      <section class="dropdown-section">
        <form method="post" action="">
          <select name="group" style="font-size: 1.5rem;" onchange="if(this.value) window.location=this.value">
            <option disabled selected>Select Candidate Group</option>
            <option value="candidates/college_captain.php">College Captain</option>
            <option value="candidates/cultural_captain.php">Cultural Captain</option>
            <option value="candidates/sports_captain.php">Sports Captain</option>
            <option value="candidates/department_captain.php">Department Captain</option>
            <option value="candidates/department_secretary.php">Department Secretary</option>
          </select>
        </form>
      </section>

     
    </div><!-- /#page-wrapper -->
  </div><!-- /#wrapper -->



</body>
</html>
