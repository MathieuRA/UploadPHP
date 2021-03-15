<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

class MainController
{
    public function home()
    {
        include './Views/Home.php';
    }
    public function form()
    {
        include './Views/Form.php';
    }
    public function upload()
    {
        // $_FILES -> Array[5]
        // file -> Array [5]
        // name -> string
        // type -> string
        // tmp_name -> string
        // error -> int
        // size -> int


        //TYPE = "images/jpeg"

        // ENCTYPE SUPPORTED
        if (!empty($_FILES)) {
            // FILE ARE SEND
            if (($_FILES['file']['size']) !== 0) {
                $extension = explode('/', $_FILES['file']['type'])[1];
                // EXTENSION ARE IN GOOD FORMAT
                if ($extension === 'jpg' || $extension === 'jpeg' || $extension === 'png') {
                    // FILE AREN'T TO BIG
                    if ($_FILES['file']['size'] < 1000000) {
                        $name = $_FILES['file']['name'];
                        $tmp_name = $_FILES['file']['tmp_name'];
                        $path = 'assets/imgs/' . $name;

                        move_uploaded_file($tmp_name, $path);
                    } else {
                        throw new Error('size too big');
                    }
                } else {
                    throw new Error('no good format');
                }
            } else {
                throw new Error('thx add files');
            }
        } else {
            throw new Error('Entype multipart/form-data is missing');
        }
    }
}

// ALGO
// Verifier que notre formulaire est bien de type enctype=multipart/form-data -> OK
// vérifier si le fichier existe -> OK
// récupérer le name (pour identifier notre fichier) -> OK
// récupérer chemin du fichier (tmp_name) -> OK
// récupérer le chemin de destination -> OK 
// récupérer l'extension du fichier 
