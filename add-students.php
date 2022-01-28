<?php
    if(isset($_POST['save']))
    {
        $var = file_get_contents('z.json');
        $var=json_decode($var, true);
        
        $input=array(
            'img'=>'photo.png',
            'Name'=>$_POST['Name'],
            'Email'=>$_POST['Email'],
            'Phone'=>$_POST['Phone'],
            'Entroll_Number'=>$_POST['Entroll_Number'],
            'Date_of_admission'=>$_POST['Date_of_admission'],
            

        );
        $var[]=$input;
        $var= json_encode($var, JSON_PRETTY_PRINT);
        file_put_contents('z.json',$var);
        header('Location: ./php_j.php');
    }
    else{
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        echo var_dump($_POST);
    }

?>