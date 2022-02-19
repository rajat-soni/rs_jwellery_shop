<?PHP  

function pr($arr){

    echo "<pre>";
    print_r($arr);
}

function prx($arr){
    echo "<pre>";
    print_r($arr);
    die;
}

// function safe_mode($str){
//     if($str != ""){
// return real_escape_string($conn, $str);
//     }
// }

?>