<?php require_once "includes/header.php"; ?>

    <?php require_once "includes/banner.php" ?>
    <?php
        if(is_user_logged_in()) {
            header("Location: index.php");
        }
    ?>
  
	<div class="about-section section-padding admission-section">
		<div class="container">
            <div class="row">
               <div class="col-md-4 col-md-offset-4">
                <?php $login_error = user_login(); ?>
                   <h4><strong>Kyçu këtu</strong></h4>
                   <?php
                    if(!empty($login_error)) {
                      echo "<h3 class='bg-danger'>{$login_error}</h3>";
                    }
                   ?>
                   <form action="" method="post">
                       <div class="form-group">
                           <label for="">Përdoruesi</label>
                            <input type="email" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                                <label for="">Fjalëkalimi</label>
                                 <input type="password" class="form-control" name="user_password">
                             </div>
                       <div class="form-group">
                            <label for="">Roli i përdoruesit</label>
                           <select name="user_role" id="" class="form-control">
                               <option value="">Zgjedhni rolin tuaj</option>
                               <option value="administrator">Administrator</option>
                               <option value="teacher">Mësimdhënës</option>
                               <option value="student">Nxënës</option>
                           </select>
                       </div>
                       <div class="form-group">
                           <input type="submit" class="btn btn-success" name="user_login" value="Kyçu">
                       </div>
                   </form>
               </div>
            </div>
        </div>
    </div>

<?php require_once "includes/footer.php"; ?>