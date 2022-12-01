<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header('Content-Type: application/json');

// include database and object files
include_once '../config/database/database.php';
include_once '../main/products.php'

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$products = new products($db);

// registra o id para leitura
$products->id = isset($_GET['id']) ? $_GET['id'] : die();

// read the details of product to be edited
$products->readId();

if ($product->name != null) {
    // create array
    $product_arr = array(
        "id" =>  $products->id,
        "name" => $products->name,
        "description" => $product->description,
        "price" => $product->price,
        "category_id" => $product->category_id,
        "category_name" => $product->category_name

    );

    // set response code - 200 OK
    http_response_code(200);

    // make it json format
    echo json_encode($product_arr);
} else {
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user product does not exist
    echo json_encode(array("message" => "Product does not exist."));
}
