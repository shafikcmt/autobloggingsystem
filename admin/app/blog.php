

  <?php
    include '../inc/config.php';
    include '../inc/Database.php';
  ?>

<?php
$db = new Database();
$query = "SELECT * FROM blog";
$read = $db->select($query);
?>

<?php include '../inc/head.php'; ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="container">
          <div class="card bg-light shadow p-3">
          
            <div class="card-body">
            <h4 class="text-center">Geeta University BLOG</h4>
           
            <div class="row">
             <?php if($read){ ?>
                  <?php 
                  $i=0;              
                  while($row = $read->fetch_assoc()){ 
                  $i++;
              ?>
            <div class="col-md-3 mg-t-20">
              <div class="card bd-0">
                <div class="card-header bg-warning">
                <?php echo $row['title']; ?>
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0"><?php echo $row['seo_description']; ?></p>
                </div><!-- card-body -->
              <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Read More</a>
              </div><!-- card -->
            </div><!-- col -->  
              
            <?php } ?>
                <?php }else{ ?>
                <p>Data is not Found!</p>
                <?php } ?>       
            </div>
              
            </div>
          </div>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>

    <script src="../js/starlight.js"></script>

  </body>
</html>
