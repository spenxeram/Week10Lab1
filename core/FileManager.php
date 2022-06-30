<?php

class FileManager {
    public static $file;
    public static $file_name;
    public static $temp;
    public static $ext;
    public static $dest;
    public static $img_types = ['png', 'jpg', 'jpeg', 'gif'];
    public static $errors = [];
    
    public static function validateFile($file, $size) {
        self::$file = $file;
        if($file['error'] !== 0) {
            self::$errors['file_err'] = "File err!";
        }

        if($file['size'] > $size) {
            self::$errors['file_size'] = "File too large!";
        }
        $ext = explode("/", $file['type']);
        self::$ext = end($ext); // returns last item in arr
        if(!in_array(self::$ext, self::$mig_types)) {
            self::$errors['file_ext'] = "Invalid ext!";
        }

        // return true or false
        if(empty(self::$errors)) {
            self::$temp = $file['tmp_name'];
            return true;
        } else {
            return false;
        }
        // if true then store the temp 
    }   

    public static function moveFile($dest) {
        // move upload to dest after renaming it
        // return the final file name + destination
    }
}