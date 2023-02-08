<?php 
$nameErr = $emailErr = $websiteErr = $commentsErr = $genderErr = "";
$name = $email = $gender = $website = $comments = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $comments = $_POST['comments'];
        
        if(empty($name)){
            $nameErr = "Name is Required";
        }
        else{
            $name = inputValidation($name);
        }

        if(empty($email)){
            $emailErr = "email is Required";
        }
        else{
            $email = inputValidation($email);
        }

        if(empty($website)){
            $website = "";
        }
        else{
            $website = inputValidation($website);
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
        $data = trim($data);
        // remove backslash from string
        $data = stripslashes($data);
        echo $data, '<br>';
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
            <span style="color: red;">* <?php echo $nameErr;?></span>
            <label for="">Name</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <span style="color: red;">* <?php echo $emailErr;?></span>
            <label for="">Email</label>
            <input type="email" name="email" id="">
        </div>
        <div>
            <span style="color: red;"><?php echo $websiteErr;?></span>
            <label for="">Website</label>
            <input type="url" name="website" id="">
        </div>
        <div>
            <span style="color: red;"><?php echo $commentsErr;?></span>
            <label for="">Comments</label>
            <textarea name="comments" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <span style="color: red;">* <?php echo $genderErr;?></span>
            <label for="">Gender</label>
            <input type="radio" name="gender" value="male" id="">
            <input type="radio" name="gender" value="female" id="">
            <input type="radio" name="gender" value="other" id="">
        </div>
        <div >
            <button type="submit">submit</button>
        </div>
    </form>
   </section>
</body>
</html>

