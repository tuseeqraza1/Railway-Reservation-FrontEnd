<Div>
    <div id="container" class="container-fluid">
        <h3 class="heading">Registration Here</h3>
        
        <form action="includes/user.signup.php" method="post" name="reg">
            <table class="table">
            <tr>
                <th>Full Name <span style="color: red">*</span> :</th>
                <td>
                <input type="text" name="full_name" placeholder='John Smith' size="40"  required>
                </td>
            </tr>
            <tr>
                <th>MobileNO <span style="color: red">*</span> :</th>
                <td>
                <input type="tel" name="mobile_no" size="40" onkeypress="return isNumber(event)" onblur= "check(this.value)" pattern="[923]{1}[0-9]{11}" maxlength="12" placeholder= '923xxxxxxxxx e.g. 923345645645' required>
                <span style='color:red' id="errorname"></span>
                </td>
            </tr>
            <tr>
                <th>Email <span style="color: red">*</span> :</th>
                <td>
                <input type="email" id='emailFirst' name="emial_id" size="40" placeholder='xxx@xxx.com e.g. abc@gmail.com' required>
                </td>
            </tr>
            <tr>
            <tr>
                <th>Retype Email <span style="color: red">*</span> :</th>
                <td>
                <input type="email" id='emailSecond' name="retype_email" size="40" onblur= "confirmEmail()" placeholder='xxx@xxx.com e.g. abc@gmail.com' required>
                <span style='color:red' id="errorname1"></span>
                </td>
            </tr>
            <tr>
                <th>CNIC NO <span style="color: red">*</span> :</th>
                <td>
                <input type="tel" name="cnic_no" size="40" maxlength="13" onkeypress="return isNumber(event)" onblur= "checkCnic(this.value)" placeholder= 'xxxxxxxxxxxxx e.g. 1234567890123' required>
                <span style='color:red' id="errorCnic"></span>
                </td>
            </tr>
            <tr>
                <th>Nearest Station <span style="color: red">*</span> :</th>
                <td>
                    <input type="text" id='cityName' name="city" size="40" placeholder='e.g. Lahore' required>
                </td>
            </tr>
            <tr>
            <tr>
                <th>Password <span style="color: red">*</span> :</th>
                <td>
                <input type="password" name="password" size="40" required>
                </td>
            </tr>
            </table>
            
            <div class="row" style="margin: 15px 0px 15px 0px;">
                <div class="col-lg-4 col-md-0"></div>
                <div class="col-lg-4"">
                    <div class="form-group">
                        <input type="submit" name="submit" value="Register" class="btn btn-success btn-block" onclick="return(submitreg());">
                    </div>
                </div>
            </div>
            
        </form>
    </div>


    <script type="text/javascript">
        function submitreg() {
            var form = document.reg;
            if (form.name.value == "") {
            alert("Enter name.");
            return false;
            } else if (form.uname.value == "") {
            alert("Enter username.");
            return false;
            } else if (form.upass.value == "") {
            alert("Enter password.");
            return false;
            } else if (form.uemail.value == "") {
            alert("Enter email.");
            return false;
            }
        }
        function isNumber(evt) 
        {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
            }
            return true;
        }
        function check(value)
        {
            if(value.trim()=="")
            {
            document.getElementById('errorname').innerHTML= "&nbsp &nbsp Required "; 
            }    
        }

        function checkCnic(value)
        {
            if(value.trim()=="")
            {
            document.getElementById('errorCnic').innerHTML= "&nbsp &nbsp Required "; 
            }    
        }

        function confirmEmail()
        {
            var emailFirst= document.getElementById('emailFirst').value;
            var check2=document.getElementById('emailSecond').value;
            if(emailFirst.trim()!=check2.trim())
            {
            document.getElementById('errorname1').innerHTML= "Both email must be same "; 
            }
        }
        
    </script>
</div>