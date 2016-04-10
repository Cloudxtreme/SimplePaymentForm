<?php
    #----------------------------#
    # Name: Suyash Lakhotia      #
    # Matric No. U1423096J       #
    # Lab Group: TS1             #
    #----------------------------#

    $apples = $oranges = $bananas = $totalCost = 0;
    $name = $payment_method = 0;

    if (isset($_POST["Submit"])) {
        $name = $_POST["name"];
        $payment_method = $_POST["payment"];
        $apples = $_POST["apples"];
		$oranges = $_POST["oranges"];
		$bananas = $_POST["bananas"];
        $totalCost = $_POST["totalCost"];
        
        if (file_exists("records.txt")) {
            header("Location: receipt.php?name=$name&a=$apples&o=$oranges&b=$bananas&payment=$payment_method&total=$totalCost");
            writeToFile($apples, $oranges, $bananas);   
        } else {
            header("Location: error.html");  
        }
        
        exit;
    } else {
        header("Location: error.html");
        exit;
    }

    function writeToFile($a, $o, $b) {
        $filePtr = fopen("records.txt", "r") or exit("Unable to open file for reading - records.txt!");
       
        $new = array("apples" => $a, "oranges" => $o, "bananas" => $b);
        $total = array("apples" => 0, "oranges" => 0, "bananas" => 0);

        foreach($total as $fruit => $quantity) {
            $line = fgets($filePtr);
            $total["$fruit"] = explode(":", $line);
            $total["$fruit"][1] = $total["$fruit"][1] + $new["$fruit"];
        }
        
        fclose($filePtr);
        
        $filePtr = fopen("records.txt", "w") or exit("Unable to open file for writing - records.txt!");
        
        foreach($total as $fruit => $quantity) {
            fwrite($filePtr, $quantity[0].": ".$quantity[1]."\n");
        }
        
        fclose($filePtr);
    }
?>