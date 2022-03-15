<div>
    <div id="container" class="container-fluid">
        <h3 class="heading">LOGIN TO YOUR PAKISTAN RAILWAYS PASSENGER ACCOUNT</h3>
        <form action="includes/user.login.php" method="post" name="login">
            <table class="table">
                <tr>
                    <th>Mobile No:</th>
                    <td><input type="text" name="mobile_no" onkeypress="return isNumber(event)" placeholder='923XXXXXXXXX' size="40" required></td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type="password" name="password" size="40" required></td>
                </tr>
            </table>

            <div class="row" style="margin: 15px 0px 15px 0px;">
                <div class="col-lg-4 col-md-0"></div>
                <div class="col-lg-4"">
                    <div class="form-group">
                        <input class="btn btn-success btn-block" type="submit" name="submit" value="Login" onclick="return(submitlogin());">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        function submitlogin() 
        {
            var form = document.login;
            if (form.$mobile_no.value == "") {
                alert("Enter email or username.");
                return false;
            } else if (form.password.value == "") {
                alert("Enter password.");
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
    </script>
</div>