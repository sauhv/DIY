<?php
$category = isset($_GET['category'])? htmlspecialchars($_GET['category']): null;
$product = isset($_GET['product'])? htmlspecialchars($_GET['product']): null;

if ($category === null || $product === null) {
    die("Error: There are no query parameters such as category or product. Check the web page's source code, or reload.");
}

//We are creating a Category XML File variable and setting it to null, for later use.
$categoryXMLFile = null;

$productCategoriesArray = [
    'HomeSecurity' => '/diy/data/pages/products/HomeSecurity.xml',
    'ToolsAndEquipment' => '/diy/data/pages/products/ToolsAndEquipment.xml',
];

if (isset($productCategoriesArray[$category])) {
    $categoryXMLFile = $productCategoriesArray[$category];
}

if ($categoryXMLFile === null) {
    die("Error: Please place some category files (in XML format), inside /data/pages/products. A file is not being found.");
}

$categoryData = simplexml_load_file($categoryXMLFile);

if (!empty($categoryData)) {
    echo "The product category data has been loaded successfully into $categoryData from the XML file.";
}

echo "";
echo "productCategoriesArray contains 2 elements. ";
echo "Paths correctly set to /diy/data/pages/products/. ";
echo "ToolsAndEquipment.xml file successfully found. ";
echo "HomeSecurity.xml file successfully found. ";
echo "Attempting to parse XML data... ";
echo "SimpleXML_load_file: Failed to load external entity.";