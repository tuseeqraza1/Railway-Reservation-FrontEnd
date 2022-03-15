<?php
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

    <div class="col-md-12">
        <h3 class="heading">Train Timings</h3>
        <div class="col-md-12">
            <div class="row" style="margin-top: 2em;">
                <div class="col-lg-2 col-12">
                    <div class="form-group">
                        <div class="text-right">
                            Train :
                        </div>
                    </div>
                </div> <!-- Train Name Heading -->

                <div class="col-lg-9 col-12">
                    <select class="btn-group bootstrap-select form-control" onchange="trainTiming(this.value)">
                        <option value="0">-- Select --</option>
                        <?php echo $options;?>
                    </select>
                </div> <!-- Search Timings Dropdown -->

                <!-- <div class="col-lg-3">
                    <div class="form-group">
                        <input type="submit" name="btnSearch" value="Search Timings" id="btnSearch" class="btn btn-success">
                    </div>
                </div> Search Button -->
            </div>
        </div>

        <div class="table table-responsive-md" id="result"></div>
    </div> <!-- Search Timings -->

    

    <div style="margin-top: 3em;">
        <div class="col-md-12">
            <h3 class="heading">Popular Destinations</h3>
        </div>
        <div class="row" style="padding: 0em 1em 0em 1em;">
            <div class="col-lg-4 col-6 destinations">
                <img id="PopularDestinations_destination1" class="img-fluid" src="images/des/destination1.jpg">
                <ul class="list-group">
                    <li class="list-group-item"><span class="badge">Upto 1250 Rs</span> From Lahore </li>
                    <li class="list-group-item"><span class="badge">Upto 1600 Rs</span> From Rawalpindi </li>
                    <li class="list-group-item"><span class="badge">Upto 950 Rs</span> From Multan </li>
                    <li class="list-group-item"><span class="badge">Upto 760 Rs</span> From Quetta </li>
                </ul>
            </div>
            <div class="col-lg-4 col-6 destinations">
                <img id="PopularDestinations_destination1" class="img-fluid" src="images/des/destination2.jpg">
                <ul class="list-group">
                    <li class="list-group-item"><span class="badge">Upto 1250 Rs</span> From Karachi </li>
                    <li class="list-group-item"><span class="badge">Upto 400 Rs</span> From Rawalpindi </li>
                    <li class="list-group-item"><span class="badge">Upto 440 Rs</span> From Multan </li>
                    <li class="list-group-item"><span class="badge">Upto 990 Rs</span> From Quetta </li>
                </ul>
            </div>
            <div class="col-lg-4 col-6 destinations">
                <img id="PopularDestinations_destination1" class="img-fluid" src="images/des/destination3.jpg">
                <ul class="list-group">
                    <li class="list-group-item"><span class="badge">Upto 1600 Rs</span> From Karachi </li>
                    <li class="list-group-item"><span class="badge">Upto 400 Rs</span> From Lahore </li>
                    <li class="list-group-item"><span class="badge">Upto 570 Rs</span> From Multan </li>                                    
                    <li class="list-group-item"><span class="badge">Upto 1540 Rs</span> From Quetta </li>
                </ul>
            </div>
        </div>
    </div> <!-- Popular Destinations -->

</div>