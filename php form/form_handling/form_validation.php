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
            <label for="">Name</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" id="">
        </div>
        <div>
            <label for="">Website</label>
            <input type="url" name="website" id="">
        </div>
        <div>
            <label for="">Comments</label>
            <textarea name="comments" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">Gender</label>
            <input type="radio" name="male" value="male" id="">
            <input type="radio" name="female" value="female" id="">
            <input type="radio" name="other" value="other" id="">
        </div>
        <div >
            <button type="submit">submit</button>
        </div>
    </form>
   </section>
</body>
</html>

<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = inputValidation($_REQUEST['name']);
        $name = inputValidation($_REQUEST['email']);
        $name = inputValidation($_REQUEST['website']);
        $name = inputValidation($_REQUEST['comments']);
        $comments = inputValidation($_REQUEST['gender']);
    }

    function inputValidation($data){
        // convert special character to html entities. ex- without using this method, if we give the <h3>Hello </h3> in input field. and echo the input field variable. the output will be Hello. using this htmlspecialchars method- the output is <h3>Hello </h3> 
        $data = htmlspecialchars($data);
        $data = trim($data);
        // remove backslash from string
        $data = stripslashes($data);
        echo $data;
        return $data;
    }
?>