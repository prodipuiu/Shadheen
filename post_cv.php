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
    </style>
</head>
<body>

    <div class="form_style">
        <form class="ui form" method="post" action="post_cv_action.php">
            <div class="field">
                <label>Username</label>
                <input type="text" name="num" value="<?php echo $_SESSION['username']; ?>" readonly>
            </div>
            <div class="field">
                <label>Employment History</label>
                <textarea type="text" name="employ" placeholder="Employment History"></textarea>
            </div>
            
            <div class="field">
                <label>Education</label>
                <textarea type="text" name="edu" placeholder="Education"></textarea>
            </div>
            <div>
                <label>Skill</label>
                <input type="text" name="skill" placeholder="skill">
            </div>
            
            <div class="field">
                <label>Language</label>
                <input type="text" name="lang" placeholder="Language"></input>
            </div>
            
            
            <div class="field">
                <label>Certificates</label>
                <input type="text" name="certi" placeholder="Certificates"></input>
            </div>
            <br>
            <div class="field">
                <label>Award</label>
                <textarea type="text" name="awrd" placeholder="Award"></textarea>
            </div>
            <br>
            <div class="field">
                <label>Link</label>
                <input type="text" name="link" placeholder="link">
            </div>
            <br>
            <div class="field">
                <label>Volunterring</label>
                <input type="text" name="volun" placeholder="Volunterring">
            </div>
            <br>
            <div class="field">
                <label>Interest</label>
                <input type="text" name="inter" placeholder="Interest">
            </div>
            <div>
                <label>Reference</label>
                <input type="text" name="refer" placeholder="Reference">
            </div>
            
            <button class="ui button">Submit</button>
            
            
            
        </form>
    </div>
   

    

    
</body>
</html>