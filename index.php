<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inventory Checkout Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<style>
.form-control {
    border-radius: 5px;
    border: 1px solid #522D80;
}
.thumbnail {
    border: 1px solid #522D80;
    padding: 20px;
}
.thumbnail .caption {
    height:100px;
}
.btn-primary {
    background: #f66733; 
    color: #ffffff;
    border: 1px solid #f66733;
}
.btn:hover {
    border: 1px solid #522D80;
    background: #ffffff;
    color: #522D80;
}
</style>
</head>
<body class="container">
    <div class="page-header">
        <h1>Inventory Checkout Form</h1>
    </div>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="">Promotional Fundraising Items</label>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="./img/Division6FootBanner.jpg" alt="Divisoin 6 Foot Banner">
                      <div class="caption">
                        <label for="division_banner">Divisoin 6 Foot Banner</label>
                        <input type="number" style="margin: 20px 0;" class="form-control col-sm-3" id="division_banner" name="division_banner" placeholder="Enter a quantity. Ex. 5">
                      </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="./img/Division8FootDisplay.jpg" alt="Division 8 Foot Display">
                      <div class="caption">
                        <label for="division_display">Division 8 Foot Display</label>
                        <input type="number" style="margin: 20px 0;" class="form-control col-sm-3" id="division_display" name="division_display" placeholder="Enter a quantity. Ex. 5">
                      </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="./img/DivisionMissionRetractableBanner.jpg" alt="Division Mission Retractable Banner">
                      <div class="caption">
                        <label for="division_mission_banner">Division Mission Retractable Banner</label>
                        <input type="number" style="margin: 20px 0" class="form-control col-sm-3" id="division_mission_banner" name="division_mission_banner" placeholder="Enter a quantity. Ex. 5">
                      </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="./img/DivisionTableDrape.jpg" alt="Division Table Drape">
                      <div class="caption">
                        <label for="table_drape">Division Table Drape</label>
                        <input type="number" style="margin: 20px 0;" class="form-control col-sm-3" id="table_drape" name="table_drape" placeholder="Enter a quantity. Ex. 5">
                      </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="./img/DivisionTailgate6FootBanner.jpg" alt="Division Tailgate 6 Foot Banner">
                      <div class="caption">
                        <label for="division_tailgate">Division Tailgate 6 Foot Banner</label>
                        <input type="number" style="margin: 20px 0;" class="form-control col-sm-3" id="division_tailgate" name="division_tailgate" placeholder="Enter a quantity. Ex. 5">
                      </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="./img/SnowChallenge6FootBanner.jpg" alt="Snow Challenge 6 Foot Banner">
                      <div class="caption">
                        <label for="snow_challenge">Snow Challenge 6 Foot Banner</label>
                        <input type="number" style="margin: 20px 0;" class="form-control col-sm-3" id="snow_challenge" name="snow_challenge" placeholder="Enter a quantity. Ex. 5">
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <label for="fullName" class="">Full Name</label>
                    <input type="text" class="form-control" required id="fullName" name="fullName" placeholder="Name">
                </div>
                <div class="col-sm-4">
                    <label for="email" class="">Email</label>   
                    <input type="email" class="form-control" required id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="col-sm-4">
                    <label for="department" class="">Department</label>
                    <input type="text" class="form-control" required id="department" name="department" placeholder="Department">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <div class="column">
                        <label for="date_needed">Date Needed</label>
                        <input type="date" class="form-control" required id="date_needed" name="date_needed" placeholder="Default input">
                        <label for="return_date">Return Date</label>
                        <input type="date" class="form-control" required id="return_date" name="return_date" placeholder="Default input">
                    </div>
                </div>
                <div class="col-sm-8">
                    <label for="specialInstructions">Special Instructions</label>
                    <textarea class="form-control" id="specialInstructions" name="specialInstructions" rows="4"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn">Reset</button>
    </form>
    <script 
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
        crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous">
    </script>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // assign variables
  $full_name = clean_data($_POST["fullName"]);
  $email = clean_data($_POST["email"]);
  $department = clean_data($_POST["department"]);
  $division_banner = clean_data($_POST["division_banner"]);
  $division_display = clean_data($_POST["division_display"]);
  $division_mission_banner = clean_data($_POST["division_mission_banner"]);
  $table_drape = clean_data($_POST["table_drape"]);
  $division_tailgate= clean_data($_POST["division_tailgate"]);
  $snow_challenge = clean_data($_POST["snow_challenge"]);
  $date_needed = clean_data($_POST["date_needed"]);
  $return_date = clean_data($_POST["return_date"]);
  $special_instructions = clean_data($_POST["specialInstructions"]);
  
  $requested_materials = [];
  if($division_banner){
      $requested_materials['Divisoin 6 Foot Banner'] = $division_banner;
  }
  if($division_display){
      $requested_materials['Division 8 Foot Display'] = $division_display;
  }
  if($division_mission_banner){
      $requested_materials['Division Mission Retractable Banner'] = $division_mission_banner;
  }
  if($table_drape){
      $requested_materials['Division Table Drape'] = $table_drape;
  }
  if($division_tailgate){
      $requested_materials['Division Tailgate 6 Foot Banner'] = $division_tailgate;
  }
  if($snow_challenge){
      $requested_materials['Snow Challenge 6 Foot Banner'] = $snow_challenge;
  }
  $email_material_th = '';
  $email_material_td = '';
  foreach($requested_materials as $key => $value) {
      $email_material_th .= '<th>' . $key . '</th>';
      $email_material_td .= '<td style="padding:0 10px" align="center">' . $value . '</td>';
  }
  // send email
  $to = '';
  $subject = 'Inventory Checkout Request Summary';
  $headers = 'From: inventory_request@sample.edu' . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $message = '<html>
  <head>
    <title>Inventory Checkout Request Summary</title>
  </head>
  <body>
    <p>' . $full_name . ' would like to make a request.</p>
    <table align="center">
      <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Department</th>' . $email_material_th . '
        <th>Date Needed</th>
        <th>Return Date</th>
        <th>Special Instructions</th>
      </tr>
      <tr>
        <td style="padding:0 10px" align="center">' . $full_name . '</td>
        <td style="padding:0 10px" align="center">' . $email . '</td>
        <td style="padding:0 10px" align="center">' . $department . '</td>' . $email_material_td . '
        <td style="padding:0 10px" align="center">' . $date_needed . '</td>
        <td style="padding:0 10px" align="center">' . $return_date . '</td>
        <td style="padding:0 10px" align="center">' . $special_instructions . '</td>
      </tr>
      <tr>
      </tr>
    </table>
  </body>
  </html>
  ';

  mail($to, $subject, $message, $headers);

}

function clean_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
