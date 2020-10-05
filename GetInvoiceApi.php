<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once 'DatabaseConnection.php';
    include_once 'Invoice.php';

    $database = new Database();
    $db = $database->getConnection();

    $readInvoice = new Invoice($db);
    //$result = $readInvoice->read();
    $result = $readInvoice->getAllInvoiceInformation();
    $numberOfRow = $result->rowCount();

    

    if ($numberOfRow > 0) {
        //initialize an array
        $invoice_arr = array();
        $invoice_arr['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $invoiceItem = array(
                'InvoiceID'   => 'InvoiceID',
                'DocDateTime' => 'DocDateTime',
                'InvAddress1' => 'InvAddress1',
            );

            array_push($invoice_arr['data'],$invoiceItem);
        }
        echo json_encode($invoice_arr);

    } else {
        echo json_encode(
            array('message' => 'No invoice information found')
        );
    }


?>
