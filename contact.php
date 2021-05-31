
<?php require_once "includes/header.php"; ?>
	<?php require_once "includes/banner.php" ?>
  
	<div class="about-section section-padding admission-section">
		<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><strong>Adresa Jonë</strong></h4>
                    <?php echo get_school_address(); ?>
                    <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Nerashte+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
                </div>
               <div class="col-md-6">
                   <form action="" method="post">
                       <div class="form-group">
                           <label for="">Emri</label>
                           <input type="text" name="emri-juaj" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="">Email</label>
                           <input type="text" name="emaili-jauj" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="">Mesazhi</label>
                           <textarea name="mesazhi-juaj" id="" cols="30" rows="10" class="form-control"></textarea>
                       </div>
                       <div class="form-group">
                           <input type="submit" class="btn btn-success" name="contact-form" value="Dërgo">
                       </div>
                   </form>
               </div>
            </div>
        </div>
    </div>

<?php require_once "includes/footer.php"; ?>