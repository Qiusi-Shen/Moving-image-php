<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
if($query->num_rows > 0){
    while($r = $query->fetch_assoc()){
        $imageURL = $targetDir.$r["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>There is no image</p>
<?php } ?>