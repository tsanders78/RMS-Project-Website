<?php
class Employee {
private $employeeId;
private $name;
private $salary;
private $department;

public function getEmployeeId() {
return $this->employeeId;
}
public function setEmployeeId($newEmployeeId) {
$this->employeeId = $newEmployeeId;
}
public function getName() {
return $this->name;
}
public function setName($newName) {
$this->name = $newName;
}
public function getSalary() {
return $this->salary;
}
public function setSalary($newSalary) {
$this->salary = $newSalary;
}
public function getDepartment() {
return $this->department;
}
public function setDepartment($newDepartment) {
$this->department = $newDepartment;
}
}
class Department extends Employee {
private $departmentName;
private $departmentHead;

public function setDepartmentHead($headName) {
$this->departmentHead = $headName;
}
public function getDepartmentName() {
return $this->departmentName;
}
public function getDepartmentHead() {
return $this->departmentHead;
}
}


class FormGenerator extends Department {
protected $page_number;
protected $itemList;
protected $compus;
protected $tables;
protected $images;
protected $database_data = [];
protected $currentPage;
protected $pageNumber;
protected $name;
protected $templocationFile;
protected $itemstring;
protected $itemVendor;
protected $transactionNumber;
protected $numberOfItems;
protected $stockStatus;
protected $usersearch;
protected $document_root;
protected $date;
protected $find;
protected $itemsort;
protected $defaultspread;
protected $locationFile;
protected $table_name;
protected $itemlist;
public $content;
protected $sql;
protected $discountCode;
protected $discountPercentage;
protected $searchArray;
protected $value;
protected $data = [];
protected $servername = "localhost";
protected $username = "root";
protected $password = "Frankhank22!";
protected $dbname = "rmstwo";
protected $sqlDepartment = "SELECT DepartmentID, DepartmentName FROM Departments";
protected $Data;
protected $conn;
protected $description; 
protected $result;
protected $row;
protected $length;
public $title = "Hardware and Remodeling";
public $keywords;
public function __construct() {
$this->tables = [
'Home' => [
'storeproduct' => [
'columns' => ['StoreID', 'ProductID', 'DepartmentID', 'QuantityInStock', 'ZipCode', 'Description'],
'greet' => 'Hello, welcome to the store product table!'
]
],
'Contact' => [
'employee' => [
'columns' => ['EmployeeID', 'EmployeeName', 'DepartmentID', 'Position', 'Email', 'PhoneNumber', 'StoreID', 'Description'],
'greet' => 'Hello, welcome to the employee table!'
],
'supplier' => [
'columns' => ['SupplierID', 'SupplierName', 'ContactInfo', 'Description'],
'greet' => 'Hello, welcome to the supplier table!'
],
'storesupplier' => [
'columns' => ['StoreID', 'SupplierID', 'Description'],
'greet' => 'Hello, welcome to the store supplier table!'
],
'customer' => [
'columns' => ['CustomerID', 'CustomerName', 'Email', 'PhoneNumber', 'Description', 'isdiy'],
'greet' => 'Hello, welcome to the customer table!'
]
],
'Services' => [
'supplier' => [
'columns' => ['SupplierID', 'SupplierName', 'ContactInfo', 'Description'],
'greet' => 'Hello, welcome to the supplier table!'
],
'storeproduct' => [
'columns' => ['StoreID', 'ProductID', 'DepartmentID', 'QuantityInStock', 'ZipCode', 'Description'],
'greet' => 'Hello, welcome to the store product table!'
]
],
'Payment' => [
'orderdetail' => [
'columns' => ['ORDERID', 'ProductID', 'Quantity', 'PRICE'],
'greet' => 'Hello, welcome to the order detail table!'
]
],
'EditViewProfile' => [
'orders' => [
'columns' => ['ORDERID', 'OrderDate', 'CustomerID', 'EmployeeID', 'Description'],
'greet' => 'Hello, welcome to the orders table!'
]
],
'About' => [
'store' => [
'columns' => ['StoreID', 'StoreName', 'ZipCode', 'Location', 'ContactInfo', 'Description'],
'greet' => 'Hello, welcome to the store table!'
],
'employee' => [
'columns' => ['EmployeeID', 'EmployeeName', 'DepartmentID', 'Position', 'Email', 'PhoneNumber', 'StoreID', 'Description'],
'greet' => 'Hello, welcome to the employee table!'
],
'product' => [
'columns' => ['ProductID', 'ProductName', 'DepartmentID', 'Description', 'Price', 'QuantityInStock'],
'greet' => 'Hello, welcome to the product table!'
],
'storeproduct' => [
'columns' => ['StoreID', 'ProductID', 'DepartmentID', 'QuantityInStock', 'ZipCode', 'Description'],
'greet' => 'Hello, welcome to the store product table!'
],
'supplier' => [
'columns' => ['SupplierID', 'SupplierName', 'ContactInfo', 'Description'],
'greet' => 'Hello, welcome to the supplier table!'
],
'storesupplier' => [
'columns' => ['StoreID', 'SupplierID', 'Description'],
'greet' => 'Hello, welcome to the store supplier table!'
],
'customer' => [
'columns' => ['CustomerID', 'CustomerName', 'Email', 'PhoneNumber', 'Description', 'isdiy'],
'greet' => 'Hello, welcome to the customer table!'
]
]
];
$this->images = [
'Home' => 'images/f1.png',
'Contact' => 'images/f6.png',
'Services' => 'images/f2.png',
'Payment' => 'images/f3.png',
'EditViewProfile' => 'images/f4.png',
'About' => 'images/f5.png'
];
$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
$this->pageNumber = empty($_POST['page']) ? '1' : $_POST['page'];
$this->document_root = $_SERVER['DOCUMENT_ROOT'];
$this->date = date('H:i, jS F Y');
$this->itemlist = empty($_POST['itemlistphp']) ? 'a' : $_POST['itemlistphp'];
$this->find = !empty($_POST['find']) ? $_POST['find'] : 'a';
$this->itemsort = !empty($_POST['itemsortphp']) ? $_POST['itemsortphp'] : 'a';
$this->usersearch = isset($_POST['usersearch']) ? (string) $_POST['usersearch'] : null;
if ($this->conn->connect_error) {
die("Connection failed: " . $this->conn->connect_error);
}
$this->compus = isset($_POST['location']) ? $_POST['location'] : "Home"; 
$this->handleLocation();
$this->generateRMSHardwareSite();
$this->requireCurrentLocation();
$this->advertise();
$this->renderDropdown();
$this->page_number = 1; 
$this->itemList = 10; 
$this->compus = 'Home';


$this->loadData();
}
public function renderRMSHardwareSite() {
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo ' <meta charset="UTF-8" />';
echo ' <meta http-equiv="X-UA-Compatible" content="IE=edge" />';
echo ' <meta name="viewport" content="width=device-width, initial-scale=1.0" />';
echo ' <title>RMS Hardware Site</title>';
echo ' <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />';
echo ' <link rel="stylesheet" href="style_2.css"/>';
echo '</head>';
echo '<body>';
echo ' <div id="main">';
echo ' </div>';
echo '</body>';
echo '</html>';
}
protected function advertise() {
$sqladvertise = "SELECT sp.longbob FROM storeproduct sp
JOIN productidpopularity pp ON sp.ProductID = pp.ProductID
ORDER BY pp.popularity DESC
LIMIT 6"; 
$result = $this->conn->query($sqladvertise);
$pictures = array();
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
if (!empty($row['longbob'])) {
$pictures[] = base64_encode($row['longbob']);
}
}
} else {
echo "No images found.";
}
shuffle($pictures);
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>Americas Number 1 Hardware!</title>';
echo '</head>';
echo '<body>';
echo '<h1>Americas Number 1 Hardware!</h1>';
echo '<div align="center">';
echo '<table style="width: 100%; border: 0">';
echo '<tr>';
for ($i = 0; $i < 3; $i++) {
echo '<td style="width: 33%; text-align: center">';
if (isset($pictures[$i])) {
echo '<img src="data:image/jpeg;base64,' . htmlspecialchars($pictures[$i]) . '"/>';
} else {
echo '<img src="images/logo2.png"/>';
}
echo '</td>';
}
echo '</tr>';
echo '</table>';
echo '</div>';
echo '</body>';
echo '</html>';
}
public function renderHardwareAndRemodelingForm() {
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo ' <title>Hardware and Remodeling</title>';
echo '</head>';
echo '<body>';
echo ' <form action="" method="POST">';
echo ' <h1>';
echo ' </h1>';
echo ' <div align="center">';
echo ' </div>';
echo ' </form>';
echo '</body>';
echo '</html>';
}
public function renderModifyDataForm() {
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo ' <title>Modify Data</title>';
echo '</head>';
echo '<body>';
echo '<h2>Modify Data</h2>';
echo '<form method="post" action="">';
echo ' <label for="table">Select Table:</label>';
echo ' <select name="table" id="table">';
foreach ($this->tables as $tableName => $tableData) {
echo ' <option value="' . htmlspecialchars($tableName) . '">' . htmlspecialchars(ucfirst($tableName)) . '</option>';
}
echo ' </select>';
echo ' <br><br>';
echo ' ID (for update/delete): <input type="text" name="idValue"><br><br>';
echo ' Column: <input type="text" name="columnName"><br><br>';
echo ' Value: <input type="text" name="columnValue"><br><br>';
echo ' <input type="submit" name="insert" value="Insert">';
echo ' <input type="submit" name="update" value="Update">';
echo ' <input type="submit" name="delete" value="Delete">';
echo '</form>';
echo '</body>';
echo '</html>';
}
protected function generateOrderSortForm() {
return '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Form</title>
</head>
<body>
<form action="' . htmlspecialchars($this->locationFile) . '" method="post">
<table style="border: 0px;">
<tr>
<td>
<select name="itemsortphp">
<option value="a">price high to low</option>
<option value="b">price low to high</option>
<option value="c">whats hot</option>
<option value="d">whats new</option>
</select>
</td>
<td colspan="2" style="text-align: center;">
<input type="submit" value="Search" />
</td>
</tr>
</table>
</form>
</body>
</html>
';
}
public function displayForm() {
echo '<!DOCTYPE html>
<html>
<head>
<title>you are in editor </title>
</head>
<body>
<h1>What be ye laddie?</h1>
<form action="" method="post">
<p>
<input type="radio" name="gender" id="gender_m" value="EDIT" />
<label for="gender_m">male</label><br/>
<input type="radio" name="gender" id="gender_f" value="NOTEDIT" />
<label for="gender_f">female</label><br/>
</p>
<button type="submit" name="submit">Submit Form</button>
</form>
</body>
</html>';
}
protected function generateOrderListForm() {
$html = '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Form</title>
</head>
<body>
<form action="' . htmlspecialchars($this->locationFile) . '" method="post">
<table style="border: 0px;">
<tr>
<td>
<select name="itemlistphp">
<option value="a">25</option>
<option value="b">50</option>
<option value="c">75</option>
<option value="d">100</option>
</select>
</td>
<td colspan="2" style="text-align: center;">
<input type="submit" value="Search" />
</td>
</tr>
</table>
</form>
</body>
</html>';
return $html;
}
protected function genereateSpreadSummary(){
echo $this->generateOrderListForm();
echo "You searched ";
echo "<p>" . $this->getUserSearch() . " in ";
echo "on " . $this->date . "</p>";
echo "and we found these results: ";
}
protected function handlePageNumber() {
$this->page_number = isset($_GET['page']) ? (int)$_GET['page'] : 1;
}
protected function generatePaginationLinks() {
echo "===========================================================================";
if (isset($table_data) && (count($table_data) > 0 || !is_null($table_data))) $this->currentPage = $this->handlePageNumber();{
$totalPages = ($this->page_number % $this->itemList === 0) ? ($this->page_number / $this->itemList) : (($this->page_number - ($this->page_number % $this->itemList)) / $this->itemList) + 1;
for ($i = 1; $i <= $totalPages; $i++) {
$selected = ($this->currentPage == $i) ? ' class="selected"' : '';
$pages = '<a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?page=' . $i . '"' . $selected . '>Page ' . $i . '</a> '; }
}
}
protected function generateOrderForm() {
$result = $this->conn->query($this->sqlDepartment);
$html = '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Form</title>
</head>
<body>
<form action="" method="post">
<table style="border: 0px;">
<tr>
<td><input type="text" name="usersearch" size="33" maxlength="99"></td>
<td>
<select name="find">';
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$html .= "<option value='" . $row["DepartmentID"] . "'>" . $row["DepartmentName"] . "</option>";
}
} else {
$html .= "<option value=''>No departments available</option>";
}
$html .= ' </select>
</td>
<td colspan="2" style="text-align: center;"><input type="submit" value="Search"></td>
</tr>
</table>
</form>
</body>
</html>';
return $html;
}
protected function generateRMSHardwareSite() {
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo ' <meta charset="UTF-8" />';
echo ' <meta http-equiv="X-UA-Compatible" content="IE=edge" />';
echo ' <meta name="viewport" content="width=device-width, initial-scale=1.0" />';
echo ' <title>RMS Hardware Site</title>';
echo ' <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />';
echo ' <link rel="stylesheet" href="style_2.css"/>';
echo '</head>';
echo '<body>';
echo ' <div id="main">';
echo ' <div id="header1">';
echo ' <img src="images/logo.gif" alt="TLA logo" height="70" width="70" />';
echo ' <h1>RMS+ Remodeling Management Services Plus Home</h1>';
echo ' <div id="social">';
echo ' <a href="https://www.facebook.com"><img src="images/facebook.jpg" alt="facebook"></a>';
echo ' <a href="https://www.x.com"><img src="images/x.jpg" alt="x/twitter"></a>';
echo ' <a href="https://www.linkedin.com"><img src="images/linkedin.jpg" alt="linkedin"></a>';
echo ' <a href="https://www.snapchat.com"><img src="images/2018_social_media_popular_app_logo_snapchat-512.webp" alt="snapchat"></a>';
echo ' </div>';
echo ' </div>';
echo ' <div id="nav">';
echo ' <ul>';
foreach (array_keys($this->tables) as $location) {
$selected = ($this->compus === $location) ? ' class="selected"' : '';
echo ' <li><a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?location=' . htmlspecialchars($location) . '"' . $selected . '>' . htmlspecialchars($location) . '</a></li>';
}
echo ' </ul>';
echo ' </div>';
echo ' <div id="content">';
echo ' <div id="title">';
echo ' <h2>' . htmlspecialchars($this->compus) . ' Page</h2>';
echo ' </div>';
echo ' <!-- PHP content will be inserted here -->';
}
protected function generateRMSHardwareSiteFooterlinks(){
{ echo ' </div>';
echo ' <section id="about-head" class="section-p1">';
echo ' <div id="footer">';
echo ' <h4><marquee bgcolor="#ccc" loop="-1" scrollamount="5">The Best Hardware Store In Town - Best Deals and Best Service</marquee></h4>';
echo ' </div>';
echo ' </section>';
echo ' <section id="feature" class="section-p1" style="display: flex; flex-wrap: wrap;">';
foreach (array_keys($this->tables) as $location) {
$selected = ($this->compus === $location) ? ' class="selected"' : '';
echo ' <div class="fe-box" style="margin: 10px;">';
echo ' <img src="' . $this->images[$location] . '" alt="' . htmlspecialchars($location) . '">';
echo ' <h6><a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?location=' . htmlspecialchars($location) . '"' . $selected . '>' . htmlspecialchars($location) . '</a></h6>';
echo ' </div>';
}
echo ' </section>';
echo ' </div>';
echo '</body>';
echo '</html>';
}
}
public function generateRMSHardwareSiteFooter() {
$startIndex = ($this->page_number - 1) * $this->itemList;
$endIndex = min($startIndex + $this->itemList, $this->page_number * $this->itemList);
if (isset($database_data) && (count($database_data) > 0 || !is_null($database_data))) {
$totalItems = count($this->database_data[$this->table_name]);
$totalPages = ceil($totalItems / $this->itemList);
}
else {
$totalPages = 1;
}
$currentPage = $this->page_number;
$pageRange = 5; 
$startPage = max(1, $currentPage - $pageRange);
$endPage = min($totalPages, $currentPage + $pageRange);
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>Bob\'s Auto Parts</title>';
echo '<style>';
echo '#feature { display: flex; justify-content: center; align-items: center; flex-wrap: wrap; }';
echo '.fe-box-duplicate { margin: 10px; }';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<div align="center">';
echo ' <section id="about-head" class="section-p1">';
echo ' <div id="footer">';
echo ' <h4><marquee bgcolor="#ccc" loop="-1" scrollamount="5">The Best Hardware Store In Town - Best Deals and Best Service</marquee></h4>';
echo ' </div>';
echo ' </section>';
echo ' <section id="feature" class="section-p1">';
for ($j = $startPage; $j <= $endPage; $j++) {
if (isset($table_data) && (count($table_data) > 0 || !is_null($table_data))) { echo '<div class="fe-box-duplicate">';
echo '<h6>' . "||" . '</h6>';
echo '<form method="get" action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '">';
echo '<input type="hidden" name="page" value="' . $j . '">';
echo '<button type="submit" name="nextpage">Page ' . $j . '</button>';
echo '</form>';
echo '</div>';
}
else {
break;
}
echo '</section>';
echo '<div>';
}
if (isset($table_data) && (count($table_data) > 0 || !is_null($table_data))) { $this->generatePaginationLinks();
}
echo '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
$this->generateRMSHardwareSiteFooterlinks();
}
public function modifyTables($operation, $data) {
if (isset($table_data) && (count($table_data) > 0 || !is_null($table_data))){
foreach ($this->tables as $tableName => $tableData) {
if (isset($data[$tableName])) {
$this->processTable($tableName, $operation, $data[$tableName]);
}
}}
}
function processTable($tableName, $operation, $data) {
switch ($operation) {
case 'insert':
$this->insertRecord($tableName, $data);
break;
case 'update':
$this->updateRecord($tableName, $data, $data['idColumn'], $data['idValue']);
break;
case 'delete':
$this->deleteRecord($tableName, $data['idColumn'], $data['idValue']);
break;
}
}
function insertRecord($tableName, $data) {
$columns = array_intersect($this->tables[$tableName]['columns'], array_keys($data));
$columnNames = implode(", ", $columns);
$values = implode("', '", array_map([$this->conn, 'real_escape_string'], array_values($data)));
$sql = "INSERT INTO $tableName ($columnNames) VALUES ('$values')";
if ($this->conn->query($sql) === TRUE) {
echo "New record created successfully in $tableName table<br>";
} else {
echo "Error: " . $this->sql . "<br>" . $this->conn->error . "<br>";
}
}
function updateRecord($tableName, $data, $idColumn, $idValue) {
$columns = array_intersect($this->tables[$tableName]['columns'], array_keys($data));
$updates = [];
foreach ($columns as $column) {
$updates[] = "$column='" . $this->conn->real_escape_string($data[$column]) . "'";
}
$updateString = implode(", ", $updates);
$sql = "UPDATE $tableName SET $updateString WHERE $idColumn='$idValue'";
if ($this->conn->query($this->sql) === TRUE) {
echo "Record updated successfully in $tableName table<br>";
} else {
echo "Error: " . $this->sql . "<br>" . $this->conn->error . "<br>";
}
}
function deleteRecord($tableName, $idColumn, $idValue) {
$sql = "DELETE FROM $tableName WHERE $idColumn='$idValue'";
if ($this->conn->query($this->sql) === TRUE) {
echo "Record deleted successfully from $tableName table<br>";
} else {
echo "Error: " . $this->sql . "<br>" . $this->conn->error . "<br>";
}
}
function __destruct() {
}
function fetchTableData($table_name, $columns) {
$columnString = implode(", ", $columns);
$query = "SELECT $columnString FROM $table_name";
try {
$this->result = $this->conn->query($query);
if ($this->result === false) {
throw new mysqli_sql_exception("Database query failed: " . $this->conn->error);
}
$data = [];
while ($row = $this->result->fetch_assoc()) {
$data[] = $row;
}
return $data;
} catch (mysqli_sql_exception $e) {
error_log($e->getMessage());
return [];
}
}
function loadData() {
echo "Loading data for compus: " . htmlspecialchars($this->compus) . "<br>";
if (isset($this->tables[$this->compus])) {
foreach ($this->tables[$this->compus] as $table_name => $table_info) {
$columns = $table_info['columns'];
$this->database_data[$table_name] = $this->fetchTableData($table_name, $columns);
echo "Data loaded for table: $table_name<br>";
if (isset($table_info['greet'])) {
echo $table_info['greet'] . "<br>";
}
}
} else {
echo "No tables found for compus: " . htmlspecialchars($this->compus);
}
}
function displayImagesFromTable() {
if (isset($this->database_data[$this->table_name])) {
foreach ($this->database_data[$this->table_name] as $row) {
if (isset($row['longbob'])) {
$this->displayImage($row['longbob']);
echo "<br>";
}
}
} else {
echo "No data found for table: " . htmlspecialchars($this->table_name);
}
}
function displayImage($imageData) {
if (!empty($imageData)) {
$base64Image = base64_encode($imageData);
echo '<img src="data:image/jpeg;base64,' . $base64Image . '" style="width: 150px; height: auto;" alt="Image"/>';
} else {
echo '<p>Image data is empty or invalid.</p>';
}
}
function postLocation($index) {
if (isset($this->tables[$index])) {
$this->compus = $index;
echo "Selected Location: " . htmlspecialchars($this->compus);
if ($this->compus === "Home") {
echo $this->generateOrderForm();
}
}
}
function getCompus() {
echo "Current Location: " . htmlspecialchars($this->compus);
return empty($this->compus) ? "Home" : $this->compus;
}
function renderDropdown() {
echo '<!-- Rendering Dropdown -->';
echo '<form action="" method="POST">';
echo '<select name="location" onchange="this.form.submit()">';
foreach (array_keys($this->tables) as $location) {
$selected = ($location === $this->compus) ? 'selected' : '';
echo "<option value=\"$location\" $selected>$location</option>";
}
echo '</select>';
echo '</form>';
}
function loadLocation() {
if (isset($this->tables[$this->compus]) && file_exists($this->compus . '.php')) {
require_once $this->compus . '.php';
} else {
echo "The requested page does not exist.";
}
}
protected function handleLocation() {
if (isset($this->tables[$this->compus])) {
foreach ($this->tables[$this->compus] as $table_name => $table_info) {
if ($table_name !== 'greet') {
$this->table_name = $table_name;
$this->displayImagesFromTable();
if (isset($table_info['greet'])) {
$this->keywords = $table_info['greet'];
}
}
}
} else {
echo "No tables found for the current location: " . htmlspecialchars($this->compus);
}
}
function requireCurrentLocation() {
$locationFile = strtolower(str_replace(' ', '_', $this->compus)) . '.php';
$this->locationFile = $locationFile;
if (file_exists($locationFile)) {
echo htmlspecialchars($locationFile);
require_once($locationFile);
} else {
echo "File for the current location does not exist.";
echo htmlspecialchars($locationFile);
}
}





}



class Page extends FormGenerator {
public function __set($name, $value) {
if (property_exists($this, $name)) {
$this->$name = $value;
} else {
trigger_error("Cannot set undefined property: $name", E_USER_NOTICE);
}
}




public function DisplayTitle() {
echo "<title>" . $this->title . "</title>";
}
public function DisplayKeywords() {
echo "<meta name='keywords' content='" . $this->keywords . "' />";
}
public function DisplayStyles() {
echo '<link href="styles.css" type="text/css" rel="stylesheet">';
}
public function DisplayMenu($buttons) {
echo "<!-- menu -->\n<nav>";
foreach ($buttons as $name => $url) {
$this->DisplayButton($name, $url, !$this->IsURLCurrentPage($url));
}
echo "</nav>\n";
}
public function IsURLCurrentPage($url) {
return strpos($_SERVER['PHP_SELF'], $url) !== false;
}
public function DisplayButton($name, $url, $active = true) {
if ($active) {
echo '<div class="menuitem">
<a href="' . $url . '">
<img src="s-logo.gif" alt="" height="20" width="20" />
<span class="menutext">' . $name . '</span>
</a>
</div>';
} else {
echo '<div class="menuitem">
<img src="side-logo.gif">
<span class="menutext">' . $name . '</span>
</div>';
}
}
public function displayHeader() {
echo '
<div id="header1">
<img src="images/logo.gif" alt="TLA logo" height="70" width="70" />
<h1>RMS+ Remodeling Management Services Plus Home</h1>
<div id="social">
<a href="https://www.facebook.com"><img src="images/facebook.jpg" alt="facebook"></a>
<a href="https://www.x.com"><img src="images/x.jpg" alt="x/twitter"></a>
<a href="https://www.linkedin.com"><img src="images/linkedin.jpg" alt="linkedin"></a>
<a href="https://www.snapchat.com"><img src="images/2018_social_media_popular_app_logo_snapchat-512.webp" alt="snapchat"></a>
</div>
</div>
';
}
public function displayContent() {
echo '
<div id="content">
<div id="title">
<h2>' . htmlspecialchars($this->compus) . ' Page</h2>
</div>';
$this->displayDynamicContent();
echo '
</div>';
}
private function displayDynamicContent() {
if (isset($this->tables[$this->compus])) {
foreach ($this->tables[$this->compus] as $table_name => $table_info) {
$this->table_name = $table_name;
$this->displayImagesFromTable();
}
} else {
echo "No tables found for the current location: " . htmlspecialchars($this->compus);
}
}
public function displayFooter() {
echo '
<section id="about-head" class="section-p1">
<div id="footer">
<h4><marquee bgcolor="#ccc" loop="-1" scrollamount="5">The Best Hardware Store In Town - Best Deals and Best Service</marquee></h4>
</div>
</section>
';
}
public function displayFeatures() {
echo '<section id="feature" class="section-p1">';
foreach ($this->tables as $location => $tables) {
echo '
<div class="fe-box">
<img src="images/f1.png" alt="">
<h6><a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?location=' . htmlspecialchars($location) . '">' . htmlspecialchars($location) . '</a></h6>
</div>';
}
echo '</section>';
}
}













class Item extends Page {
public function getItemString() {
return $this->itemstring;
}
public function getItemVendor() {
return $this->itemVendor;
}
public function getTransactionNumber() {
return $this->transactionNumber;
}
public function getNumberOfItems() {
return $this->numberOfItems;
}
public function getStockStatus() {
return $this->stockStatus;
}
public function setItemString($itemstring) {
$this->itemstring = $itemstring;
}
public function setItemVendor($itemVendor) {
$this->itemVendor = $itemVendor;
}
public function setTransactionNumber($transactionNumber) {
$this->transactionNumber = $transactionNumber;
}
public function setNumberOfItems($numberOfItems) {
$this->numberOfItems = $numberOfItems;
}
public function setStockStatus($stockStatus) {
$this->stockStatus = $stockStatus;
}
public function addNewItem($number) {
$this->numberOfItems += $number;
echo "Successfully added {$number} copies of: {$this->itemstring}\n";
}
public function updateItemInformation($itemstring, $itemVendor, $transactionNumber) {
$this->itemstring = $itemstring;
$this->itemVendor = $itemVendor;
$this->transactionNumber = $transactionNumber;
}
public function removeItem($number) {
$this->numberOfItems -= $number;
echo "Successfully removed {$number} copies of: {$this->itemstring}\n";
}
}
class ItemDiscountCode extends Item {
public function __construct($itemstring = "", $itemVendor = "", $transactionNumber = 0, $numberOfItems = 0, $stockStatus = false, $discountCode = "", $discountPercentage = 0.0) {
parent::__construct($itemstring, $itemVendor, $transactionNumber, $numberOfItems, $stockStatus);
$this->discountCode = $discountCode;
$this->discountPercentage = $discountPercentage;
}
public function getDiscountCode() {
return $this->discountCode;
}
public function getDiscountPercentage() {
return $this->discountPercentage;
}
public function setDiscountCode($discountCode) {
$this->discountCode = $discountCode;
}
public function setDiscountPercentage($discountPercentage) {
$this->discountPercentage = $discountPercentage;
}
public function displayDiscountDetails() {
echo "Item: " . $this->getItemString() . "\n";
echo "Vendor: " . $this->getItemVendor() . "\n";
echo "Discount Code: " . $this->discountCode . "\n";
echo "Discount Percentage: " . $this->discountPercentage . "%\n";
}
}
class SearchHandler extends ItemDiscountCode {
public function getUserSearch() {
return $this->usersearch;
}
public function setUserSearch($usersearch) {
$this->usersearch = $usersearch;
}
public function usersearch() {
if (empty($this->usersearch)) {
return "The search string is empty. Please provide a search term.";
} else {
return "You searched for '{$this->usersearch}'";
}
}
}
class ItemListHandler extends SearchHandler {
public function __construct($usersearch, $itemlist) {
parent::__construct($usersearch);
}
public function validateItemList($itemlist) {
$this->itemlist = $itemlist;
switch ($this->itemlist) {
case "a":
$this->itemList = 25;
break;
case "b":
$this->itemList = 50;
break;
case "c":
$this->itemList = 75;
break;
case "d":
$this->itemList = 100;
break;
default:
return "";
}
echo "These items contain:<br>";
echo $this->itemList;
echo "These items contain:<br>";
return "Reposting item list: " . $this->itemlist;
}
}
class FindHandler extends ItemListHandler {
public function __construct($usersearch, $itemlist, $find) {
parent::__construct($usersearch, $itemlist);
}
public function getFind() {
return $this->find;
}
public function setFind($find) {
$this->find = $find;
}
public function validateFind() {
switch ($this->find) {
case "a":
echo "<p>All Departments.</p>";
break;
case "b":
echo "<p>Seasonal</p>";
break;
case "c":
echo "<p>On Sale</p>";
break;
case "d":
echo "<p>Small Appliances</p>";
break;
case "e":
echo "<p>Large Appliances</p>";
break;
case "f":
echo "<p>Bath and Faucets</p>";
break;
case "g":
echo "<p>Blinds and Window Treatments.</p>";
break;
case "h":
echo "<p>Building Material</p>";
break;
case "i":
echo "<p>Cleaning</p>";
break;
case "j":
echo "<p>Decor and Furniture</p>";
break;
case "k":
echo "<p>Electrical</p>";
break;
case "l":
echo "<p>Flooring and Area Rugs</p>";
break;
case "m":
echo "<p>Hardware</p>";
break;
case "n":
echo "<p>Heating and Cooling</p>";
break;
case "o":
echo "<p>Kitchen</p>";
break;
case "p":
echo "<p>Lawn and Gardens</p>";
break;
case "q":
echo "<p>Lighting and Ceiling Fans</p>";
break;
case "r":
echo "<p>Outdoor Living</p>";
break;
case "s":
echo "<p>Paint</p>";
break;
case "t":
echo "<p>Plumbing</p>";
break;
case "u":
echo "<p>Storage and Organization</p>";
break;
case "v":
echo "<p>Tools</p>";
break;
default:
return "default products";
}
}
}
class ItemSortHandler extends FindHandler {
public function __construct($usersearch , $itemlist = "", $find = "", $itemsort = "") {
parent::__construct($usersearch, $itemlist, $find);
}
public function getItemSort() {
return $this->itemsort;
}
public function setItemSort($itemsort) {
$this->itemsort = $itemsort;
}
public function validateItemSort() {
switch ($this->itemsort) {
case "a":
case "b":
case "c":
case "d":
case "e":
return "Resubmitting item sort: " . $this->itemsort;
default:
return "";
}
}
}
class SpreadInput extends ItemSortHandler {
public function __construct($usersearch = "", $itemstring = "", $itemVendor = "", $transactionNumber = 0, $numberOfItems = 0, $stockStatus = "", $discountCode = "", $discountPercentage = 0.0, $itemlist = "", $find = "", $itemsort = "") {
parent::__construct($usersearch, $itemlist, $find, $itemsort);
$this->itemstring = $itemstring;
$this->itemVendor = $itemVendor;
$this->transactionNumber = $transactionNumber;
$this->numberOfItems = $numberOfItems;
$this->stockStatus = $stockStatus;
$this->discountCode = $discountCode;
$this->discountPercentage = $discountPercentage;
$this->searchArray = $usersearch ? explode(' ', $usersearch) : [];
$this->inputArray($this->searchArray);
$this->validateItemList($itemlist);
$this->DisplayKeywords();
$this->displayTablesForCurrentCompus();
$this->genereateSpreadSummary();
$this->generateRMSHardwareSiteFooter();
$this->conn->close();
}
public function displayTablesForCurrentCompus() {
if (isset($this->tables[$this->compus])) {
$keys = array_keys($this->tables[$this->compus]);
$this->length = count($keys);
for ($i = 0; $i < $this->length; $i++) {
$table_name = $keys[$i];
$table_info = $this->tables[$this->compus][$table_name];
if ($table_name !== 'greet') {
$columns = $table_info['columns'];
$data = $this->fetchTableData($table_name, $columns);
echo "<h3>Table: $table_name</h3>";
$totalRows = count($data);
$maxItems = min($this->itemList, $totalRows);
for ($j = 0; $j < $maxItems; $j++) {
$row = $data[$j];
foreach ($row as $column => $value) {
echo "$column: $value<br>";
}
}
}
}
} else {
echo "No tables found for the current location: " . $this->compus;
}
}
protected function item_description($description) {
$this->description = $description !== null ? $description : '';
echo '<form action="" method="POST">';
echo "=======================================";
echo '<select name="location" onchange="this.form.submit()">';
echo '<option value="">' . htmlspecialchars($this->description) . '</option>';
echo '</select>';
echo '</form>';
}
protected function inputArray($searchArray) {
if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_GET['location'])) {
if (isset($_POST['location']) || isset($_GET['location'])) {
$location = isset($_POST['location']) ? $_POST['location'] : $_GET['location'];
$this->postLocation($location);
}
if (isset($_POST['usersearch'])) {
$this->setUserSearch($_POST['usersearch']);
}
if (isset($_POST['find'])) {
$this->setFind($_POST['find']);
}
if (isset($_POST['itemlistphp'])) {
if (empty($_POST['itemlistphp'])) {
$_POST['itemlistphp'] = 'a';
}
$this->validateItemList($_POST['itemlistphp']);
}
if (isset($_POST['itemSortphp'])) {
$this->setItemSort($_POST['itemSortphp']);
}
}
$this->requireCurrentLocation();
$this->generateOrderSortForm(); echo "These items contain:<br>";
foreach (array_keys($this->tables) as $location) {
echo "These items contain:<br>";
echo $this->itemList;
if ($location === $this->compus) {
echo $location . "<br>";
for ($j = 0; $j < $this->itemList; $j++) {
if (!isset($searchArray[$j])) {
$searchArray[$j] = "NULL item Number " . $j;
}
echo $searchArray[$j] . "<br>";
}
return $searchArray;
}
}
}
}
?>
