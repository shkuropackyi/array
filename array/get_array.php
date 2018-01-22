<?

$myarray1 = array();
    for ($i=0; $i < 10; $i++) { 
        $myarray1[$i] = rand(0,10);
    }
    print_r($myarray1);

    $result = array_count_values($myarray1);

    print_r($result);



    $myarray = array();
    for ($i=0; $i < 10; $i++) { 
        $myarray[$i] = rand(1,100);
    }
    sort($myarray);
    echo json_encode($myarray);