
<?php
$serverName = "DESKTOP-OPL8J6D"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"posdb" ,  "UID"=>"" , "PWD"=>"" ,"TrustServerCertificate"=>True);
$conn = sqlsrv_connect( $serverName, $connectionInfo);





if (!$conn) {
echo "<pre>";
 print_r(sqlsrv_errors());
echo "</pre>";

    die("Connection failed: ");
}





// Your SQL query
$bar = $_GET['bar'];
$sql = "SELECT [product_id],[product_name],[product_quantity],[cost_price],[retail_price] FROM [dbo].[purchase]WHERE [product_id]=  '$bar' ;";



// Execute the query
$queryResult = sqlsrv_query($conn, $sql);

if ($queryResult === false) {
    echo "<pre>";
    print_r( sqlsrv_errors());
    echo "</pre>";
    die("Query failed: " );
}



while ($row = sqlsrv_fetch_array($queryResult, SQLSRV_FETCH_ASSOC)) {
    // Access data from the result row

    echo "[".$row['product_id'] .",\"".$row['product_name']."\",".sprintf("%.2f", $row['product_quantity']).",".sprintf("%.2f", $row['cost_price']).",".sprintf("%.2f", $row['retail_price'])."]";
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Close the connection
sqlsrv_close($conn);


?>

