<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path

if (!mkdir($targetDir, 0777, true)) {
}
// $fileName = basename($_FILES["file"]["name"]);
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

// scan the source folder
$pic = scandir($srcDir);
print_r($pic);

$picNum = count($pic);
print_r($picNum);

// if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
//     // Allow certain file formats
//     $allowTypes = array('jpg','png','jpeg','gif','pdf');
//     if(in_array($fileType, $allowTypes)){
//         // Upload file to server
$tep_name;
for($x = 2; $x < $picNum; $x++){
    echo(no);
    echo '<br/>';
    print_r($pic[$x]);
     $targetFilePath = $targetDir . $pic[$x];
        echo '<br/>';
        echo(y);
    //          // Insert image file name into database
        $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$pic[$x]."', NOW())");
        echo(databasesesese);
    //         if($insert){
    //             $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
    //         }else{
    //             $statusMsg = "File upload failed, please try again.";
    // }

    // copy the picture
    $from = $srcDir.$pic[$x];
    $to = $targetDir.$pic[$x];
    copy($from,$to);
}
//         }else{
//             $statusMsg = "Sorry, there was an error uploading your file.";
//         }
//     }else{
//         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
//     }
// }else{
//     $statusMsg = 'Please select a file to upload.';
// }

// Display status message
// echo $statusMsg;
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    press submit to input
    <input type="submit" name="submit" value="Upload">
</form>