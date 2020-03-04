<?php
include('functions.php');
$file = $_FILES['myfile'];//declares a $file variable and $_FILES is used for uploading files in this case it is stored 
                       //in an array named myFile, and the array is being arranged starting from name, type, tmp_name,
                          //size.
$fileName = $file['name'];//$fileName is stored in the $file['name'] array
$fileType = $file['type'];//$fileType is stored in the $file['type'] array
$fileTmpname = $file['tmp_name'];//$fileTmpname is stored in the $file['tmp_name'];
$fileSize = $file['size'];//fileSize is stored in the $file['size'];
$dir = "images/";//$dir is the name for the directories directory name.

foreach($fileName as $index => $name){

    if(check_file_type($fileType[$index])){

       if(check_size($fileSize[$index])){

           $targetDir = $dir .basename($fileName[$index]);

            if(check_file_valid($targetDir)){

                if(transfer_directory($fileTmpname[$index],$targetDir)){

                    echo "UPLOADED ",$fileName[$index],"<br>";

                }
            }else{
                echo "NO UPLOAD";
            }
       }else{
            echo "FILE TOO BIG";
       }
    }else{
        echo "ERROR FILE";
    }
}
 //scan "uploads" folder and display them accordingly
 $folder = "images/";//variable $folder is for the images to be stored 
 $results = scandir('images/');// $results
 foreach ($results as $result) {
     if ($result === '.' or $result === '..') continue;

     if (is_file($folder . '/' . $result)) {
         echo '
             <div class="col-md-3">
                 <img src="'.$folder . '/' . $result.'" alt="..." style="width:250px; height:auto;">
             </div>';
     }
 }
?>