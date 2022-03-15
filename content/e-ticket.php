<?php
    session_start();
    include_once '../includes/class.user.php';
    
    $user = new User();

    if (!isset($_SESSION['login'])) {  
        // echo '<script type="text/javascript"> window.location.assign("index.php"); </script>';
        // echo "$(document).ready(function() {
        //         //initial page load
        //         $('#content').load('content/sign-in.php');
        //     });";
    }
    
    
    $conn = include('../includes/connect-db.inc.php');

    // mysql select query
    $query = "SELECT * FROM `train_details`";

    // Entering data
    $result = $conn->query($query);
    $options = "";
    $val ="";

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $concat = $row["train_id"]. ". " .$row["train_name"];
            $val = $row["train_id"];
            $options = $options. "<option value=$val >$concat</option>";
        }
    } else {
        $options = $options. "0 results";
    }

    $conn->close();
?>

<div>
    <div class="col-12">

        <div class="row">
            
            <div id="divSeatAvailability" class="col-12 row-mb">

                <div id="pnlSearch" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'btnSearch')">

                    <h3 class="heading">Seats Availability</h3>
                    <div class="col-12" style="margin-top: 3em;">
                        <div class="row" style="margin: 15px 0px 15px 0px;">
                            <div class="col-lg-3 col-12">
                                Departure Date <span style="color: red">*</span> :
                            </div>
                            <div class="col-lg-9 col-12">
                                <input name="txtDepartureDate" type="date" value="2020/01/05" id="txtDepartureDate" class="form-control datepicker">
                            </div>

                        </div>
                        <div class="row" style="margin: 15px 0px 15px 0px;">
                            <div class="col-lg-3 col-12">
                                From Station<span style="color: red">*</span>  :
                            </div>
                            <div class="col-lg-9 col-12">
                                <select name="ddlFromStationAv" id="ddlFromStationAv" class="form-control select2-hidden-accessible" 
                                onchange="getToStationList()" data-live-search="true" required="" style="width:100%;" tabindex="-1" 
                                aria-hidden="true">
                                    <option value="">--Select--</option>
                                    <option value="892">ABDUL HAKIM</option>
                                    <option value="555">ABDULLAHABAD (HALT)</option>
                                    <option value="765">AB-I-GUM</option>
                                    <option value="174">AHMEDWAL</option>
                                </select>
                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" 
                                        aria-expanded="false" tabindex="0" aria-labelledby="select2-ddlFromStationAv-container">
                                            <span class="select2-selection__rendered" id="select2-ddlFromStationAv-container" title="--Select--"></span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span>
                            </div>

                        </div>
                        <div class="row" style="margin: 15px 0px 15px 0px;">
                            <div class="col-lg-3 col-12">
                                To Station<span style="color: red">*</span>  :
                            </div>
                            <div class="col-lg-9 col-12">
                                <select name="ddlFromStationAv" id="ddlFromStationAv" class="form-control select2-hidden-accessible" 
                                onchange="getToStationList()" data-live-search="true" required="" style="width:100%;" tabindex="-1" 
                                aria-hidden="true">
                                <!-- <select class="btn-group bootstrap-select form-control" onchange="trainTiming(this.value)"> -->
                                    <option value="0">-- Select --</option>
                                    <?php echo $options;?>
                                </select> <!-- Search Timings Dropdown -->
                            </div>

                        </div>
                        <div class="row" style="margin: 15px 0px 15px 0px;">
                            <div class="col-lg-4 col-md-0"></div>
                            <div class="col-lg-4"">
                                <div class="form-group">
                                    <input type="submit" name="btnSearch" value="Search Seats" id="btnSearch" class="btn btn-success btn-block">
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
                
                <div id="AllTrains" class="col-md-12 col-sm-12 col-lg-12"></div>
            </div>
        </div>
    </div>
</div> <!-- E ticket form -->
    