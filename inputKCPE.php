<?php
include 'db.inc.php';
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

$sql = 'SELECT * FROM students WHERE student_id = ' . $_GET['id'];
$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
extract(mysqli_fetch_assoc($result));


?>

<?php
include 'header.php';
$get = "processStudentKCPE.php?id=" . $_GET['id']; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div id="alert"></div>
                <form method="post" action="<?php echo $get; ?>" onsubmit="btnCheckFormClick()" name="form1" id="form">
                    <h3>Input Student KCPE Result</h3>
                    <div class="form-group">
                        <label for="sname">Surname:</label>
                        <input type="text" class="form-control" id="sname" name="sname" value="<?php echo $sname; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname; ?>"/>
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname; ?>"/>
                    </div>

                    <div class="form-group">
                        <label for="stupi">Student UPI:</label>
                        <input type="text" class="form-control" id="stupi" name="stupi" value="<?php echo $stupi; ?>"/>
                    </div>

                    <div class="form-group">
                        <label for="schupi">School UPI:</label>
                        <input type="text" class="form-control" id="schupi" name="schupi"
                               value="<?php echo $schupi; ?>"/>
                    </div>

                    <div class="form-group">
                        <label for="maths">Mathematics:</label>
                        <input type="number" class="form-control" placeholder="Enter Mathematics Result" id="maths"
                               name="maths"/>
                    </div>

                    <div class="form-group">
                        <label for="english">English:</label>
                        <input type="number" id="english" name="english" placeholder="Enter English Result"
                               class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="kiswahili">Kiswahili:</label>
                        <input type="number" id="kiswahili" name="kiswahili" placeholder="Enter Kiswahili Result"
                               class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="science">Science:</label>
                        <input type="number" id="science" name="science" placeholder="Enter Science Result"
                               class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="socialstudies">Social Studies:</label>
                        <input type="number" id="socialstudies" name="socialstudies"
                               placeholder="Enter Social Studies Result" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn  btn-primary form-control" name="submit" id="btn"
                               value="submit"/>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script>
        var myForm = document.form1

        function btnCheckFormClick(e) {

            var sname = myForm.sname
            var fname = myForm.fname
            var lname = myForm.lname
            var gender = myForm.gender
            var dob = myForm.dob
            var stupi = myForm.stupi


            if (sname.value == "" || fname.value == "" || lname.value == "" || gender.value == "" || dob.value == "" || stupi.value == "") {
                alert("Please complete the whole form")
            }

        }

        myForm.submit.addEventListener("click", btnCheckFormClick)
    </script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
<?php
include "footer.php";
?>