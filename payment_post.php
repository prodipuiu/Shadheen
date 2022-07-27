<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <?php 

  
   require_once('db_config.php'); 
     $cnn = new mysqli($servername, $username, $password, $dbname);
            if ($cnn->connect_errno) {
                printf("Connect failed: %s\n", $cnn->connect_error);
               exit();
               }
             

  $sql="SELECT * FROM users WHERE username='".$_SESSION['username']."'";   

    if ($rslt = $cnn->query($sql)) {
        $rww = $rslt->fetch_assoc();
        }        
       
        $x=$rww['location'];
        $y=$rww['contact'];
        $z=$rww['username'];
       

?>
  <style>
    body {
      font-family: Arial;
      font-size: 17px;
      padding: 8px;
    }

    * {
      box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
    }

    .col-25 {
      -ms-flex: 25%;
      /* IE10 */
      flex: 25%;
    }

    .col-50 {
      -ms-flex: 50%;
      /* IE10 */
      flex: 50%;
    }

    .col-75 {
      -ms-flex: 75%;
      /* IE10 */
      flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }

    .container {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
    }

    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    label {
      margin-bottom: 10px;
      display: block;
    }

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .btn {
      background-color: #04AA6D;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    .btn:hover {
      background-color: #45a049;
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }

      .col-25 {
        margin-bottom: 20px;
      }
    }

    ::placeholder {
      color: blue;
      font-size: 16px;
      font-family: monospace;
    }

    input[type="text"] {
      font-size: 16px;
      font-family: monospace;
      color: blue;
    }
  </style>
</head>
<body>
        <div class="row" style="width: 50%; margin-left:auto; margin-right:auto">
          <div class="col-75">
            <div class="container">
              <form action="payment_post_action.php" method="POST">

                <div class="row">
                  <div class="col-50">
                    <h3>Payment </h3>
                    <input type="hidden" name="username" value="">
                    <input type="hidden" name="postID" value="">
                    <label for="fname"><i class="fa fa-user"></i> Username</label>
                    <input type="text" id="fname" name="Username" value="<?php echo $z; ?>" readonly>
                    <label for="contact"><i class="fa fa-envelope"></i> Contact</label>
                    <input type="text" id="contact" name="contact" value="<?php echo $y; ?>" readonly>
                    <label for="loc"><i class="fa fa-address-card-o"></i> Location</label>
                    <input type="text" id="loc" name="location" value="<?php echo $x; ?>" readonly>

                    <label for="amnt"><i class="fa fa-money"></i> Amount</label>
                    <input type="text" id="amnt" name="amount" value="300" readonly>
                    <label for="acc"><i class="fa fa-university"></i> Account</label>
                    <input required type="text" id="acc" name="account" placeholder="" autofocus>

                    <label for="pmnt"><i class="fa fa-credit-card"></i> Payment Option</label>
                    <input required type="radio" id="loc" name="method" value="Bkash">
                    <label for="loc" class="fa">Bkash</label>
                    <input type="radio" id="loc" name="method" value="Rocket">
                    <label for="loc" class="fa">Rocket</label>
                    <br>
                    <input type="submit" style="width:20%; margin-left:40%;">
                  </div>
                </div>
            </div>
            </form>
          </div>
        </div>
        </div>

      </body>
     
</html>