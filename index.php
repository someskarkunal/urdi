<?php
    require("./conn.php");

    if(isset($_POST['researchreportsSubmit']))
    {
        $submitDate = date("Y-m-d");
        $clientName = isset($_POST['resrepclientName']) ? $_POST['resrepclientName'] : "";
        $companyName = isset($_POST['resrepcompanyName']) ? $_POST['resrepcompanyName'] : "";
        $clientEmail = isset($_POST['resrepclientMail']) ? $_POST['resrepclientMail'] : "";
        $clientWhatsapp = isset($_POST['resrepclientWaNum']) ? $_POST['resrepclientWaNum'] : "";
        $rrcb1 = isset($_POST['rrcb1']) ? filter_var($_POST['rrcb1'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb2 = isset($_POST['rrcb2']) ? filter_var($_POST['rrcb2'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb3 = isset($_POST['rrcb3']) ? filter_var($_POST['rrcb3'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb4 = isset($_POST['rrcb4']) ? filter_var($_POST['rrcb4'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb5 = isset($_POST['rrcb5']) ? filter_var($_POST['rrcb5'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb6 = isset($_POST['rrcb6']) ? filter_var($_POST['rrcb6'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb7 = isset($_POST['rrcb7']) ? filter_var($_POST['rrcb7'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb8 = isset($_POST['rrcb8']) ? filter_var($_POST['rrcb8'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb9 = isset($_POST['rrcb9']) ? filter_var($_POST['rrcb9'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb10 = isset($_POST['rrcb10']) ? filter_var($_POST['rrcb10'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb11 = isset($_POST['rrcb11']) ? filter_var($_POST['rrcb11'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb12 = isset($_POST['rrcb12']) ? filter_var($_POST['rrcb12'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb13 = isset($_POST['rrcb13']) ? filter_var($_POST['rrcb13'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb14 = isset($_POST['rrcb14']) ? filter_var($_POST['rrcb14'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb15 = isset($_POST['rrcb15']) ? filter_var($_POST['rrcb15'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb16 = isset($_POST['rrcb16']) ? filter_var($_POST['rrcb16'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb17 = isset($_POST['rrcb17']) ? filter_var($_POST['rrcb17'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb18 = isset($_POST['rrcb18']) ? filter_var($_POST['rrcb18'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb19 = isset($_POST['rrcb19']) ? filter_var($_POST['rrcb19'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb20 = isset($_POST['rrcb20']) ? filter_var($_POST['rrcb20'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb21 = isset($_POST['rrcb21']) ? filter_var($_POST['rrcb21'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb22 = isset($_POST['rrcb22']) ? filter_var($_POST['rrcb22'], FILTER_VALIDATE_BOOLEAN) : 0;
        $rrcb23 = isset($_POST['rrcb23']) ? filter_var($_POST['rrcb23'], FILTER_VALIDATE_BOOLEAN) : 0;
        $clientOptions = "";
        
        $insert_query = "INSERT INTO researchreports (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`, `rrcb1`, `rrcb2`, `rrcb3`, `rrcb4`, `rrcb5`, `rrcb6`, `rrcb7`, `rrcb8`, `rrcb9`, `rrcb10`, `rrcb11`, `rrcb12`, `rrcb13`, `rrcb14`, `rrcb15`, `rrcb16`, `rrcb17`, `rrcb18`, `rrcb19`, `rrcb20`, `rrcb21`, `rrcb22`, `rrcb23`) VALUES ('','$submitDate','$clientName','$companyName','$clientEmail','$clientWhatsapp','$rrcb1','$rrcb2','$rrcb3','$rrcb4','$rrcb5','$rrcb6','$rrcb7','$rrcb8','$rrcb9','$rrcb10','$rrcb11','$rrcb12','$rrcb13','$rrcb14','$rrcb15','$rrcb16','$rrcb17','$rrcb18','$rrcb19','$rrcb20','$rrcb21','$rrcb22','$rrcb23')";
        if ($con->query($insert_query) === TRUE) {
            echo "Record Added successfully";
          } else {
            echo "Error inserting record: " . $con->error;
        }
    }

    if(isset($_POST['aeosvcSubmit']))
    {
        $submitDate = date("Y-m-d");
        $clientName = isset($_POST['aeorsclientName']) ? $_POST['aeorsclientName'] : "";
        $companyName = isset($_POST['aeorscompanyName']) ? $_POST['aeorscompanyName'] : "";
        $clientEmail = isset($_POST['aeorsclientMail']) ? $_POST['aeorsclientMail'] : "";
        $clientWhatsapp = isset($_POST['aeorsclientWaNum']) ? $_POST['aeorsclientWaNum'] : "";

        $insert_query = "INSERT INTO aeoregservices (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`) VALUES ('','$submitDate','$clientName','$companyName','$clientEmail','$clientWhatsapp')";
        if ($con->query($insert_query) === TRUE) {
            echo "Record Added successfully";
          } else {
            echo "Error inserting record: " . $con->error;
        }
    }

    if(isset($_POST['dataservicesSubmit']))
    {
        $submitDate = date("Y-m-d");
        $clientName = isset($_POST['datsvfclientName']) ? $_POST['datsvfclientName'] : "";
        $companyName = isset($_POST['datsvfcompanyName']) ? $_POST['datsvfcompanyName'] : "";
        $clientEmail = isset($_POST['datsvfclientMail']) ? $_POST['datsvfclientMail'] : "";
        $clientWhatsapp = isset($_POST['datsvfclientWaNum']) ? $_POST['datsvfclientWaNum'] : "";
        $rrcb1 = isset($_POST['datsvf1']) ? filter_var($_POST['datsvf1'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb2 = isset($_POST['datsvf2']) ? filter_var($_POST['datsvf2'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb3 = isset($_POST['datsvf3']) ? filter_var($_POST['datsvf3'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb4 = isset($_POST['datsvf4']) ? filter_var($_POST['datsvf4'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb5 = isset($_POST['datsvf5']) ? filter_var($_POST['datsvf5'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb6 = isset($_POST['datsvf6']) ? filter_var($_POST['datsvf6'], FILTER_VALIDATE_BOOLEAN): 0;
        
        $insert_query = "INSERT INTO dataservices (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`, `dscb1`, `dscb2`, `dscb3`, `dscb4`, `dscb5`, `dscb6`) VALUES ('','$submitDate','$clientName','$companyName','$clientEmail','$clientWhatsapp','$rrcb1','$rrcb2','$rrcb3','$rrcb4','$rrcb5','$rrcb6')";
        if ($con->query($insert_query) === TRUE) {
            echo "Record Added successfully";
          } else {
            echo "Error inserting record: " . $con->error;
        }
    }

    if(isset($_POST['infoservicesSubmit']))
    {
        $submitDate = date("Y-m-d");
        $clientName = isset($_POST['insvcclientName']) ? $_POST['insvcclientName'] : "";
        $companyName = isset($_POST['insvccompanyName']) ? $_POST['insvccompanyName'] : "";
        $clientEmail = isset($_POST['insvcclientMail']) ? $_POST['insvcclientMail'] : "";
        $clientWhatsapp = isset($_POST['insvcclientWaNum']) ? $_POST['insvcclientWaNum'] : "";
        $rrcb1 = isset($_POST['insvc1']) ? filter_var($_POST['insvc1'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb2 = isset($_POST['insvc2']) ? filter_var($_POST['insvc2'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb3 = isset($_POST['insvc3']) ? filter_var($_POST['insvc3'], FILTER_VALIDATE_BOOLEAN): 0;
        
        $insert_query = "INSERT INTO infoservices (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`, `weekly`, `fortnightly`, `monthly`) VALUES ('','$submitDate','$clientName','$companyName','$clientEmail','$clientWhatsapp','$rrcb1','$rrcb2','$rrcb3')";
        if ($con->query($insert_query) === TRUE) {
            echo "Record Added successfully";
          } else {
            echo "Error inserting record: " . $con->error;
        }
    }

    if(isset($_POST['recyclingshivirSubmit']))
    {
        $submitDate = date("Y-m-d");
        $clientName = isset($_POST['reshclientName']) ? $_POST['reshclientName'] : "";
        $companyName = isset($_POST['reshcompanyName']) ? $_POST['reshcompanyName'] : "";
        $clientEmail = isset($_POST['reshclientMail']) ? $_POST['reshclientMail'] : "";
        $clientWhatsapp = isset($_POST['reshclientWaNum']) ? $_POST['reshclientWaNum'] : "";
        $rrcb1 = isset($_POST['resh1']) ? filter_var($_POST['resh1'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb2 = isset($_POST['resh2']) ? filter_var($_POST['resh2'], FILTER_VALIDATE_BOOLEAN): 0;
        $rrcb3 = isset($_POST['resh3']) ? filter_var($_POST['resh3'], FILTER_VALIDATE_BOOLEAN): 0;
        
        $insert_query = "INSERT INTO recyclingshivir (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`, `weekly`, `fortnightly`, `monthly`) VALUES ('','$submitDate','$clientName','$companyName','$clientEmail','$clientWhatsapp','$rrcb1','$rrcb2','$rrcb3')";
        if ($con->query($insert_query) === TRUE) {
            echo "Record Added successfully";
          } else {
            echo "Error inserting record: " . $con->error;
        }
    }

    if(isset($_POST['videomagazineSubmit']))
    {
        $submitDate = date("Y-m-d");
        $clientName = isset($_POST['vidmagclientName']) ? $_POST['vidmagclientName'] : "";
        $companyName = isset($_POST['vidmagcompanyName']) ? $_POST['vidmagcompanyName'] : "";
        $clientEmail = isset($_POST['vidmagclientMail']) ? $_POST['vidmagclientMail'] : "";
        $clientWhatsapp = isset($_POST['vidmagclientWaNum']) ? $_POST['vidmagclientWaNum'] : "";

        $insert_query = "INSERT INTO videomagazine (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`) VALUES ('','$submitDate','$clientName','$companyName','$clientEmail','$clientWhatsapp')";
        if ($con->query($insert_query) === TRUE) {
            echo "Record Added successfully";
          } else {
            echo "Error inserting record: " . $con->error;
        }
    }

    if(isset($_POST['rndtrainingSubmit']))
    {
        $submitDate = date("Y-m-d");
        $clientName = isset($_POST['rndtrnclientName']) ? $_POST['rndtrnclientName'] : "";
        $companyName = isset($_POST['rndtrncompanyName']) ? $_POST['rndtrncompanyName'] : "";
        $clientEmail = isset($_POST['rndtrnclientMail']) ? $_POST['rndtrnclientMail'] : "";
        $clientWhatsapp = isset($_POST['rndtrnclientWaNum']) ? $_POST['rndtrnclientWaNum'] : "";

        $insert_query = "INSERT INTO rndtraining (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`) VALUES ('','$submitDate','$clientName','$companyName','$clientEmail','$clientWhatsapp')";
        if ($con->query($insert_query) === TRUE) {
            echo "Record Added successfully";
          } else {
            echo "Error inserting record: " . $con->error;
        }
    }

    if(isset($_POST['splassgnSubmit']))
    {
        $submitDate = date("Y-m-d");
        $clientName = isset($_POST['spcassclientName']) ? $_POST['spcassclientName'] : "";
        $companyName = isset($_POST['spcasscompanyName']) ? $_POST['spcasscompanyName'] : "";
        $clientEmail = isset($_POST['spcassclientMail']) ? $_POST['spcassclientMail'] : "";
        $clientWhatsapp = isset($_POST['spcassclientWaNum']) ? $_POST['spcassclientWaNum'] : "";

        $insert_query = "INSERT INTO specialassignments (`id`, `submitDate`, `clientName`, `companyName`, `clientEmail`, `clientwhatsApp`) VALUES ('','$submitDate','$clientName','$companyName','$clientEmail','$clientWhatsapp')";
        if ($con->query($insert_query) === TRUE) {
            echo "Record Added successfully";
          } else {
            echo "Error inserting record: " . $con->error;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sytles/index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./scripts/index.js" defer></script>
    <title>URDI</title>
</head>
<body>
    <div class="header">
        <div class="imageDiv" id="logoDiv">
            <img src="./Assets/images/9PTpbKI__400x400.png" alt="URDI" srcset="" id="logoImg"/>
        </div>
        <div id="websitetitleDiv">
            <p id="websiteTitle">URDI</p><br/>
            <p id="websitesubTitle">Upcycling Research & Development Institute</p>
        </div>
        <div class="navDiv" id="topNav">
            <ul id="topnavUl">
                <li class="topnavLi">Home</li>
                <li class="topnavLi">About Us</li>
                <li class="topnavLi">Contact</li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div id="homePanel">
            <div class="contentsubPanel" id="topsubPanel">
                <div class="carousel" id="carouselId">
                    <div class="slideshow-container">
                        <?php 
                        $casql = "SELECT cimg_id,cimg_name,cimg_path,cimg_topic,cimg_title,cimg_desc FROM carousel";
                        $camsql = "SELECT MAX(cimg_id) FROM carousel";
                        $caresult = $con->query($casql);
                        $camresult = $con->query($camsql);
                        $totrows = 0;
                        if ($camresult !== false && $camresult->num_rows > 0) {                        
                        // output data of each row
                        while($roww = $camresult->fetch_assoc()) {
                            // echo implode(',', $roww);
                            $totrows = implode(',', $roww);
                        }
                        }

                        $row_num = 0;
                        if ($caresult !== false && $caresult->num_rows > 0) {                        
                        // output data of each row
                            while($row = $caresult->fetch_assoc()) {
                                $row_num = $row_num + 1;
                                echo '<div class="mySlides fade">';
                                    echo '<div class="numbertext">' . $row_num . '/' . $totrows . '</div>';
                                        echo "<img src='./Assets/images/" . $row["cimg_name"]. "' style='width:900px; height:500px;'/>";
                                    echo '<div class="text">'. $row["cimg_topic"].'</div>';
                                    echo '<div class="cTitle" id='. $row["cimg_id"].'>'. $row["cimg_title"].'</div>';
                                echo '</div>';
                            }
                        }
                        ?>
                        
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>

                    </div>
                    <br/>
                        <?php 
                            $casql = "SELECT cimg_id FROM carousel";
                            $caresult = $con->query($casql);
                            $row_num1 = 0;
                            if ($caresult !== false && $caresult->num_rows > 0) {                        
                                // output data of each row
                                echo '<div style="text-align:center">';
                                while($row = $caresult->fetch_assoc()) {
                                        $row_num1 = $row_num1 + 1;
                                        // echo $row_num1;
                                        echo '<span class="dot" onclick="currentSlide('.$row_num1.')"></span>';
                                }
                                echo '</div>';
                            }
                        ?>
                </div>
                <div class="services" id="servicesId">
                    <table id="servicesTable">
                        <tr>
                            <th colspan="2">Services</th>
                        </tr>
                        <tr>
                            <td class="servicetableTd" id="researchReports">Research Reports</td>
                            <td class="servicetableTd" id="aeorServices">AEO Reg Services</td>
                        </tr>
                        <tr>
                            <td class="servicetableTd" id="dataServices">Data Services</td>
                            <td class="servicetableTd" id="infoServices">Info Services</td>
                        </tr>
                        <tr>
                            <td class="servicetableTd" id="recyclingShivir">Recycling Shivir</td>
                            <td class="servicetableTd" id="videoMagazine">Video Magazine</td>
                        </tr>
                        <tr>
                            <td class="servicetableTd" id="rndTraining">R&D Training</td>
                            <td class="servicetableTd" id="specialAssignments">Special Assignments</td>
                        </tr>
                    </table>
                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                                <form method="POST" action="" enctype="multipart/form-data" class="serviceformDiv" id="researchreportForm">
                                    <p class="serviceformHeader">Research Reports</p>
                                    <div id="researchReportDiv">
                                        <table border=1 id="researchReportTable">       
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="rrcb1"  value='true'id="rrcb1">
                                                    <label for="rrcb1">Efficiency calculation and comparison of furnaces (32 Pages)</label><br/>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="rrcb2"  value='true'id="rrcb2">
                                                    <label for="rrcb2">Yield calculation of various types of scraps as per ISRI grades (32 Pages)</label><br/>
                                                </td>
                                            </tr>                             
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="rrcb3"  value='true'id="rrcb3">
                                                    <label for="rrcb3">Recycling of LM25 clean chips by immersion and direct technique (24 Pages)</label><br/>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="rrcb4"  value='true'id="rrcb4">
                                                    <label for="rrcb4">Effects of filtration on casting of Aluminium alloys (20 Pages)</label><br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="rrcb5"  value='true'id="rrcb5">
                                                    <label for="rrcb5">Study on Fe reduction through element sedimentation in scrap Al (43 Pages)</label><br/>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="rrcb6"  value='true'id="rrcb6">
                                                    <label for="rrcb6">Studies on recycling of H30 Aluminium Alloy Scraps (55 Pages)</label><br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="rrcb7"  value='true'id="rrcb7">
                                                    <label for="rrcb7">Study to prevent Magnesium loss in LM25 Al Scrap Recycling (79 Pages)</label><br/>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="rrcb8"  value='true'id="rrcb8">
                                                    <label for="rrcb8">Improving Mechanical Properties by Element Addition in Scraps – ADC 12 (38 Pages)</label><br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="rrcb9"  value='true'id="rrcb9">
                                                    <label for="rrcb9">Improving Mechanical Properties by Element Addition in Scraps – 6063 (HE9) (38 Pages)</label><br/>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="rrcb10" value='true' id="rrcb10">
                                                    <label for="rrcb10">Study on effects of known pollutants in Aluminium (60 Pages)</label><br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="rrcb11" value='true' id="rrcb11">
                                                    <label for="rrcb11">Effect of heat treatment technique on recycled aluminium alloy (55 Pages)</label><br/>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="rrcb12" value='true' id="rrcb12">
                                                    <label for="rrcb12">Study on impact of RE element and Die characterization of recycled Aluminum (51 Pages)</label><br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="rrcb13" value='true' id="rrcb13">
                                                    <label for="rrcb13">Study on Temperature and Time optimization on LM25 scrap melting process (21 Pages)</label><br/>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="rrcb14" value='true' id="rrcb14">
                                                    <label for="rrcb14">Enhancing the recycling efficiency of Teen and Telic Aluminium scraps (41 Pages)</label><br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="rrcb15" value='true' id="rrcb15">
                                                    <label for="rrcb15">Optimization of Melting and Holding Temperature to improve the recycling efficiency of Teen and Telic Aluminium scraps (35 Pages)</label><br/>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="rrcb16" value='true' id="rrcb16">
                                                    <label for="rrcb16">Synthesis of Al6063 graphene composites for structural and automotive applications (33 Pages)</label><br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="rrcb17" value='true' id="rrcb17">
                                                    <label for="rrcb17">Influence of ball milled Mn&Cr powder on the properties of recycled Al-Si-Mg alloys (44 Pages)</label><br/>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="rrcb18" value='true' id="rrcb18">
                                                    <label for="rrcb18">Process optimization for effective yield on aluminum turning scraps (500 Kg) (21 Pages)</label><br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="rrcb19" value='true' id="rrcb19">
                                                    <label for="rrcb19">Sedimentation of Iron (Fe) and other impurities by allied particle addition in Nano and Micro scales (32 Pages)</label><br/>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="rrcb20" value='true' id="rrcb20">
                                                    <label for="rrcb20">Role of salt fluxes on refining Recycled aluminium melts (38 Pages)</label><br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="rrcb21" value='true' id="rrcb21">
                                                    <label for="rrcb21">Alloy conversion from low Al-Si-Cu alloy to high Al-Si-Cu-Mg alloy (450Kg) (25 Pages)</label><br/>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="rrcb22" value='true' id="rrcb22">
                                                    <label for="rrcb22">Composite addition of Al2O3 and Fe2O3 in Al-Si-Mg alloy for structural reinforcement (45 Pages)</label><br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="rrcb23" value='true' id="rrcb23">
                                                    <label for="rrcb23">Development of special grade Al-Mg and Al-Cu alloy for commercial & strategic applications (24 Pages)</label><br/>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- <input type="checkbox" name="rrcb24" value='true' id="rrcb24"> -->
                                        <p>Please share more details: </p><br/>
                                        <label for="resrepclientName">Name: </label><br/>
                                        <input type="text" name="resrepclientName" id="resrepclientName" required><br/>
                                        <label for="resrepcompanyName">Company: </label><br/>
                                        <input type="text" name="resrepcompanyName" id="resrepcompanyName" required><br/>
                                        <label for="resrepclientMail">Email Id: </label><br/>
                                        <input type="email" name="resrepclientMail" id="resrepclientMail" required><br/>
                                        <label for="resrepclientWaNum">WhatsApp Number: </label><br/>
                                        <input type="tel" name="resrepclientWaNum" id="resrepclientWaNum"/><br/>
                                        <!-- <input type="button" name="researchreportsSubmit" value="Submit"> -->
                                        <input type="submit" name="researchreportsSubmit" value="Submit">
                                    </div>
                                    
                                </form>
                                <form method="POST" action="" enctype="multipart/form-data" class="serviceformDiv" id="aeorServicesForm">
                                    <p class="serviceformHeader">AEO Reg Services</p>
                                    <p>I have the following requirement. Would you be able to service it</p><br/>
                                    <label for="aeorsclientName">Name: </label><br/>
                                    <input type="text" name="aeorsclientName" id="aeorsclientName" required><br/>
                                    <label for="aeorscompanyName">Company: </label><br/>
                                    <input type="text" name="aeorscompanyName" id="aeorscompanyName" required><br/>
                                    <label for="aeorsclientMail">Email Id: </label><br/>
                                    <input type="email" name="aeorsclientMail" id="aeorsclientMail" required><br/>
                                    <label for="aeorsclientWaNum">WhatsApp Number: </label><br/>
                                    <input type="tel" name="aeorsclientWaNum" id="aeorsclientWaNum"/><br/>
                                    <!-- <input type="button" name="aeosvcSubmit" value="Submit">Submit</button> -->
                                    <input type="submit" name="aeosvcSubmit" value="Submit">
                                </form>
                                <form method="POST" action="" enctype="multipart/form-data" class="serviceformDiv" id="dataServicesForm">
                                    <p class="serviceformHeader">Data Services</p>
                                    <p>I am interested in (pl tick the following) </p><br/>
                                    <input type="checkbox" name="datsvf1" id="datsvf1">
                                    <label for="datsvf1">Database of Ferrous Recyclers</label><br/>
                                    <input type="checkbox" name="datsvf2" id="datsvf2">
                                    <label for="datsvf2">Database of Non-Ferrous Recyclers</label><br/>
                                    <input type="checkbox" name="datsvf3" id="datsvf3">
                                    <label for="datsvf3">Database of Aluminium Recyclers</label><br/>
                                    <input type="checkbox" name="datsvf4" id="datsvf4">
                                    <label for="datsvf4">Database of e-waste Recyclers</label><br/>
                                    <input type="checkbox" name="datsvf5" id="datsvf5">
                                    <label for="datsvf5">Database of Tyre & Rubber Recyclers</label><br/>
                                    <input type="checkbox" name="datsvf6" id="datsvf6">
                                    <label for="datsvf6">Database of Paper Recyclers</label><br/>
                                    <p>Please share more details: </p><br/>
                                    <label for="datsvfclientName">Name: </label><br/>
                                    <input type="text" name="datsvfclientName" id="datsvfclientName" required><br/>
                                    <label for="datsvfcompanyName">Company: </label><br/>
                                    <input type="text" name="datsvfcompanyName" id="datsvfcompanyName" required><br/>
                                    <label for="datsvfclientMail">Email Id: </label><br/>
                                    <input type="email" name="datsvfclientMail" id="datsvfclientMail" required><br/>
                                    <label for="datsvfclientWaNum">WhatsApp Number: </label><br/>
                                    <input type="tel" name="datsvfclientWaNum" id="datsvfclientWaNum"/><br/>
                                    <!-- <input type="button" name="dataservicesSubmit" value="Submit">Submit</button> -->
                                    <input type="submit" name="dataservicesSubmit" value="Submit">
                                </form>
                                <form method="POST" action="" enctype="multipart/form-data" class="serviceformDiv" id="infoServicesForm">
                                    <p class="serviceformHeader">Info Services</p>
                                    <p>I am interested to know more about Info Services on</p><br/>
                                    <input type="checkbox" name="insvc1" id="insvc1">
                                    <label for="insvc1">Weekly</label><br/>
                                    <input type="checkbox" name="insvc2" id="insvc2">
                                    <label for="insvc2">Fortnightly</label><br/>
                                    <input type="checkbox" name="insvc3" id="insvc3">
                                    <label for="insvc3">Monthly</label><br/>
                                    <label for="insvcclientName">Name: </label><br/>
                                    <input type="text" name="insvcclientName" id="insvcclientName" required><br/>
                                    <label for="insvccompanyName">Company: </label><br/>
                                    <input type="text" name="insvccompanyName" id="insvccompanyName" required><br/>
                                    <label for="insvcclientMail">Email Id: </label><br/>
                                    <input type="email" name="insvcclientMail" id="insvcclientMail" required><br/>
                                    <label for="insvcclientWaNum">WhatsApp Number: </label><br/>
                                    <input type="tel" name="insvcclientWaNum" id="insvcclientWaNum"/><br/>
                                    <!-- <input type="button" name="infoservicesSubmit" value="Submit">Submit</button> -->
                                    <input type="submit" name="infoservicesSubmit" value="Submit">
                                </form>
                                <form method="POST" action="" enctype="multipart/form-data" class="serviceformDiv" id="recyclingShivirForm">
                                    <p class="serviceformHeader">Recycling Shivir</p>
                                    <p>I am interested to know more about Info Services on</p><br/>
                                    <input type="checkbox" name="resh1" id="resh1">
                                    <label for="resh1">Weekly</label><br/>
                                    <input type="checkbox" name="resh2" id="resh2">
                                    <label for="resh2">Fortnightly</label><br/>
                                    <input type="checkbox" name="resh3" id="resh3">
                                    <label for="resh3">Monthly</label><br/>
                                    <label for="reshclientName">Name: </label><br/>
                                    <input type="text" name="reshclientName" id="reshclientName" required><br/>
                                    <label for="reshcompanyName">Company: </label><br/>
                                    <input type="text" name="reshcompanyName" id="reshcompanyName" required><br/>
                                    <label for="reshclientMail">Email Id: </label><br/>
                                    <input type="email" name="reshclientMail" id="reshclientMail" required><br/>
                                    <label for="reshclientWaNum">WhatsApp Number: </label><br/>
                                    <input type="tel" name="reshclientWaNum" id="reshclientWaNum"/><br/>
                                    <!-- <input type="button" name="recyclingshivirSubmit" value="Submit">Submit</button> -->
                                    <input type="submit" name="recyclingshivirSubmit" value="Submit">
                                </form>
                                <form method="POST" action="" enctype="multipart/form-data" class="serviceformDiv" id="videoMagazineForm">
                                    <p class="serviceformHeader">Video Magazine</p>
                                    <p>I am interested to see the video magazine</p><br/>
                                    <label for="vidmagclientName">Name: </label><br/>
                                    <input type="text" name="vidmagclientName" id="vidmagclientName" required><br/>
                                    <label for="vidmagcompanyName">Company: </label><br/>
                                    <input type="text" name="vidmagcompanyName" id="vidmagcompanyName" required><br/>
                                    <label for="vidmagclientMail">Email Id: </label><br/>
                                    <input type="email" name="vidmagclientMail" id="vidmagclientMail" required><br/>
                                    <label for="vidmagclientWaNum">WhatsApp Number: </label><br/>
                                    <input type="tel" name="vidmagclientWaNum" id="vidmagclientWaNum"/><br/>
                                    <!-- <input type="button" name="videomagazineSubmit" value="Submit">Submit</button> -->
                                    <input type="submit" name="videomagazineSubmit" value="Submit">
                                </form>
                                <form method="POST" action="" enctype="multipart/form-data" class="serviceformDiv" id="rndTrainingForm">
                                    <p class="serviceformHeader">RnD Training</p>
                                    <p>I am interested to know more about your Training and allied services</p><br/>
                                    <label for="rndtrnclientName">Name: </label><br/>
                                    <input type="text" name="rndtrnclientName" id="rndtrnclientName" required><br/>
                                    <label for="rndtrncompanyName">Company: </label><br/>
                                    <input type="text" name="rndtrncompanyName" id="rndtrncompanyName" required><br/>
                                    <label for="rndtrnclientMail">Email Id: </label><br/>
                                    <input type="email" name="rndtrnclientMail" id="rndtrnclientMail" required><br/>
                                    <label for="rndtrnclientWaNum">WhatsApp Number: </label><br/>
                                    <input type="tel" name="rndtrnclientWaNum" id="rndtrnclientWaNum"/><br/>
                                    <!-- <input type="button" name="rndtrainingSubmit" value="Submit">Submit</button> -->
                                    <input type="submit" name="rndtrainingSubmit" value="Submit">
                                </form>
                                <form method="POST" action="" enctype="multipart/form-data" class="serviceformDiv" id="specialAssignmentsForm">
                                    <p class="serviceformHeader">Special Assignments</p>
                                    <p>I have the following requirement. Would you be able to service it</p><br/>
                                    <label for="spcassclientName">Name: </label><br/>
                                    <input type="text" name="spcassclientName" id="spcassclientName" required><br/>
                                    <label for="spcasscompanyName">Company: </label><br/>
                                    <input type="text" name="spcasscompanyName" id="spcasscompanyName" required><br/>
                                    <label for="spcassclientMail">Email Id: </label><br/>
                                    <input type="email" name="spcassclientMail" id="spcassclientMail" required><br/>
                                    <label for="spcassclientWaNum">WhatsApp Number: </label><br/>
                                    <input type="tel" name="spcassclientWaNum" id="spcassclientWaNum"/><br/>
                                    <!-- <input type="button" name="splassgnSubmit" value="Submit">Submit</button> -->
                                    <input type="submit" name="splassgnSubmit" value="Submit">
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="horizontalAdvt" id="hadvt1">
        <?php 
                    // $casql = "SELECT adpath,adlink,adimgname FROM `advttable` WHERE advtid = 1";
                    // $caresult = $con->query($casql);
                    // if ($caresult !== false && $caresult->num_rows > 0) {
                    //     // output data of each row
                    //     while($row = $caresult->fetch_assoc()) {
                    //         echo "<a href=".$row["adlink"]."><img src='./Assets/images/" . $row["adimgname"] . "'/></a>";
                    //     }
                    // }
                ?>
            </div> -->
            <div class="articleSection" id="articleSectionId">
                <div class="articleDiv" id="articleDivId">
                    <div class="articlesubDiv" id="imgblogPost">
                        <div class="horizontalAdvt" id="hadvt1">
                                <?php 
                                    $casql = "SELECT adpath,adlink,adimgname FROM `advttable` WHERE advtid = 1";
                                    $caresult = $con->query($casql);
                                    if ($caresult !== false && $caresult->num_rows > 0) {
                                        // output data of each row
                                        while($row = $caresult->fetch_assoc()) {
                                            echo "<a href=".$row["adlink"]."><img src='./Assets/images/" . $row["adimgname"] . "'/></a>";
                                        }
                                    }
                                ?>
                            </div>
                        <div class="Container">
                            <!-- <h3 class="Head">Featured Products <span class="Arrows"></span></h3> -->
                            <!-- Carousel Container -->
                            <div class="SlickCarousel">
                                <?php 
                                    $casql = "SELECT nimg_id, nimg_name, nimg_path, nimg_desc, nimg_blogtitle, nimg_blogtext FROM newsimage";
                                    $caresult = $con->query($casql);
                                    $row_num = 0;
                                    if ($caresult !== false && $caresult->num_rows > 0) {
                                        // output data of each row
                                        while($row = $caresult->fetch_assoc()) {
                                            $row_num = $row_num + 1;
                                            echo '<!-- Item -->';
                                            echo '<div class="ProductBlock">';
                                            echo '<div class="Content">';
                                                echo '<div class="img-fill">';
                                                // echo "<img src='./Assets/images/" . $row["nimg_name"]. "' style='width:200px; id=" . $row["nimg_id"]. "'/>";
                                                echo "<img src='./Assets/images/" . $row["nimg_name"]. "' style='width:200px;' class='nblogimg' id='nblogimg".$row["nimg_id"]."' alt=" . $row["nimg_id"]. ">";
                                                echo '</div>';
                                                echo '<h3>' . $row["nimg_desc"]. '</h3>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<!-- Item -->';
                                        }
                                    }
                                ?>
                                <!-- <form action="" method="POST">
                                    <button name="blogimgitemClick" id="blogimgitemClick" style="display:none;">blogimgitemClick</button>
                                </form> -->
                            </div>
                            <!-- Carousel Container -->
                        </div>
                    </div>
                <div class="articlesubDiv" id="vidblogPost">
                    <div class="Container">
                            <!-- <h3 class="Head">Featured Products <span class="Arrows"></span></h3> -->
                            <!-- Carousel Container -->
                            <div class="SlickCarousel">
                                <?php 
                                    $casql = "SELECT nvid_id, nvid_name, nvid_path, nvid_desc, nvid_blogtitle, nvid_blogtext FROM newsvideo";
                                    $caresult = $con->query($casql);
                                    $row_num = 0;
                                    if ($caresult !== false && $caresult->num_rows > 0) {
                                        // output data of each row
                                        while($row = $caresult->fetch_assoc()) {
                                            $row_num = $row_num + 1;
                                            echo '<!-- Item -->';
                                            echo '<div class="ProductBlock">';
                                            echo '<div class="Content">';
                                                echo '<div class="img-fill">';
                                                echo "<video class='nblogvid' id='nblogvid".$row["nvid_id"]."' alt=" . $row["nvid_id"]. " preload='metadata'>";
                                                echo "<source src='./Assets/videos/" . $row["nvid_name"]. "' type='video/mp4'>";
                                                echo "</video>";
                                                echo '</div>';
                                                echo '<h3>' . $row["nvid_desc"]. '</h3>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<!-- Item -->';
                                        }
                                    }
                                ?>
                                <!-- <form action="" method="POST">
                                    <button name="blogviditemClick" id="blogviditemClick" style="display:none;">blogviditemClick</button>
                                </form> -->
                            </div>
                            <!-- Carousel Container -->
                        </div>
                        <div class="horizontalAdvt" id="hadvt2">
                            <?php 
                                $casql = "SELECT adpath,adlink,adimgname FROM `advttable` WHERE advtid = 2";
                                $caresult = $con->query($casql);
                                if ($caresult !== false && $caresult->num_rows > 0) {
                                    // output data of each row
                                    while($row = $caresult->fetch_assoc()) {
                                        echo "<a href=".$row["adlink"]."><img src='./Assets/images/" . $row["adimgname"] . "'/></a>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="verticalAdvt" id="vadvt1">
                    <?php 
                        $casql = "SELECT adpath,adlink,adimgname FROM `advttable` WHERE advtid = 3";
                        $caresult = $con->query($casql);
                        if ($caresult !== false && $caresult->num_rows > 0) {
                            // output data of each row
                            while($row = $caresult->fetch_assoc()) {
                                echo "<a href=".$row["adlink"]."><img src='./Assets/images/" . $row["adimgname"] . "'/></a>";
                            }
                        }
                    ?>
                </div>
            <!-- <div class="horizontalAdvt" id="hadvt2">
                <?php 
                    // $casql = "SELECT adpath,adlink,adimgname FROM `advttable` WHERE advtid = 2";
                    // $caresult = $con->query($casql);
                    // if ($caresult !== false && $caresult->num_rows > 0) {
                    //     // output data of each row
                    //     while($row = $caresult->fetch_assoc()) {
                    //         echo "<a href=".$row["adlink"]."><img src='./Assets/images/" . $row["adimgname"] . "'/></a>";
                    //     }
                    // }
                ?>
            </div> -->
        <div id="aboutusPanel">
            <h1>ABOUT URDI</h1>
            <p>[Upcycling Research & Development (R&D) Institute]</p>

            <p>
                URDI (Upcycling R&D Institute) is a start-up initiative to scale up organisations and industries in the country

                As India along with world economies are progressing in their transition from linear model to circular where energy efficiency and sustainability are the basic tenets of growth for all, URDI as an organisation proposes to be active in the segment of Recycling and Upcycling in the country. 
                It aims to give fillip to services aimed to educate, promote activities in the above domains through various programme interventions. 
                Programme components to help stakeholders in Recycling industries across important verticals like Metals, Plastic, Waste, E-waste, Tyre and Rubber:
                DATA: Data mining and sharing, using modern technological tools like Artificial Intelligence, Big Data and Machine Learning to help Indian industries to be competitive in the market. 
                TRAINING: Education, Training and Refresher programmes aimed at skill development of participating stakeholders.  
                PROPAGATION AND PROMOTION: Using print and social media tools to promote the need for recycling across target audience. Information, Education and Communication (IEC) tools like street plays, meetings, conferences, and webinars would be used extensively for this purpose.
                Special attention would be paid on existing technological and other innovations that are indigenous in nature so that their use is more widespread and support initiatives such as Make in India.
                RESEARCH AND DEVELOPMENT (R&D): URDI would take up individually and with like-minded, domestic and foreign, individuals and institutions to infuse modern processes and technologies into our industry operations. Special efforts would be directed to increase use of modern tools of Artificial Intelligence, Big Data, etc.

                Operational geography: Headquartered in Palakkad, Kerala, URDI aims to reach out pan-India, with personnel working in important urban centres like Mumbai, Delhi and Chennai.
            </p>
        </div>
        <div id="contactPanel">
            <h1>Contact</h1>
        </div>
        <div id="postsPanel">
            <div id="carPosts">
                <?php
                    $casql = "SELECT `cimg_id`, `cimg_name`, `cimg_path`, `cimg_topic`, `cimg_title`, `cimg_desc` FROM `carousel`";
                    $caresult = $con->query($casql);
                    if ($caresult !== false && $caresult->num_rows > 0) {
                        // output data of each row
                        while($row = $caresult->fetch_assoc()) {
                            echo '<div class="carimgpostReadClass" id="carimgpostRead'.$row["cimg_id"].'">';
                                echo '<p class="cartopic" style="font-size: 13px;background-color: green;width: fit-content;padding: 2px 20px;">'.$row["cimg_topic"].'</p>';
                                echo '<h2 class="carTitle" style="font-size: 35px;font-weight: 500;">'.$row["cimg_title"].'</h2>';
                                echo '<p class="carAuthor" style="font-size: 14px;color: darkgray;">By URDI Admin</p>';
                                echo "<img src='./Assets/images/" . $row["cimg_name"]. "' style='width: 50%;margin: 0 0 0 25%;'>";
                                echo '<p class="carPara" style="font-size: 15px;">'.$row["cimg_desc"].'</p>';
                            echo '</div>';
                        }
                    }
                ?> 
            </div>
            <div id="nimgPosts">
                <?php
                    $casql = "SELECT nimg_id, nimg_name, nimg_path, nimg_desc, nimg_blogtitle, nimg_blogtext FROM newsimage";
                    $caresult = $con->query($casql);
                    if ($caresult !== false && $caresult->num_rows > 0) {
                        // output data of each row
                        while($row = $caresult->fetch_assoc()) {
                            echo '<div class="blogimgpostReadClass" id="blogimgpostRead'.$row["nimg_id"].'">';
                                echo '<h3 style="font-size: 35px;font-weight: 500;">'.$row["nimg_blogtitle"].'</h3>';
                                echo "<img src='./Assets/images/" . $row["nimg_name"]. "'  style='width: 50%;margin: 0 0 0 25%;'>";
                                echo '<p style="font-size: 15px;">'.$row["nimg_blogtext"].'</p>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
            <div id="nvidPosts">
                <?php
                    $casql = "SELECT nvid_id, nvid_name, nvid_path, nvid_desc, nvid_blogtitle, nvid_blogtext FROM newsvideo";
                    $caresult = $con->query($casql);
                    if ($caresult !== false && $caresult->num_rows > 0) {
                        // output data of each row
                        while($row = $caresult->fetch_assoc()) {
                            echo '<div class="blogvidpostReadClass" id="blogvidpostRead'.$row["nvid_id"].'">';
                                echo '<h3 style="font-size: 35px;font-weight: 500;">'.$row["nvid_blogtitle"].'</h3>';
                                // echo "<img src='./Assets/images/" . $row["nvid_name"]. "' style='width:400px;'>";
                                echo "<video preload='metadata' style='width: 50%;margin: 0 0 0 25%;'>";
                                echo "<source src='./Assets/videos/" . $row["nvid_name"]. "' type='video/mp4'>";
                                echo "</video>";
                                echo '<p style="font-size: 15px;">'.$row["nvid_blogtext"].'</p>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="footer" id="footerId">
        <div class="imageDiv" id="botlogoDiv">
            <img src="./Assets/images/9PTpbKI__400x400.png" alt="URDI" srcset="" id="botlogoImg"/>
        </div>
        <div id="botwebsitetitleDiv">
            <p id="botwebsiteTitle">URDI</p><br/>
            <p id="botwebsitesubTitle">Upcycling Research & Development Institute</p>
        </div>
        <!-- <div class="botnavDiv" id="botNav">
            <ul id="bottopnavUl">
                <li class="bottopnavLi">Home</li>
                <li class="bottopnavLi">About Us</li>
                <li class="bottopnavLi">Contact</li>
            </ul>
        </div> -->
    </div>
    <!-- The Modal -->
    <div id="myModal1" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <?php
            $casql = "SELECT nimg_id, nimg_name, nimg_path, nimg_desc, nimg_blogtitle, nimg_blogtext FROM newsimage";
            $caresult = $con->query($casql);
            if ($caresult !== false && $caresult->num_rows > 0) {
                // output data of each row
                while($row = $caresult->fetch_assoc()) {
                    echo '<div class="blogimgpostReadClass" id="blogimgpostRead'.$row["nimg_id"].'">';
                        echo '<h3 style="font-size: 35px;font-weight: 500;">'.$row["nimg_blogtitle"].'</h3>';
                        echo "<img src='./Assets/images/" . $row["nimg_name"]. "'  style='width: 50%;margin: 0 0 0 25%;'>";
                        echo '<p style="font-size: 15px;">'.$row["nimg_blogtext"].'</p>';
                    echo '</div>';
                }
            }
        ?>      
    </div>
    </div>
    <!-- The Modal -->
    <div id="myModal2" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <?php
            $casql = "SELECT nvid_id, nvid_name, nvid_path, nvid_desc, nvid_blogtitle, nvid_blogtext FROM newsvideo";
            $caresult = $con->query($casql);
            if ($caresult !== false && $caresult->num_rows > 0) {
                // output data of each row
                while($row = $caresult->fetch_assoc()) {
                    echo '<div class="blogvidpostReadClass" id="blogvidpostRead'.$row["nvid_id"].'">';
                        echo '<h3 style="font-size: 35px;font-weight: 500;">'.$row["nvid_blogtitle"].'</h3>';
                        // echo "<img src='./Assets/images/" . $row["nvid_name"]. "' style='width:400px;'>";
                        echo "<video preload='metadata' style='width: 50%;margin: 0 0 0 25%;'>";
                        echo "<source src='./Assets/videos/" . $row["nvid_name"]. "' type='video/mp4'>";
                        echo "</video>";
                        echo '<p style="font-size: 15px;">'.$row["nvid_blogtext"].'</p>';
                    echo '</div>';
                }
            }
        ?>      
    </div>
    
    </div>
    <!-- The Modal -->
    <div id="myModal3" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <form action="" method="post" id="visitorModal">
            <h1>Welcome to URDI!</h1>
            <p>Please enter your details: </p><br/>
            <label for="visitorName">Name: </label><br/>
            <input type="text" name="visitorName" id="visitorName"><br/>
            <label for="visitorEmail">Email Id: </label><br/>
            <input type="email" name="visitorEmail" id="visitorEmail"><br/>
            <input type="submit" value="Submit">
        </form>     
    </div>
    </div>
    <!-- The Modal -->
    <div id="myModal4" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <?php
            $casql = "SELECT `cimg_id`, `cimg_name`, `cimg_path`, `cimg_topic`, `cimg_title`, `cimg_desc` FROM `carousel`";
            $caresult = $con->query($casql);
            if ($caresult !== false && $caresult->num_rows > 0) {
                // output data of each row
                while($row = $caresult->fetch_assoc()) {
                    echo '<div class="carimgpostReadClass" id="carimgpostRead'.$row["cimg_id"].'">';
                        echo '<p class="cartopic" style="font-size: 13px;background-color: green;width: fit-content;padding: 2px 20px;">'.$row["cimg_topic"].'</p>';
                        echo '<h2 class="carTitle" style="font-size: 35px;font-weight: 500;">'.$row["cimg_title"].'</h2>';
                        echo '<p class="carAuthor" style="font-size: 14px;color: darkgray;">By URDI Admin</p>';
                        echo "<img src='./Assets/images/" . $row["cimg_name"]. "' style='width: 50%;margin: 0 0 0 25%;'>";
                        echo '<p class="carPara" style="font-size: 15px;">'.$row["cimg_desc"].'</p>';
                    echo '</div>';
                }
            }
        ?>      
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        setInterval(() => {
            plusSlides(1);
        }, 3000);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        }
    </script>
</body>
</html>