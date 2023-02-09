<?php

function curl($url, $type, $data = null, $headers = null) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    if ($data) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    if ($headers) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return $result;
}

// pour upload une image, fonction de Gwendal
function upload_image($files)
{
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/src/images/uploads/';
    $target_file = $target_dir . uniqid() . basename($files["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($files["file"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        exit("File is not an image.");
        return 0;
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        exit("Sorry, file already exists.");
        return 0;
        $uploadOk = 0;
    }

    // Check file size
    if ($files["file"]["size"] > 8000000) {
        exit("Sorry, your file is too large.");
        return 0;
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        exit("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        return 0;
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        exit("Sorry, your file was not uploaded.");
        return 0;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($files["file"]["tmp_name"], $target_file)) {
            $path = '/src/images/uploads/' . basename($files["file"]["name"]);
            return $path;
        } else {
            exit("Sorry, there was an error uploading your file.");
            return 0;
        }
    }
}