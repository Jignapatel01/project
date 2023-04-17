<?php
session_start();
?>

<!-- navigation -->
<section id="navigation">
     <div class="container-fluid ">
        <!-- logo start here -->
       <div class="row">
            <div class="col-sm-2 m-2 ">
       <a href="index.php"> <img src="image/royal logo1.png" alt="Maruti" width="90%" height="60px"/></a>
    </div>

    
         <!-- menu start here -->
        <div class="col-md-9">
         <nav class="navbar navbar-expand-lg">
            <button type="button" class="navbar-toggler btn-white bg-white" data-bs-toggle="collapse" data-bs-target="#coll">
                <span class="bi bi-grid-3x2-gap-fill"></span>
            </button>
        <div class="collapse navbar-collapse" id="coll">
            <div class="navbar-link">
             <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#menu">Menu</a></li>
                    <li><a href="index.php#special">Specials</a></li>
                    <li><a href="index.php#event">Events</a></li>
                    <li><a href="index.php#gallery">Gallery</a></li>
                    <li><a href="index.php#chefs">Chefs</a></li>
                    <?php
                        if(!isset($_SESSION["email"]))
                        {
                    ?>
                    <li class="dropdown"><a class="dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#"> <i class="bi bi-person"></i>Account</a>  
                      <ul class="dropdown-menu bg-light border border-0 ">
                        <li> <a href="login.php" class="bi bi-person">SignIn</a></li>
                        <li> <a href="Register.php"><i class="bi bi-person "></i> SignUp! </a></li>
                      </ul>
                    
                    </li>
                    <?php
                        }
                        else
                        {
                    ?>
                        <li class="dropdown "><a class="dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#"> <i class="bi bi-person"></i>
                            welcome <?php echo ucfirst(rtrim($_SESSION["email"],"@gmail.com")); ?> </a>  
                         <ul class="dropdown-menu bg-light border border-0">
                        <li> <a href="#" class="bi bi-person">manage profile</a></li>
                        <li> <a href="logout.php"><i class="bi bi-person "></i> logout </a></li>
                      </ul>
                    
                    </li>
                    <?php
                        }
                    ?>   
                    <li><a href="#contc">Contact</a></li>
                    <!-- <div class="bktbl"> -->
                    <!-- <button type="button" class="btn btn-danger btn-md ms-5">Book Table</button></div> -->
                </ul>
                
            </div>
        </div>
        </div>
    </div>
        
    </nav>

</div>

</section> 
