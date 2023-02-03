<?php
require "safe-header.php";
?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">   
    <button type="submit" name="uploadbtn">Upload Image</button> 
    </form>
    
<?php
require "footer.php";
?>