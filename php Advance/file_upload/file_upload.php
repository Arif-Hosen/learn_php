<?php
// specifies directory where the file will going to be placed
$image_directory = 'uploads/';
// specifies the path of the file to be uploaded
$image_path = $image_directory . basename($_FILES["fileToUpload"]["name"]);

$status = 1;
// get file extention of the file
$imageFileType = strtolower(pathinfo($image_path, PATHINFO_EXTENSION));

// check if the image file is actual image file or not
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if ($check != false) {
        echo "<h3 style='color:red'>File is an image - </h3>" . $check['mime'], '<br>';
        $status = 1;
    } else {
        echo "<h3 style='color:red'>File is not an image!!!</h3>";
        $status = 0;
    }
}

// check file already exist
if (file_exists($image_path)) {
    echo "<h3 style='color:red'>Sorry, file already exists.!!!</h3>";
    $status = 0;
}

// check file size, unit is Byte (700000 byte = 700kb ) 
if ($_FILES['fileToUpload']['size'] > 700000) {
    echo "<h3 style='color:red'>Sorry the file size too large!</h3>", $_FILES['fileToUpload']['size'];
    $status = 0;
}

// allow specific image file type
if ($imageFileType != 'jpg') {
    echo "<h3 style='color:red'>Sorry, only jpg is allowed!!!</h3>";
    $status = 0;
}

// file upload - check status is 0
if ($status == 0) {
    echo "<h3 style='color:red'>Sorry file was not uploaded!!!</h3>";
} 
else {
    // when we upload a image file it goes to temp folder directory, then we need to move from temp directory to our specify path
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $image_path)) {
        echo "<h3 style='color:green'>Congratulations! File uploaded successfully!!!</h3>";
    } else {
        echo "<h3 style='color:red'>Sorry There was an issue!!!</h3>";
    }
}

// echo "image upload - ",$image_path;
?>