<?php
require "dbconnection.php";
$dbcon = createDbConnection();

$invoice_item_id = 60;

$sql = "DELETE FROM invoice_items WHERE InvoiceLineId = $invoice_item_id";

$dbcon->exec($sql);