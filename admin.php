<?php
    session_start();
    include('./conn.php');
    // include('./login.php');
    if(!isset($_POST['btnLogin']))
    {
        if (!$_SESSION['authentication']){ 
            header("Location:login.php");
            die();
        }
    }

    if(isset($_POST['btnLogin']))
    {
        $uname = mysqli_real_escape_string($con, $_POST['username']);
        $pwd = mysqli_real_escape_string($con, $_POST['password']);

        $query = "SELECT * FROM tbllogin where username='$uname' and password='$pwd' LIMIT 1";
        $query_run = mysqli_query($con, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            // echo 'success!';
            $row = mysqli_fetch_array($query_run);

            // Authenticating Logged In User
            $_SESSION['authentication'] = true;

            // // Storing Authenticated User data in Session
            // $_SESSION['auth_user'] = [
            //     'user_id'=>$row['id'],
            //     'user_fullname'=>$row['fullname'],
            //     'user_email'=>$row['email'],
            // ];

            $_SESSION['message'] = "You are Logged In Successfully"; //message to show
            header("Location: admin.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Invalid Username or Password"; //message to show
            header("Location: login.php" . '?deleteRow=' . $_SESSION['message']);
            exit(0);
        }
    }

    if(isset($_POST['btncarcnfAdd']))
    {
        $insert_row_id = $_POST['btncarcnfAdd'];
        $insert_file_path = $_FILES["btncaruplAdd"]["tmp_name"];
        move_uploaded_file($insert_file_path,"./Assets/images/" . $_FILES["btncaruplAdd"]["name"]);
        if(basename($insert_file_path)!=''){
            // $insert_file_name = basename($insert_file_path);
            $insert_file_name = $_FILES["btncaruplAdd"]["name"];
        }
        else{
            $insert_file_name = $_FILES["btncaruplAdd"]["name"];
        }
        
        $insert_query = "INSERT INTO carousel (cimg_name,cimg_path) VALUES ('$insert_file_name','$insert_file_path')";

        if ($con->query($insert_query) === TRUE) {
            echo "Record Added successfully";
          } else {
            echo "Error inserting record: " . $con->error;
        }
    }

    if(isset($_POST['btnnewsimgcnfAdd']))
    {
        $insert_row_id = $_POST['btnnewsimgcnfAdd'];
        $insert_row_desc = $_POST['addimgnewsTxt'];
        $insert_row_blogTitle = $_POST['addimgblogTitle'];
        $insert_row_blogText = $_POST['addimgblogText'];
        $insert_file_path = $_FILES["btnnewsimguplAdd"]["tmp_name"];
        move_uploaded_file($insert_file_path,"./Assets/images/" . $_FILES["btnnewsimguplAdd"]["name"]);
        if(basename($insert_file_path)!=''){
            // $insert_file_name = basename($insert_file_path);
            $insert_file_name = $_FILES["btnnewsimguplAdd"]["name"];
        }
        else{
            $insert_file_name = $_FILES["btnnewsimguplAdd"]["name"];
        }
        
        $insert_query = "INSERT INTO newsimage (nimg_name,nimg_path,nimg_desc,nimg_blogtitle,nimg_blogtext) VALUES ('$insert_file_name','$insert_file_path','$insert_row_desc','$insert_row_blogTitle','$insert_row_blogText')";

        if ($con->query($insert_query) === TRUE) {
            echo "Record Added successfully";
          } else {
            echo "Error inserting record: " . $con->error;
        }
    }

    if(isset($_POST['btnnewsvidcnfAdd']))
    {
        $insert_row_id = $_POST['btnnewsvidcnfAdd'];
        $insert_row_desc = $_POST['addvidnewsTxt'];
        $insert_row_blogTitle = $_POST['addvidblogTitle'];
        $insert_row_blogText = $_POST['addvidblogText'];

        $insert_file_path = $_FILES["btnnewsviduplAdd"]["tmp_name"];
        move_uploaded_file($insert_file_path,"./Assets/videos/" . $_FILES["btnnewsviduplAdd"]["name"]);
        if(basename($insert_file_path)!=''){
            $insert_file_name = $_FILES["btnnewsviduplAdd"]["name"];
        }
        else{
            $insert_file_name = $_FILES["btnnewsviduplAdd"]["name"];
        }
        
        $insert_query = "INSERT INTO newsvideo (nvid_name,nvid_path,nvid_desc,nvid_blogtitle,nvid_blogtext) VALUES ('$insert_file_name','$insert_file_path','$insert_row_desc','$insert_row_blogTitle','$insert_row_blogText')";
        // echo $insert_query;
        if ($con->query($insert_query) === TRUE) {
            echo "Record Added successfully";
          } else {
            echo "Error inserting record: " . $con->error;
        }
    }

    if(isset($_POST['btncarcnfUpdate']))
    {
        $update_row_id = $_POST['btncarcnfUpdate'];
        $update_file_path = $_FILES["btncaruplUpdate"]["tmp_name"];
        move_uploaded_file($update_file_path,"./Assets/images/" . $_FILES["btncaruplUpdate"]["name"]);
        if(basename($update_file_path)!=''){
            $update_file_name = $_FILES["btncaruplUpdate"]["name"];
        }
        else{
            $update_file_name = $_FILES["btncaruplUpdate"]["name"];
        }

        $update_query = "UPDATE carousel SET cimg_name = '$update_file_name',cimg_path = '$update_file_path' WHERE cimg_id='$update_row_id'";

        if ($con->query($update_query) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $con->error;
        }
    }

    if(isset($_POST['btnnewsimgcnfUpdate']))
    {
        $update_row_id = $_POST['btnnewsimgcnfUpdate'];
        $update_row_desc = $_POST['updateimgnewsTxt'];
        $update_row_blogTitle = $_POST['updateimgblogTitle'];
        $update_row_blogText = $_POST['updateimgblogText'];

        $update_file_path = $_FILES["btnnewsimguplUpdate"]["tmp_name"];
        move_uploaded_file($update_file_path,"./Assets/images/" . $_FILES["btnnewsimguplUpdate"]["name"]);
        if(basename($update_file_path)!=''){
            $update_file_name = $_FILES["btnnewsimguplUpdate"]["name"];
        }
        else{
            $update_file_name = $_FILES["btnnewsimguplUpdate"]["name"];
        }
        
        if($update_file_path==""){
            $update_query = "UPDATE newsimage SET nimg_desc = '$update_row_desc' WHERE nimg_id='$update_row_id'";
        }
        else if($update_row_desc==""){
            $update_query = "UPDATE newsimage SET nimg_name = '$update_file_name',nimg_path = '$update_file_path' WHERE nimg_id='$update_row_id'";
        }
        else{
            $update_query = "UPDATE newsimage SET nimg_name = '$update_file_name',nimg_path = '$update_file_path',nimg_desc = '$update_row_desc',nimg_blogtitle = '$update_row_blogTitle', nimg_blogtext = '$update_row_blogText' WHERE nimg_id='$update_row_id'";
        }

        if ($con->query($update_query) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $con->error;
        }
    }

    if(isset($_POST['btnnewsvidcnfUpdate']))
    {
        $update_row_id = $_POST['btnnewsvidcnfUpdate'];
        $update_row_desc = $_POST['updatevidnewsTxt'];
        $update_row_blogTitle = $_POST['updatevidblogTitle'];
        $update_row_blogText = $_POST['updatevidblogText'];

        $update_file_path = $_FILES["btnnewsviduplUpdate"]["tmp_name"];
        move_uploaded_file($update_file_path,"./Assets/videos/" . $_FILES["btnnewsviduplUpdate"]["name"]);
        if(basename($update_file_path)!=''){
            $update_file_name = $_FILES["btnnewsviduplUpdate"]["name"];
        }
        else{
            $update_file_name = $_FILES["btnnewsviduplUpdate"]["name"];
        }
        
        if($update_file_path==""){
            $update_query = "UPDATE newsvideo SET nvid_desc = '$update_row_desc' WHERE nvid_id='$update_row_id'";
        }
        else if($update_row_desc==""){
            $update_query = "UPDATE newsvideo SET nvid_name = '$update_file_name',nvid_path = '$update_file_path' WHERE nvid_id='$update_row_id'";
        }
        else{
            $update_query = "UPDATE newsvideo SET nvid_name = '$update_file_name',nvid_path = '$update_file_path',nvid_desc = '$update_row_desc',nvid_blogtitle = '$update_row_blogTitle',nvid_blogtext = '$update_row_blogText' WHERE nvid_id='$update_row_id'";
        }

        if ($con->query($update_query) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $con->error;
        }
    }

    if(isset($_POST['btnadvtimgcnfUpdate']))
    {
        $update_row_id = $_POST['btnadvtimgcnfUpdate'];
        $update_file_path = $_FILES["btnadvtimguplUpdate"]["tmp_name"];
        $update_link = $_POST['updateimgadvtTxt'];
        move_uploaded_file($update_file_path,"./Assets/images/" . $_FILES["btnadvtimguplUpdate"]["name"]);
        if(basename($update_file_path)!=''){
            $update_file_name = $_FILES["btnadvtimguplUpdate"]["name"];
        }
        else{
            $update_file_name = $_FILES["btnadvtimguplUpdate"]["name"];
        }

        $update_query = "UPDATE `advttable` SET `adpath`='$update_file_path',`adlink`='$update_link', `adimgname`= '$update_file_name' WHERE advtid='$update_row_id'";

        if ($con->query($update_query) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $con->error;
        }
    }

    if(isset($_POST['btncarDelete']))
    {
        $delete_row_id = $_POST['btncarDelete'];
        $delete_query = "DELETE FROM carousel WHERE cimg_id='$delete_row_id'";
        
        if ($con->query($delete_query) === TRUE) {
            echo "Record deleted successfully";
          } else {
            echo "Error deleting record: " . $con->error;
        }
    }

    if(isset($_POST['btnnewsimageDelete']))
    {
        $delete_row_id = $_POST['btnnewsimageDelete'];
        $delete_query = "DELETE FROM newsimage WHERE nimg_id='$delete_row_id'";
        
        if ($con->query($delete_query) === TRUE) {
            echo "Record deleted successfully";
          } else {
            echo "Error deleting record: " . $con->error;
        }
    }

    if(isset($_POST['btnnewsvideoDelete']))
    {
        $delete_row_id = $_POST['btnnewsvideoDelete'];
        $delete_query = "DELETE FROM newsvideo WHERE nvid_id='$delete_row_id'";
        
        if ($con->query($delete_query) === TRUE) {
            echo "Record deleted successfully";
          } else {
            echo "Error deleting record: " . $con->error;
        }
    }

    if(isset($_POST['adminLogout']))
    {
        header("Location: login.php");
        session_destroy();
        exit(0);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sytles/admin.css">
    <script src="./scripts/admin.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Admin Page</title>
</head>
<body>
    <div class="adminHeader" id="admintopNav">
        <div class="adminpageNav" id="adminpageNavbar">
            <div class="navDiv" id="topNav">
                <ul id="topnavUl">
                    <li class="topnavLi" id="liadminHome">Home</li>
                    <li class="topnavLi" id="liadminCarousel">Carousel</li>
                    <li class="topnavLi" id="liadminPosts">Posts</li>
                    <li class="topnavLi" id="liadminAdvt">Advertisements</li>
                    <!-- <li class="topnavLi" id="liadminSubmissions">Submissions</li> -->
                    <li class="topnavLi" id="liadminLogout">
                        <!-- <form method="POST" action=""  enctype="multipart/form-data">
                            <button name="adminLogout" id="adminLogout">Logout</button>
                        </form> -->
                        <button name="adminLogout" id="liadminLogout">Logout</button>
                    </li>
                </ul>
            </div>
        </div>
        <form method="POST" action=""  enctype="multipart/form-data">
            <button name="adminLogout" id="adminLogout" style="display:none;">Logout</button>
        </form>
    </div>
    <div class="adminUpdater" id="adminhomeDiv">
        <h1>Welcome</h1>
        <h1>Admin Home</h1>
    </div>
    <div class="adminUpdater" id="carouselUpdaterDiv">
        <form method="POST" action=""  enctype="multipart/form-data">
                <p class="adminpageHeaders">Carousel Table<p>
                <?php 
                    $casql = "SELECT cimg_id,cimg_name,cimg_path FROM carousel";
                    $caresult = $con->query($casql);
                    $row_num = 0;
                    if ($caresult !== false && $caresult->num_rows > 0) {
                        echo "<table name='carouselTable' id='carouselTable' border=1><tr><th>Image Id</th><th>Image Name</th><th>Image Path</th><th>Image</th><th>Actions</th></tr>";
                        // output data of each row
                        while($row = $caresult->fetch_assoc()) {
                            $row_num = $row_num + 1;

                            $imagePath = $row["cimg_path"];
                            $imageSrc = $imagePath;
                            // // Read the contents of the image file and encode as base64
                            // $imageData = base64_encode(file_get_contents($imagePath));

                            // // Construct the data URI
                            // // $imageSrc = "data:image/jpeg;base64," . $imageData;
                            // $imageSrc = "data:image/jpeg;base64," . $imageData;
                            
                            echo "<tr><td>" . $row["cimg_id"]. "</td><td>" . $row["cimg_name"]. "</td><td><a href='./Assets/images/".$row["cimg_name"]."'> ./Assets/images/" . $row["cimg_name"] . "' </a></td>";
                            echo "<td><img src='./Assets/images/" . $row["cimg_name"]. "' style='width:200px;'/></td>";
                            echo "<td><button class='btncarouselUpdate' id='btncarUpdate"  . $row["cimg_id"]. "' name='btncarUpdate' value='" . $row["cimg_id"]. "'>Update Image</button> <button class='btncarouselDelete' id='btncarDelete" . $row["cimg_id"]. "' name='btncarDelete' value='" . $row["cimg_id"]. "'>Delete Image</button></td></tr>";
                        }
                        echo "</table><br/>";
                    } else {
                        echo "<table name='carouselTable' id='carouselTable' border=1><tr><th>Image Id</th><th>Image Name</th><th>Image Path</th><th>Image</th><th>Actions</th></tr>";
                        echo "<tr><td></td><td></td><td></td><td></td><td></td></tr>";
                        echo "</table><br/>";
                        echo "The table is empty <br/><br/>";
                    }
                ?>
                <!-- <input type="file" name="btncaruplAdd" id="btncaruplAdd" style="display:none" accept="image/*"/> -->
                <button class="btncarouselCrud" name="btncarAdd" id="btncarAdd">Add Image</button>
                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                    <span class="close">&times;</span>
                        <div id="addImage">
                            <h3>Add Image</h3>
                            Add Image: <input type="file" name="btncaruplAdd" id="btncaruplAdd" accept="image/*"/><br/><br/>
                            <button class="btncarouselCrud" name="btncarcnfAdd" id="btncarcnfAdd">Add</button>
                        </div>
                        <div id="updateImage">
                            <h3>Update Image</h3>
                            Update Image: <input type="file" name="btncaruplUpdate" id="btncaruplUpdate" accept="image/*"/><br/><br/>
                            <button class="btncarouselCrud" name="btncarcnfUpdate" id="btncarcnfUpdate">Update</button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    <div class="adminUpdater" id="postsUpdaterDiv">
        <form method="POST" action=""  enctype="multipart/form-data">
            <p class="adminpageHeaders">News Images Table<p><br/>
            <?php 
                    $casql = "SELECT nimg_id,nimg_name,nimg_path,nimg_desc,nimg_blogtitle,nimg_blogtext FROM newsimage";
                    $caresult = $con->query($casql);
                    $row_num = 0;
                    if ($caresult !== false && $caresult->num_rows > 0) {
                        echo "<table name='newsimageTable' id='newsimageTable' border=1><tr><th>Image Id</th><th>Image Name</th><th>Image Path</th><th>Image</th><th>Description</th><th>Blog Title</th><th>Blog Text</th><th>Actions</th></tr>";
                        // output data of each row
                        while($row = $caresult->fetch_assoc()) {
                            $row_num = $row_num + 1;

                            $imagePath = $row["nimg_path"];
                            $imageSrc = $imagePath;
                            // // Read the contents of the image file and encode as base64
                            // $imageData = base64_encode(file_get_contents($imagePath));

                            // // Construct the data URI
                            // // $imageSrc = "data:image/jpeg;base64," . $imageData;
                            
                            echo "<tr><td>" . $row["nimg_id"]. "</td><td>" . $row["nimg_name"]. "</td><td><a href='./Assets/images/".$row["nimg_name"]."'> ./Assets/images/" . $row["nimg_name"] . "' </a></td>";
                            echo "<td><img src='./Assets/images/" . $row["nimg_name"]. "' style='width:200px;'/></td><td>" . $row["nimg_blogtitle"]. "</td><td>" . $row["nimg_blogtext"]. "</td>";
                            echo "<td>". $row["nimg_desc"]."</td>";
                            echo "<td><button class='btnnewsimgUpdate' id='btnnewsimageUpdate"  . $row["nimg_id"]. "' name='btnnewsimageUpdate' value='" . $row["nimg_id"]. "'>Update Post</button> <button class='btnnewsDelete' id='btnnewsimageDelete" . $row["nimg_id"]. "' name='btnnewsimageDelete' value='" . $row["nimg_id"]. "'>Delete Post</button></td></tr>";
                        }
                        echo "</table><br/>";
                    } else {
                        echo "<table name='newsimageTable' id='newsimageTable' border=1><tr><th>Image Id</th><th>Image Name</th><th>Image Path</th><th>Image</th><th>Description</th><th>Actions</th></tr>";
                        echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
                        echo "</table><br/>";
                        echo "The table is empty <br/><br/>";
                    }
                ?>
                <button class="btnnewsCrud" name="btnnewsimgAdd" id="btnnewsimgAdd">Add Post</button>
            <p class="adminpageHeaders">News Video Table<p><br/>
            <?php 
                    $casql = "SELECT nvid_id,nvid_name,nvid_path,nvid_desc,nvid_blogtitle,nvid_blogtext FROM newsvideo";
                    $caresult = $con->query($casql);
                    $row_num = 0;
                    if ($caresult !== false && $caresult->num_rows > 0) {
                        echo "<table name='newsvidTable' id='newsvidTable' border=1><tr><th>Video Id</th><th>Video Name</th><th>Video Path</th><th>Video</th><th>Description</th><th>Blog Title</th><th>Blog Text</th><th>Actions</th></tr>";
                        // output data of each row
                        while($row = $caresult->fetch_assoc()) {
                            $row_num = $row_num + 1;

                            $imagePath = $row["nvid_path"];
                            $imageSrc = $imagePath;
                            // // Read the contents of the image file and encode as base64
                            // $imageData = base64_encode(file_get_contents($imagePath));

                            // // Construct the data URI
                            // $imageSrc = "data:image/jpeg;base64," . $imageData;
                            
                            echo "<tr><td>" . $row["nvid_id"]. "</td><td>" . $row["nvid_name"]. "</td><td><a href='./Assets/images/".$row["nvid_name"]."'> ./Assets/images/" . $row["nvid_name"] . "' </a></td>";
                            echo "<td><img src='./Assets/videos/" . $row["nvid_name"] . "' style='width:200px;'/></td><td>" . $row["nvid_blogtitle"]. "</td><td>" . $row["nvid_blogtext"]. "</td>";
                            echo "<td>". $row["nvid_desc"]."</td>";
                            echo "<td><button class='btnnewsvidUpdate' id='btnnewsvideoUpdate"  . $row["nvid_id"]. "' name='btnnewsvideoUpdate' value='" . $row["nvid_id"]. "'>Update Post</button> <button class='btnnewsDelete' id='btnnewsvideoDelete" . $row["nvid_id"]. "' name='btnnewsvideoDelete' value='" . $row["nvid_id"]. "'>Delete Post</button></td></tr>";
                        }
                        echo "</table><br/>";
                    } else {
                        echo "<table name='newsvidTable' id='newsvidTable' border=1><tr><th>Video Id</th><th>Video Name</th><th>Video Path</th><th>Video</th><th>Description</th><th>Actions</th></tr>";
                        echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
                        echo "</table><br/>";
                        echo "The table is empty <br/><br/>";
                    }
                ?>
                <button class="btnnewsCrud" name="btnnewsvidAdd" id="btnnewsvidAdd">Add Post</button>
                <!-- The Modal -->
                <div id="myModal1" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                    <span class="close">&times;</span>
                        <div id="addnewsImage">
                            <h3>Add News Image</h3>
                            Add Image: <input type="file" name="btnnewsimguplAdd" id="btnnewsimguplAdd" accept="image/*"/><br/><br/>
                            Add Description: <input type="text" name="addimgnewsTxt" id="addimgnewsTxt"/><br/><br/>
                            Add Blog Title: <input type="text" name="addimgblogTitle" id="addimgblogTitle"/><br/><br/>
                            Add Blog Text: <input type="text" name="addimgblogText" id="addimgblogText"/><br/><br/>
                            <button class="btnnewsCrud" name="btnnewsimgcnfAdd" id="btnnewsimgcnfAdd">Add</button>
                        </div>
                        <div id="updatenewsImage">
                            <h3>Update News Image</h3>
                            Update Image: <input type="file" name="btnnewsimguplUpdate" id="btnnewsimguplUpdate" accept="image/*"/><br/><br/>
                            Update Description: <input type="text" name="updateimgnewsTxt" id="updateimgnewsTxt"/><br/><br/>
                            Update Blog Title: <input type="text" name="updateimgblogTitle" id="updateimgblogTitle"/><br/><br/>
                            Update Blog Text: <input type="text" name="updateimgblogText" id="updateimgblogText"/><br/><br/>
                            <button class="btnnewsCrud" name="btnnewsimgcnfUpdate" id="btnnewsimgcnfUpdate">Update</button>
                        </div>

                        <div id="addnewsVideo">
                            <h3>Add News Video</h3>
                            Add Video: <input type="file" name="btnnewsviduplAdd" id="btnnewsviduplAdd"/><br/><br/>
                            Add Description: <input type="text" name="addvidnewsTxt" id="addvidnewsTxt"/><br/><br/>
                            Add Blog Title: <input type="text" name="addvidblogTitle" id="addvidblogTitle"/><br/><br/>
                            Add Blog Text: <input type="text" name="addvidblogText" id="addvidblogText"/><br/><br/>
                            <button class="btnnewsCrud" name="btnnewsvidcnfAdd" id="btnnewsvidcnfAdd">Add</button>
                        </div>
                        <div id="updatenewsVideo">
                            <h3>Update News Video</h3>
                            Update Video: <input type="file" name="btnnewsviduplUpdate" id="btnnewsviduplUpdate"/><br/><br/>
                            Update Description: <input type="text" name="updatevidnewsTxt" id="updatevidnewsTxt"/><br/><br/>
                            Add Blog Title: <input type="text" name="updatevidblogTitle" id="updatevidblogTitle"/><br/><br/>
                            Add Blog Text: <input type="text" name="updatevidblogText" id="updatevidblogText"/><br/><br/>
                            <button class="btnnewsCrud" name="btnnewsvidcnfUpdate" id="btnnewsvidcnfUpdate">Update</button>
                        </div>
                    </div>

                </div>
        </form>
    </div>
    <div class="adminUpdater" id="submissionsDiv">
        <div class="adminpageNav" id="adminpageNavbar">
            <div class="navDiv" id="submitNav">
                <ul id="submissionnavUl">
                    <li class="submissionnavLi" id="lisubmitHome">Submission Home</li>
                    <li class="submissionnavLi" id="lisubmitresRep">Research Reports</li>
                    <li class="submissionnavLi" id="lisubmitaeoRep">AEO Reg Services</li>
                    <li class="submissionnavLi" id="lisubmitdataSvc">Data Services</li>
                    <li class="submissionnavLi" id="lisubmitinfoSvc">Info Services</li>
                    <li class="submissionnavLi" id="lisubmitrecycSh">Recycling Shivir</li>
                    <li class="submissionnavLi" id="lisubmitvideoMag">Video Magazine</li>
                    <li class="submissionnavLi" id="lisubmitrndTr">R&D Training</li>
                    <li class="submissionnavLi" id="lisubmitspecAssn">Special Assignments</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="adminUpdater" id="advtUpdater">
        <form method="POST" action=""  enctype="multipart/form-data">
            <p>Advertisement Table</p>
            <?php 
                $casql = "SELECT advtid,adtype,adpath,adlink,adimgname FROM advttable";
                $caresult = $con->query($casql);
                $row_num = 0;
                if ($caresult !== false && $caresult->num_rows > 0) {
                    echo "<table name='advtTable' id='advtTable' border=1><tr><th>Advt Id</th><th>Advt Name</th><th>Advt Link</th><th>Advt Image</th><th>Actions</th></tr>";
                    // output data of each row
                    while($row = $caresult->fetch_assoc()) {
                        $row_num = $row_num + 1;

                        $imagePath = $row["adpath"];
                        $imageSrc = $imagePath;
                        // // Read the contents of the image file and encode as base64
                        // $imageData = base64_encode(file_get_contents($imagePath));

                        // // Construct the data URI
                        // $imageSrc = "data:image/jpeg;base64," . $imageData;
                        
                        echo "<tr><td>" . $row["advtid"]. "</td><td>" . $row["adtype"]. "</td><td><a href='".$row["adlink"]."'>" . $row["adlink"] . "' </a></td>";
                        echo "<td><img src='./Assets/images/" . $row["adimgname"] . "' style='width:200px;'/></td>";
                        echo "<td><button class='btnadvtUpdate' id='btnadvtUpdate"  . $row["advtid"]. "' name='btnadvtUpdate' value='" . $row["advtid"]. "'>Update Advt</button> </tr>";
                    }
                    echo "</table><br/>";
                } else {
                    echo "<table name='advtTable' id='advtTable' border=1><tr><th>Advt Id</th><th>Advt Name</th><th>Advt Link</th><th>Advt Image</th><th>Actions</th></tr>";
                    echo "<tr><td></td><td></td><td></td><td></td><td></td></tr>";
                    echo "</table><br/>";
                    echo "The table is empty <br/><br/>";
                }
            ?>
            <!-- <button class="btnadvtCrud" name="btnadvtAdd" id="btnadvtAdd">Add Horizontal Advt 1</button> -->

            <!-- The Modal -->
            <div id="myModal2" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div id="updateAdvt">
                        <h3>Update Advt</h3>
                        Update Image: <input type="file" name="btnadvtimguplUpdate" id="btnadvtimguplUpdate" accept="image/*"/><br/><br/>
                        Update Link: <input type="text" name="updateimgadvtTxt" id="updateimgadvtTxt"/><br/><br/>
                        <button class="btnadvtCrud" name="btnadvtimgcnfUpdate" id="btnadvtimgcnfUpdate">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</body>
</html>