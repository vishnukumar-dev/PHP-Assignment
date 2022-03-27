<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Files</title>
</head>
<body>
    <form action="upload_files.php" method="POST" enctype="multipart/form-data">
        <label for="user">Enter your name : 
        <input type="text" name="user">
        </label>
        <br>
        <label for="file">Upload Aadhar Card : 
        <input type="file" name="file">
        </label>
        <br>
        <label for="file1">Upload Pan Card : 
        <input type="file" name="file1">
        </label>
        <br>
        <label for="file2">Upload 12th Marksheet : 
        <input type="file" name="file2">
        </label>
        <br>
        <input type="submit"  name="reset" value="Reset Form">
        <input type="submit" name="submit" value="Submit Form">
    </form>


    <?php
        //Function to check the file type i.e. png and pdf
        function isType(...$filesName){
            foreach($filesName as $file){
                $check = false;
                if($_FILES[$file]['type'] == 'image/png' || $_FILES[$file]['type'] == 'application/pdf'){
                    $check = true;
                }
                if($check == false)
                    return false;
            }         
            return true;
        }
        
        if(isset($_POST["submit"])){

            //calling the files type checker function
            $type = isType("file","file1","file2"); 
            
            if(!preg_match("/^[a-zA-Z'. -]+$/",$_POST["user"])){
                echo "<br><h3>Please enter a valid name.</h3>";
            }
            else if($type){
                //path to create the directory
                $path = $_POST["user"]."/";

                //creating the directory | username/documents/
                if(!is_dir($path)){
                    mkdir($path,0777,true);
                }

                //uploading the files in the desired directory
                move_uploaded_file($_FILES['file']['tmp_name'], $path.$_FILES['file']['name']);
                move_uploaded_file($_FILES['file1']['tmp_name'], $path.$_FILES['file1']['name']);
                move_uploaded_file($_FILES['file2']['tmp_name'], $path.$_FILES['file2']['name']);
                echo "<br><h1>Your files successfully uploaded at : $path</h1>";
            }
            else{
                echo "<br><h3>Please upload all the required files with the valid file type i.e. .png or .pdf</h3>";
            }   
        }
    ?>

</body>
</html>  