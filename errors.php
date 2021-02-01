<?php 
if(count($errors)>0){
    echo '
    <div class=" alert alert-danger" role="alert">';
    foreach($errors as $error){
        echo '
            <p>'.$error.'</p>
        ';
    }
    // echo '   <div class=" alert alert-danger" role="alert"> ERROR DIE: '.count($errors).' </div>';
    echo '
    </div>';
}
// echo '   <div class=" alert alert-danger" role="alert"> ERROR DIE </div>';
?>
