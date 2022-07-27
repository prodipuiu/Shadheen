<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css ">
    <style>
        .form_style{
            width: 300px;
            margin: 100px;
        }
        .data{
            width: 100%;
            background: #ddd;
            padding: 10px 15px;
            font-size: 16px !important;
        }
        .field .heading{
            color: #85b7d9 !important;
            font-size: 16px !important;
        }

    </style>
</head>
<body>
<?php 
    require_once('db_config.php');

    $sessionUser = $_GET['user'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }

    $records = mysqli_query($conn, "SELECT * FROM `cv` WHERE `username` = '$sessionUser'"); 

    while($data = mysqli_fetch_array($records)){
?>

    <div class="form_style">
        <form class="ui form">
        <div class="field">
            <label class="heading">Username</label>
            <label class="data"><?php echo $data['username']; ?></label>
        </div>
        <div class="field">
            <label class="heading">Employment History</label>
            <label class="data"><?php echo $data['employmenthistory']; ?></label>
        </div>
        
        <div class="field">
            <label class="heading">Education</label>
            <label class="data"><?php echo $data['education']; ?></label>
        </div>
        <div class="field">
            <label class="heading">Skill</label>
            <label class="data"><?php echo $data['skills']; ?></label>
        </div>
        
        <div class="field">
            <label class="heading">Language</label>
            <label class="data"><?php echo $data['languages']; ?></label>
        </div>
        
        <div class="field">
            <label class="heading">Certificates</label>
            <label class="data"><?php echo $data['certifications']; ?></label>
        </div>

        <div class="field">
            <label class="heading">Award</label>
            <label class="data"><?php echo $data['awards']; ?></label>
        </div>

        <div class="field">
            <label class="heading">Link</label>
            <label class="data"><?php echo $data['links']; ?></label>
        </div>

        <div class="field">
            <label class="heading">Volunterring</label>
            <label class="data"><?php echo $data['volunteering']; ?></label>
        </div>

        <div class="field">
            <label class="heading">Interest</label>
            <label class="data"><?php echo $data['interests']; ?></label>
        </div>

        <div class="field">
            <label class="heading">Reference</label>
            <label class="data"><?php echo $data['reference']; ?></label>
        </div>
        <br><br>
        </form>

        <?php } ?>
    </div>
   
</body>
</html>

<?php mysqli_close($conn);  ?>