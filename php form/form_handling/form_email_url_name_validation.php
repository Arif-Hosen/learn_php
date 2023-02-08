<?php 
$nameErr = $emailErr = $websiteErr = $commentsErr = $genderErr = "";
$name = $email = $gender = $website = $comments = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $comments = $_POST['comments'];
        
        // name validation
        if(empty($name)){
            $nameErr = "Name is Required";
        }
        else{
            $name = inputValidation($name);
            // name field only contains letters, dashes, apostrophes and whitespaces
            if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
                $nameErr = "Only letters and white space allowed";
            }
        }

        // email validation
        if(empty($email)){
            $emailErr = "email is Required";
        }
        else{
            $email = inputValidation($email);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid email";
            }
        }

        // url validation
        if(empty($website)){
            $website = "";
        }
        else{
            $website = inputValidation($website);
            if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
                $websiteErr = 'Invalid Url';
            }
        }

        if(empty($comments)){
            $comments = "";
        }
        else{
            $comments = inputValidation($comments);
        }

        if(empty($_POST['gender'])){
            $genderErr = "gender is Required";
        }
        else{
            $gender = inputValidation($_POST['gender']);
        }
        
    }

    function inputValidation($data){
        // convert special character to html entities. ex- without using this method, if we give the <h3>Hello </h3> in input field. and echo the input field variable. the output will be Hello. using this htmlspecialchars method- the output is <h3>Hello </h3> 
        $data = htmlspecialchars($data);
        // remove whitespace from begining and ending of string
        $data = trim($data);
        // remove backslash from string
        $data = stripslashes($data);
        // echo $data, '<br>';
        return $data;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Form Data</title>
</head>
<body>
   <section style="text-align: center;;" >
    <h3>Fill the form</h3>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <div>
            <label for="">Name *</label>
            <input type="text" name="name" id="" value="<?php echo $name; ?>"><br>
            <span style="color: red;"><?php echo $nameErr;?></span><br>
        </div>
        <div>
            <label for="">Email *</label>
            <input type="email" name="email" id="" value="<?php echo $email; ?>"><br>
            <span style="color: red;"><?php echo $emailErr;?></span><br>
        </div>
        <div>
            <label for="">Website</label>
            <input type="text" name="website" id="" value="<?php echo $website; ?>"><br>
            <span style="color: red;"><?php echo $websiteErr;?></span><br>
        </div>
        <div>
            <label for="">Comments</label>
            <textarea name="comments" id="" cols="30" rows="10"><?php echo $comments; ?></textarea><br>
            <span style="color: red;"><?php echo $commentsErr;?></span><br>
        </div>
        <div>
            <label for="">Gender *</label>
            <input type="radio" name="gender" value="male" id="" <?php if(isset($gender) && ($gender == "male")) echo "checked" ;?>>
            <input type="radio" name="gender" value="female" id="" <?php if(isset($gender) && ($gender == "female")) echo "checked" ;?>>
            <input type="radio" name="gender" value="other" id="" <?php if(isset($gender) && ($gender == "other")) echo "checked" ;?>><br>
            <span style="color: red;"><?php echo $genderErr;?></span><br>
        </div>
        <div >
            <button type="submit">submit</button>
        </div>
    </form>
   </section>
</body>
</html>

