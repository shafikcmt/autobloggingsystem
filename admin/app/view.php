

<?php
    include '../inc/config.php';
    include '../inc/Database.php';
  ?>

<?php 
$id = $_GET['id'];
$db = new Database();
$query = "SELECT * FROM blog WHERE id=$id";
$getData = $db->select($query)->fetch_assoc();



?>

<?php include '../inc/head.php'; ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="container">
          <div class="card bg-light shadow p-3">
          
            <div class="card-body">
            <h4 class="text-center">Geeta University BLOG</h4>
           
            <div class="row">
            
            <div class="col-md-12 mg-t-20">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-warning">
                <?php echo $getData['title']; ?>
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0"><?php echo $getData['content']; ?></p>
                </div><!-- card-body -->
            
              </div><!-- card -->
            </div><!-- col -->  
              
           
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
