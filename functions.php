<?php
    function check_file_type($file){//This function is called for storing data to $file parameter for it to be used as a throw variable.
        $only_type_data = array('jpeg', 'jpg', 'png');//ensures that the type of photo is based on the given array.
        $file_exit = explode("/", $file);//explode() and split() are the same but explode is used for splitting a string to
                                        // to an array, split uses a pattern and explode uses a string.
        return in_array(end($file_exit), $only_type_data) ? true : false;//in_array() is used to know if whether the value 
                                        //true or false, $file_exit is talking about the 'jpg' 'png'
                                        //and $only_type_data is also being tested if both are TRUE same goes 
                                        // for the extenstion file for the photos are being tested for boolean value.
    }
    function check_size($file){//this function stores the file size 
        return($file <= 10000000) ? true : false;//this returns the file with a specific value limit of 1.25 mb this returns
                                                 // with a BOOLEAN VALUE
    }

    function check_file_valid($file){//this function makes sure that the files are valid to continue.
        return (!file_exists($file)) ? true : false;//$file_exists() makes sure that the given file exists or a directory 
                                                    //and it returns with a boolean value.
    }
    function transfer_directory($file, $target){
        return move_uploaded_file($file, $target);//this moves the current/uploaded "$file" to a new destination "$target" 

    }

?>