<?php
include "header.php";
$conn=new PDO('mysql:host=localhost; dbname=nemis', 'bp6am', 'bp6ampass') or die(mysql_error());
if(isset($_POST['submit'])!=""){
    $name=$_FILES['photo']['name'];
    $size=$_FILES['photo']['size'];
    $type=$_FILES['photo']['type'];
    $temp=$_FILES['photo']['tmp_name'];
    $caption1=$_POST['caption'];
    $link=$_POST['link'];
    move_uploaded_file($temp,"upload/".$name);
    $query=$conn->query("insert into upload(name)values('$name')");
    if($query){
        header("location:uploadpolicy.php");
    }
    else{
        die(mysql_error());
    }
}
?>
<html>
<head>
    <title>View Policy Documents</title>

</head>
<script src="js/jquery.js" type="text/javascript"></script>


<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

<style>
</style>
<body>
<div class="row-fluid">
    <div class="span12">
        <div class="container">
            <br />
            <h1><p>View Policy Documents</p></h1>
            <br />
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                <thead>
                <tr>
                    <th width="90%" align="center">Files</th>
                    <th align="center">Action</th>
                </tr>
                </thead>
                <?php
                $query=$conn->query("select * from upload order by id desc");
                while($row=$query->fetch()){
                    $name=$row['name'];
                    ?>
                    <tr>

                        <td>
                            &nbsp;<?php echo $name ;?>
                        </td>
                        <td>
                            <button class="alert-success"><a href="download.php?filename=<?php echo $name;?>">Download</a></button>
                        </td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>
</body>
</html>