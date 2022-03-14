
<div class="col-lg-3 col-12">
    <div style="margin-bottom: 20px;">
        <ul class="list-group"id="navClick">
            <?php
                if(isset($_SESSION['login'])) {

                    echo "<li class='list-group-item d-flex justify-content-center align-items-center list-group-item-success font-weight-bold'>
                            <h5>Profile</h5>
                        </li>
                        <li class='list-group-item'>
                        <div style='text-align: center; font-size: 15px;'>" . $_SESSION['username'] . "</div>";
                    echo "</li>
                        <li class='list-group-item'>";
                    echo"<div style='text-align: center; font-size: 15px;'>" . $_SESSION['cnic'] . "</div>";
                    echo "</li>
                        <li class='list-group-item'>";
                    echo "<div style='text-align: center; font-size: 15px;'>" . $_SESSION['email'] . "</div>";
                    echo "</li>
                        <li class='list-group-item'>";
                    echo "<div style='text-align: center; font-size: 15px;'>" . $_SESSION['mobile_no'] . "</div>";
                    echo "</li>";
                }
            ?>
            <?php
                if(isset($_SESSION['login'])) { ?>
            <li class='list-group-item'>
                <a href='../includes/user.logout'>
                <input class="btn btn-success btn-block" type="submit" name="submit" value="Sign Out"></a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="row mx-auto side-bar-images">
    
        <div>
            <a href="https://dla.pakrail.gov.pk/Admin/security/login" target="_blank">
                <img src="images/legalaffairs.png" class="img-fluid">
            </a>
        </div>

        <div>
            <a href="#"><img src="images/NABMessage.jpg" class="img-fluid"></a>
        </div>
        
        <div>
            <a href="#"><img src="images/Pension.png" class="img-fluid"></a>
        </div>
        
        <div>
            <a href="http://www.mohtasib.gov.pk/" target="_blank">
                <img src="images/PensionG.png" class="img-fluid">
            </a>
        </div>

    </div>
</div> <!-- Side Penal-->