<?php


abstract class EditViewProfile {
    protected $adimages;
protected $shortenKillCircle;
protected $restrictedTables;
protected $tableName; // Add this line
protected $compusforreal;
protected $keys;
protected $location;
protected $page_number;
protected $itemList;
protected $compus;
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
protected $username = "";
protected $password;
protected $dbname = "rmstwo";
protected $sqlDepartment = "SELECT DepartmentID, DepartmentName FROM Departments";
protected $Data;
protected $conn;
protected $description; 
protected $result;
protected $columns = [];
protected $row;
protected $length;
public $title = "Hardware and Remodeling";
public $keywords;
public function __construct() { 
$this->tables = [
                'Home' => [
                    'storeproduct' => [ 'columns' => ['StoreID', 'ProductID', 'SP_name', 'DepartmentID', 'QuantityInStock', 'ZipCode', 'Description','Price', 'longbob'],
                        'greet' => 'Our mission is to offer an exceptional shopping experience by providing a curated selection of high-quality products that cater to the diverse needs and desires of our customers. We are committed to sourcing and delivering goods that embody innovation, sustainability, and value. Through unwavering dedication to customer satisfaction, ethical practices, and continuous improvement, we strive to create a welcoming environment where every visit to our store is a delightful journey.' ]
                ],
                'Contact' => [
                    'employee' => [
                        'columns' => ['EmployeeID', 'EmployeeName', 'DepartmentID', 'Position', 'Email', 'PhoneNumber', 'StoreID', 'Description', 'longbob'],
                        'greet' => 'We strive to provide unparalleled service to our customers by understanding and anticipating their needs. We are dedicated to creating a welcoming and personalized shopping experience through attentive listening, expert guidance, and genuine care. Our commitment to excellence ensures that every interaction is positive, every product meets high standards, and every customer feels valued and respected. We strive to build lasting relationships by consistently exceeding expectations and fostering a sense of community and trust.'
                    ],
                    'supplier' => [
                        'columns' => ['SupplierID', 'SupplierName', 'ContactInfo', 'Description'],
                        'greet' => 'one way to guarantee the highest standard of excellence is by partnering with top-tier suppliers who share our commitment to quality and integrity. We meticulously select our suppliers based on rigorous criteria, ensuring that every product we offer meets our stringent standards for safety, durability, and performance. Through continuous collaboration and thorough quality checks, we strive to bring our customers products that inspire confidence and satisfaction. We believe that quality is not just a promise but a foundational principle, guiding us to deliver only the best to those we serve!'
                    ],
                    'storesupplier' => [
                        'columns' => ['StoreID', 'SupplierID', 'Description'],
                        'greet' => ' '
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
              



// Example usage:
// Example usage:
$this->adimages = [
    ["src" => "images/Flat Head Screw Driver.png", "alt" => "Flat Head Screw Driver"],
    ["src" => "images/Phillip Head Screw Driver.png", "alt" => "Phillip Head Screw Driver"],
    ["src" => "images/f350 Diesel Rental.png", "alt" => "Ford F350 Diesel Rental"],
    ["src" => "images/Ford F-350 diesel dually Rental.png", "alt" => "Ford F-350 diesel dually Rental"],
    ["src" => "images/Hibiscus Tahiti Tree.png", "alt" => "Hibiscus Tahiti Tree"],
    ["src" => "images/lawn-mower.png", "alt" => "Lawn Mower"],
];

// Make sure to set the $adimages as a property of your class



















         }
    
        private function searchAndModify($tables, $tabletwo, $idValuetwo, $columnValuetwo, $actionfrank) {
            foreach ($tables as $key => $value) {
                if (is_array($value)) {
                    if ($key === $tabletwo && isset($value['columns'])) {
                        echo "Table $tabletwo and its columns found.<br>";
                        foreach ($value['columns'] as $columntwo) {
                            echo "Processing column: $columntwo<br>";
                            $sqliop = "";
                            if ($actionfrank == "update") {
                                $sqliop = "UPDATE $tabletwo SET $columntwo = '$columnValuetwo' WHERE $columntwo = '$idValuetwo'";
                               // echo "SQL Query: $sqliop<br>";
                            } elseif ($actionfrank == "delete") {
                                $sqliop = "DELETE FROM $tabletwo WHERE $columntwo = '$idValuetwo'";
                                //echo "SQL Query: $sqliop<br>";
                            }
                            if ($sqliop && $this->conn->query($sqliop) === TRUE) {
                                //echo "Record updated successfully for column $columntwo.<br>";
                            } elseif ($sqliop && $this->conn->query($sqliop) !== TRUE) {
                               // echo "Error updating record for column $columntwo: " . $this->conn->error . "<br>";
                            }
                        }
                    } else {
                       // echo "Searching subarray $key<br>";
                        $this->searchAndModify($value, $tabletwo, $idValuetwo, $columnValuetwo, $actionfrank); // Recurse into subarray
                    }
                }
            }
        }
abstract function displayLoginForm();

protected function getUserrestrictedTables() {
    $allowedTables = [];

    $privQuery = "SHOW TABLES";
    $privResults = $this->conn->query($privQuery);
    if ($privResults && $privResults->num_rows > 0) {

        echo '<pre>';
        while ($privRow = $privResults->fetch_assoc()) {
            foreach ($privRow as $tableName) {
             //   echo htmlspecialchars($tableName) . "\n";
                $allowedTables[] = htmlspecialchars($tableName);
            }
        }
        echo '</pre>';
    } else {
        echo "Error fetching privileges: " . $this->conn->error;
    }

    // echo "Allowed Tables: <br>";
    // print_r($allowedTables);
    return $allowedTables;
}


public function validateItemList() {
    $isPostMethod = $_SERVER["REQUEST_METHOD"] == "POST";
    $this->itemList = 0;

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
            return ["", $isPostMethod];
    }
    return [$this->itemlist, $isPostMethod];
}



protected function handleLocation() {
    $summary = "<h2>Location Handling Summary</h2><ul>";

    if (isset($this->tables[$this->compus])) {
        foreach ($this->tables[$this->compus] as $table_name => $table_info) {
            if ($table_name !== 'greet') {
                $this->table_name = $table_name;
                $this->displayImagesFromTable();

                if (isset($table_info['greet'])) {
                    $this->keywords = $table_info['greet'];
                }

                $summary .= "<li>Table: $table_name - Greet: " . ($table_info['greet'] ?? 'None') . "</li>";
            }
        }
    } else {
        $summary .= "<li>No tables found for the current location: " . htmlspecialchars($this->compus) . "</li>";
    }

    $summary .= "</ul>";
    return $summary;

}



protected function generateOrderForm() {
    $isPostMethod = $_SERVER["REQUEST_METHOD"] == "POST";

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

    return [$html, $isPostMethod];
}



function requireCurrentLocation() {
    $locationFile = strtolower(str_replace(' ', '_', $this->compus)) . '.php';
    $this->locationFile = $locationFile;
    $isPostMethod = $_SERVER["REQUEST_METHOD"] == "POST";

    if (file_exists($locationFile)) {
        echo htmlspecialchars($locationFile);
        require_once($locationFile);
    } else {
        echo "File for the current location does not exist.";
        echo htmlspecialchars($locationFile);
    }

    return $isPostMethod;
}

protected function generateOrderListForm() {
    $isPostMethod = $_SERVER["REQUEST_METHOD"] == "POST";

    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List Form</title>
    </head>
    <body>
    <h2>Order List</h2>
    <form action="" method="post">
    <table style="border: 0px;">
    <tr>
    <td><input type="text" name="usersearch" size="33" maxlength="99" placeholder="Search Orders"></td>
    <td>
    <select name="find">';
    
    $result = $this->conn->query($this->sqlDepartment);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $html .= "<option value='" . $row["DepartmentID"] . "'>" . $row["DepartmentName"] . "</option>";
        }
    } else {
        $html .= "<option value=''>No departments available</option>";
    }
    
    $html .= '</select>
    </td>
    <td colspan="2" style="text-align: center;"><input type="submit" value="Search"></td>
    </tr>
    </table>
    </form>';

    $html .= '<!-- Order list data goes here -->';

    $html .= '</body>
    </html>';

    return [$html, $isPostMethod];
}







protected function generateOrderSortForm() {
    $isPostMethod = $_SERVER["REQUEST_METHOD"] == "POST";
    $selectedSortOption = $isPostMethod && isset($_POST['sortOptions']) ? $_POST['sortOptions'] : "ORDER BY productidpopularity.popularity DESC";

    $html = '
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
    <select name="sortOptions">
    <option value="ORDER BY price DESC">Price high to low</option>
    <option value="ORDER BY price ASC">Price low to high</option>
    <option value="ORDER BY productidpopularity.popularity DESC">What\'s hot</option>
    <option value="ORDER BY release_date DESC">What\'s new</option>
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

    return [$html, $isPostMethod, $selectedSortOption];
}




public function handleRequestMethodAndLocation() {
    $isPostMethod = $_SERVER["REQUEST_METHOD"] == "POST";

    if ($isPostMethod || isset($_GET['location'])) {
        $this->location = isset($_POST['location']) ? $_POST['location'] : (isset($_GET['location']) ? $_GET['location'] : 'Home');
        $this->postLocation($this->location);
    }

    return [$this->location, $isPostMethod];
}
public function generateSpreadSummary() {
    $summary = "<h2>Spread Summary</h2><ul>";

    // Handle request method and location
    list($location, $isPostMethod) = $this->handleRequestMethodAndLocation();
    $summary .= "<li><strong>Location: $location</strong></li>";
    $summary .= "<li><strong>POST Method Used: " . ($isPostMethod ? 'Yes' : 'No') . "</strong></li>";

    // Validate item list and get the returned data and boolean
    list($validatedItemList, $isPostMethodValidateItem) = $this->validateItemList();
    $summary .= "<li><strong>Validated Item List: $validatedItemList</strong></li>";
    $summary .= "<li><strong>POST Method Used in Validate Item List: " . ($isPostMethodValidateItem ? 'Yes' : 'No') . "</strong></li>";

    // Generate order form
    list($orderFormHtml, $isPostMethodOrderForm) = $this->generateOrderForm();
    $summary .= "<li><strong>Order Form Generated</strong></li>";
    $summary .= "<li><strong>POST Method Used in Order Form: " . ($isPostMethodOrderForm ? 'Yes' : 'No') . "</strong></li>";

    // Handle current location
    $isPostMethodCurrentLocation = $this->requireCurrentLocation();
    $summary .= "<li><strong>Handled Current Location</strong></li>";
    $summary .= "<li><strong>POST Method Used in Current Location: " . ($isPostMethodCurrentLocation ? 'Yes' : 'No') . "</strong></li>";

    // Generate order list form
    list($orderListFormHtml, $isPostMethodOrderListForm) = $this->generateOrderListForm();
    $summary .= "<li><strong>Order List Form Generated</strong></li>";
    $summary .= "<li><strong>POST Method Used in Order List Form: " . ($isPostMethodOrderListForm ? 'Yes' : 'No') . "</strong></li>";
    $summary .= $orderListFormHtml;

    // Generate order sort form
    list($orderSortFormHtml, $isPostMethodOrderSortForm, $selectedSortOption) = $this->generateOrderSortForm();
    $summary .= "<li><strong>Order Sort Form Generated</strong></li>";
    $summary .= "<li><strong>POST Method Used in Order Sort Form: " . ($isPostMethodOrderSortForm ? 'Yes' : 'No') . "</strong></li>";
    if ($selectedSortOption) {
        $summary .= "<li><strong>Selected Sort Option: " . htmlspecialchars($selectedSortOption) . "</strong></li>";
    } else {
        $summary .= "<li><strong>No Sort Option Selected</strong></li>";
    }

    // Cartesian data collection
    $cartesianData = [];

    foreach ($this->tables as $section => $tables) {
        $summary .= "<li><strong>$section</strong><ul>";

        foreach ($tables as $tableName => $tableInfo) {
            $summary .= "<li>$tableName<ul>";

            $columnCount = count($tableInfo['columns']);
            $rowCount = $this->getRowCount($tableName);

            $summary .= "<li>Columns: $columnCount</li>";
            $summary .= "<li>Rows: $rowCount</li>";

            // Collect Cartesian pair
            $cartesianData[] = [
                'x' => $columnCount, 
                'y' => $rowCount, 
                'postValidateItem' => $isPostMethodValidateItem,
                'postOrderForm' => $isPostMethodOrderForm,
                'postCurrentLocation' => $isPostMethodCurrentLocation,
                'postOrderListForm' => $isPostMethodOrderListForm,
                'postOrderSortForm' => $isPostMethodOrderSortForm
            ];

            // Optionally, you can add more details about each column
            foreach ($tableInfo['columns'] as $column) {
                $summary .= "<li>$column</li>";
            }

            $summary .= "</ul></li>";
        }

        $summary .= "</ul></li>";
    }

    $summary .= "</ul>";

    // Print the Cartesian data
    $summary .= "<h3>Cartesian Data</h3><pre>" . print_r($cartesianData, true) . "</pre>";

    return $summary;
}

public function generatePropertiesGraph($postData) {
    // Process the posted data
    $location = $postData['location'] ?? 'Home';
    $pageNumber = $postData['page'] ?? '1';
    $itemList = $postData['itemlistphp'] ?? 'a';
    $find = $postData['find'] ?? '1';
    $sortOptions = $postData['sortOptions'] ?? 'ORDER BY productidpopularity.popularity DESC';
    $userSearch = $postData['usersearch'] ?? null;

    // Generate graph data based on the processed data
    $graphData = [
        'nodes' => [],
        'edges' => []
    ];

    foreach ($this->tables as $section => $tables) {
        foreach ($tables as $tableName => $tableInfo) {
            $graphData['nodes'][] = ['id' => $tableName, 'label' => $tableName];

            foreach ($tableInfo['columns'] as $column) {
                $graphData['edges'][] = [
                    'from' => $tableName,
                    'to' => $column,
                    'label' => "Has column"
                ];
            }
        }
    }

    // Generate spread summary
    $spreadSummary = $this->generateSpreadSummary();

    // Save the graph and summary to a file
    $this->saveGraphToFile($graphData, $spreadSummary, 'graph.html');
}


private function saveGraphToFile($graphData, $summary, $filename) {
    // Create HTML content for the graph and summary
    $graphHtml = '<html><head><style>.node { border: 1px solid #000; padding: 5px; }</style></head><body>';
    $graphHtml .= '<div class="graph-container">';

    // Add nodes
    foreach ($graphData['nodes'] as $node) {
        $graphHtml .= '<div class="node" id="node-' . $node['id'] . '">' . $node['label'] . '</div>';
    }

    // Add edges
    foreach ($graphData['edges'] as $edge) {
        $graphHtml .= '<div class="edge" data-from="node-' . $edge['from'] . '" data-to="node-' . $edge['to'] . '">'
            . $edge['label'] . '</div>';
    }

    $graphHtml .= '</div>';

    // Add summary
    $graphHtml .= $summary;

    $graphHtml .= '</body></html>';

    // Save HTML to a file
    file_put_contents($filename, $graphHtml);
}




private function getRowCount($tableName) {
    $sql = "SELECT COUNT(*) as count FROM $tableName";
    $result = $this->conn->query($sql);

    if ($result && $row = $result->fetch_assoc()) {
        return $row['count'];
    } else {
        return 0;
    }
}




        
    }
    





    class Device extends EditViewProfile {
        protected $spname;
        private $author;
        private $ProductID;
        private $numOfDevices;
        private $numOfCopies;
        private $status;

        // Constructor
        public function __construct($spname = "", $author = "", $ProductID = 0, $numOfDevices = 0, $numOfCopies = 0, $status = false) {
            $this->spname = $spname;
            $this->author = $author;
            $this->ProductID = $ProductID;
            $this->numOfDevices = $numOfDevices;
            $this->numOfCopies = $numOfCopies;
            $this->status = $status;
            parent::__construct();
  
        }
        public function displayLoginForm(){}

        // Getters
        public function getspname() {
            return $this->spname;
        }
    
        public function getAuthor() {
            return $this->author;
        }
    
        public function getProductID() {
            return $this->ProductID;
        }
    
        public function getNumOfDevices() {
            return $this->numOfDevices;
        }
    
        public function getStatus() {
            return $this->status;
        }
    
        // Setters
        public function setspname($spname) {
            $this->spname = $spname;
        }
    
        public function setAuthor($author) {
            $this->author = $author;
        }
    
        public function setProductID($ProductID) {
            $this->ProductID = $ProductID;
        }
    
        public function setNumOfDevices($numOfDevices) {
            $this->numOfDevices = $numOfDevices;
        }
    
        public function setStatus($status) {
            $this->status = $status;
        }
    
        // Methods
        public function addNewDevice($addDevices) {
            $this->numOfDevices += $addDevices;
            echo "Successfully added $addDevices copies of: " . $this->spname . "\n";
        }
    
        public function updateDeviceInfo($spname, $author, $ProductID) {
            $this->spname = $spname;
            $this->author = $author;
            $this->ProductID = $ProductID;
        }
    
        public function removeDevice($removeDevices) {
            $this->numOfDevices -= $removeDevices;
            echo "Successfully removed $removeDevices copies of: " . $this->spname . "\n";
        }
    }
    
    // User class
     class User {
        private $firstName;
        private $lastName;
        private $login;
        private $Device;
        private $studentId;
        private $date;
        protected $spreadInput;
        public function __construct($firstName = "", $lastName = "", $studentId = 0, $date = 0) {
          echo "==============================================================================================================================================================================================================";

//"userSearch", "itemString", "itemVendor", 123, 10, "In Stock", "DISCOUNT10", 10, "b", "a", "sortParam"

             $this->spreadInput = new SpreadInput();
             $this->firstName = $firstName;
             $this->lastName = $lastName;
             $this->login = false;
             $this->studentId = $studentId;
             $this->date = $date;

        }
        protected function displayLoginForm(){}

        // Getters
        public function getStudentId() {
            return $this->studentId;
        }
    
        public function getLogin() {
            return $this->login;
        }
    
        public function getFirstName() {
            return $this->firstName;
        }
    
        public function getLastName() {
            return $this->lastName;
        }
    
        // Setters
        public function setStudentId($studentId) {
            $this->studentId = $studentId;
        }
    
        public function login($state) {
            $this->login = $state;
        }
    
        // Methods
        public function checkStudentId($user) {
            // Implementation here
        }
    
        public function borrow() {
            // Implementation here
        }
    
        public function numberOfPreviousDays($day) {
            // Implementation here
        }
    
        public function viewHistory($Devices, $numberOfDevices, $total, $date) {
            // Implementation here
        }
    }
    
    // Child class Speak
    class Speak extends User {

        public function sayHello() {
            echo "Hello, I'm here to help!\n";
        }
    
        public function introduce() {
            echo "Hi, I am " . $this->getFirstName() . " " . $this->getLastName() . "!\n";
        }
    }
    
    class Main extends SpreadInput {

        public function __construct(){
            
            parent::__construct();
           
            echo  $this->password;
            echo $this->username;
              
            echo  $this->password;
            echo $this->username;
              
            echo  $this->password;
            echo $this->username;
            echo  $this->password;
            echo $this->username;
              
            echo  $this->password;
            echo $this->username;
              
            echo  $this->password;
            echo $this->username;
              
            echo  $this->password;
            echo $this->username;
              
            echo  $this->password;
            echo $this->username;
                  //$usersearch
                  echo  $this->password;
                  echo $this->username;
                    
                  echo  $this->password;
                  echo $this->username;
                    
                  echo  $this->password;
                  echo $this->username;
                  echo  $this->password;
                  echo $this->username;
                    
                  echo  $this->password;
                  echo $this->username;
                    
                  echo  $this->password;
                  echo $this->username;
                    
                  echo  $this->password;
                  echo $this->username;
                    
                  echo  $this->password;
                  echo $this->username;
                    
                  echo  $this->password;
                  echo $this->username;
                    
                  echo  $this->password;
                  echo $this->username;
                    
                  echo  $this->password;
                  echo $this->username;
                    
                  echo  $this->password;
                  echo $this->username;  
                 
            echo  $this->password;
            echo $this->username;
              
            echo  $this->password;
            echo $this->username;
              
            echo  $this->password;
            echo $this->username;
              
            echo  $this->password;
            echo $this->username;
        } 
        public function run() {
           
            $totalLibraryMembers = 0;
            $libraryMembers = 0;
            
            for ($day = 0; $day < 365; $day++) {
                echo "GOOD MORNING! How many library members have registered today?\n";
                $libraryMembers = intval(fgets(STDIN));
                $totalLibraryMembers += $libraryMembers;
                $libraryMembersArray = array_fill(0, $libraryMembers, new User());
                
                echo "Total library members: $totalLibraryMembers. Members added today: $libraryMembers\n";
                
                do {
                    echo "Please enter name and student ID to login...\n";
                    $currentUser = new User();
                    $currentUser->checkStudentId($currentUser);
                    
                    foreach ($libraryMembersArray as $member) {
                        if ($currentUser->getStudentId() == $member->getStudentId() &&
                            $currentUser->getFirstName() == $member->getFirstName() &&
                            $currentUser->getLastName() == $member->getLastName()) {
                            $currentUser->login(true);
                            echo "We found you in our system and are logging you in...\n";
                            break;
                        } else {
                            echo "Invalid login entry\n";
                            echo "Would you like to sign up for a new account? (yes/no)\n";
                            $response = trim(fgets(STDIN));
                            
                            if ($response == "yes") {
                                if ($member->getStudentId() == 0) {
                                    $newId = $totalLibraryMembers + 300179695;
                                    $member->setStudentId($newId);
                                    echo "{$member->getFirstName()} {$member->getLastName()}'s new student ID is: {$newId}\n";
                                } else {
                                    echo "{$member->getFirstName()} {$member->getLastName()}'s student ID is: {$member->getStudentId()}\n";
                                }
                            }
                        }
                    }
                    
                    if ($currentUser->isLoggedIn()) {
                        echo "My name is Megatron and I'm your personal assistant! You can say things like CATALOG or BORROWING HISTORY!\n";
                        $userCommand = trim(fgets(STDIN));
                        
                        if ($userCommand == "borrow Devices") {
                            $currentUser->borrow();
                        }
                    }
                } while (true);
            }
            
            echo "HAPPY NEW YEAR!!\n";
        }
    }
    
    // Assuming an instance creation and method call is done elsewhere in your program
    








class Employee extends EditViewProfile {
    public function __construct(){
        
        parent::__construct();
        
    } 
    public function displayLoginForm(){}

private $employeeId;
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
    public function __construct(){
        
        parent::__construct();
    } 
    public function displayLoginForm(){}

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

function postLocation($index) {
    if (isset($this->tables[$index])) {
    $this->compus = $index;
    
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

        }











































        class FormGenerator extends Department {
            public function __construct(){
                
                parent::__construct();
            } 
            public function displayLoginForm(){}

            protected function generateRMSHardwareSite() {
            $paddingBottom = $this->itemList * 200;
            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
            echo '<head>';
            echo ' <meta charset="UTF-8" />';
            echo ' <meta http-equiv="X-UA-Compatible" content="IE=edge" />';
            echo ' <meta name="viewport" content="width=device-width, initial-scale=1.0" />';
            echo ' <title>RMS Hardware Site</title>';
            echo ' <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />';
            echo ' <link rel="stylesheet" href="style_2.css"/>';
            // Add the custom CSS directly with dynamic padding-bottom
            echo '<style>';
            echo '#nav { width: 400px; float: left; padding-bottom: ' . $paddingBottom . 'px; }';
            echo '#content { margin-left: 220px; padding: 20px; }';
            echo '</style>';
            echo '<style type="text/css"> input { font-family: sans-serif; } </style>';

            echo '</head>';
            echo '<body>';
            echo ' <div id="main">';
            echo ' <div id="header1">';
            echo ' <img src="images/logo.gif" alt="TLA logo" height="70" width="70" />';
            echo ' <h1>RMS+ Remodeling Management Services Plus Home</h1>';
            echo ' <div id="social">';
            echo '<a href="https://www.facebook.com/"><img src="images/facebook.jpg" alt="facebook"></a>';
            echo ' <a href="https://www.x.com"><img src="images/x.jpg" alt="x/twitter"></a>';
            echo ' <a href="https://www.linkedin.com"><img src="images/linkedin.jpg" alt="linkedin"></a>';
            echo ' <a href="https://www.snapchat.com"><img src="images/2018_social_media_popular_app_logo_snapchat-512.webp" alt="snapchat"></a>';
            echo ' </div>';
            $this->advertise(); // Advertisements
            $this->renderDropdown(); // Dropdown menu
            echo ' </div>';
            echo ' <div id="nav">';
            echo ' <ul>';
            foreach (array_keys($this->tables) as $location) {
            $selected = ($this->compusforreal === $location) ? ' class="selected"' : '';
            echo '<h6><a href="' 
            . htmlspecialchars($_SERVER['PHP_SELF']) 
            . '?location=' 
            . htmlspecialchars($location) 
            . '&page=' 
            . htmlspecialchars($this->pageNumber) 
            . '&itemlistphp=' 
            . htmlspecialchars($this->itemlist) 
            . '&find=' 
            . htmlspecialchars($this->find) 
            . '&sortOptions=' 
            . urlencode($this->itemsort) 
            . '&usersearch=' 
            . urlencode($this->usersearch) 
            . '&username=' 
            . (isset($_POST['username']) ? htmlspecialchars($_POST['username']) : (isset($_GET['username']) ? htmlspecialchars($_GET['username']) : 'guest')) 
            . '&password=' 
            . (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : (isset($_GET['password']) ? htmlspecialchars($_GET['password']) : 'guestpassword')) 
            . '"' 
            . $selected 
            . '>' 
            . htmlspecialchars($location) 
            . '</a></h6>';
                    }
            echo ' </ul>';
            echo ' </div>';
            echo ' <div id="content">';
            echo ' <div id="title">';
            echo ' <h2>' . htmlspecialchars($this->compus) . ' Page</h2>';
            echo ' </div>';
            echo ' <!-- PHP content will be inserted here -->';

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
            protected function genereateSpreadSummary(){
            echo $this->generateOrderListForm();
            echo "You searched ";
            echo "<p>" . $this->getUserSearch() . " in ";
            echo "on " . $this->date . "</p>";
            echo "and we found these results: <br>";
            }
            protected function advertise() {
            $sqladvertise = "SELECT longbob FROM storeproduct
            JOIN productidpopularity pp ON storeproduct.ProductID = pp.ProductID
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
            echo '<!DOCTYPE html>
            <html>
            <head>
            <title>America\'s Number 1 Hardware!</title>
            </head>
            <body>
            <h1>America\'s Number 1 Hardware!</h1>
            <div align="center">
            <table style="width: 100%; border: 0;">
            <tr>';
            for ($i = 0; $i < 10; $i++) {
            echo '<td style="width: 33%; text-align: center;">';
            if (isset($pictures[$i])) {
            echo '<img src="data:image/jpeg;base64,' . htmlspecialchars($pictures[$i]) . '"/>';
            } else {
            echo '<img src="images/logo2.png"/>';
            }
            echo '</td>';
            }
            echo ' </tr>
            </table>
            </div>
            </body>
            </html>';
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
                // Initialize shortenKillCircle
                $this->shortenKillCircle = [];
            
                // Loop through the tables to populate shortenKillCircle
                foreach ($this->tables as $category => $tables) {
                    foreach ($tables as $tableName => $tableData) {
                        // Check if the tableName is in the restricted tables
                        if (in_array($tableName, $this->restrictedTables)) {
                            // Assign table data to shortenKillCircle
                            $this->shortenKillCircle[$category][$tableName] = $tableData;
                        }
                    }
                }
            
                // Debugging output to verify shortenKillCircle population
                echo "<pre>";
                print_r($this->shortenKillCircle);
                echo "</pre>";
            
                echo "========================================================burp========================================================================";
            
                echo "<!DOCTYPE html>";
                echo "<html>";
                echo "<head>";
                echo "    <title>Modify Data</title>";
                echo "    <script>
                            function submitForm(table, column, username, password) {
                                document.getElementById('tableInput').value = table;
                                document.getElementById('columnInput').value = column;
                                document.getElementById('usernameInput').value = username;
                                document.getElementById('passwordInput').value = password;
                                document.getElementById('modifyDataForm').submit();
                            }
                        </script>";
                echo "</head>";
                echo "<body>";
                echo "    <h2>Modify Data</h2>";
                echo "    <form id='modifyDataForm' method='post' action=''>";
                echo "        <label for='table'>Select Table:</label>";
                echo "        <select name='table' id='table'>";
            
                // Populate dropdown with tables from restrictedTables
                foreach ($this->shortenKillCircle as $category => $tables) {
                    foreach ($tables as $tableName => $tableData) {
                        echo "            <option value='" . htmlspecialchars($tableName) . "'>" . htmlspecialchars(ucfirst($tableName)) . "</option>";
                    }
                }
            
                echo "        </select>";
                echo "        <br><br>";
                echo "        ID (for update/delete): <input type='text' name='idValue'><br><br>";
                echo "        Column: <br><br>";
                echo "        <div class='column-links'>";
            
                // Populate column links based on restricted tables
                foreach ($this->shortenKillCircle as $category => $tables) {
                    foreach ($tables as $tableName => $tableData) {
                        echo htmlspecialchars($tableName);
                        echo "<br>";
                        foreach ($tableData['columns'] as $columnName) {
                            echo "<a href='#' onclick='submitForm(\"" 
                                . htmlspecialchars($tableName) . "\", \"" 
                                . htmlspecialchars($columnName) . "\", \"" 
                                . (isset($_POST['username']) ? htmlspecialchars($_POST['username']) : (isset($_GET['username']) ? htmlspecialchars($_GET['username']) : 'guest')) 
                                . "\", \"" 
                                . (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : (isset($_GET['password']) ? htmlspecialchars($_GET['password']) : 'guestpassword')) 
                                . "\")'>" 
                                . htmlspecialchars($columnName) . "</a><br>";
                        }
                    }
                }
            
                echo "        </div>";
                echo "        Value: <input type='text' name='columnValue'><br><br>";
                echo "        <input type='hidden' name='table' id='tableInput'>";
                echo "        <input type='hidden' name='column' id='columnInput'>";
                echo "        <input type='hidden' name='username' id='usernameInput'>";
                echo "        <input type='hidden' name='password' id='passwordInput'>";
                echo "        <input type='hidden' name='action_state' value='" . htmlspecialchars($_POST['action_state']) . "'>";
                echo "        <input type='submit' name='modify' value='Submit'>";
                echo "    </form>";
                echo "</body>";
                echo "</html>";
            }
             

public function modifyData($tables, $page, $idValue, $columnValue, $action) {
    echo "Starting modifyData function.<br>";
    echo "Page: $page<br>";
    echo "ID Value: $idValue<br>";
    echo "Column Value: $columnValue<br>";
    echo "Action: $action<br>";
    
    // Check if the table name is in restricted tables
    foreach($this->restrictedTables as $patricThatsAnAc130) {
        foreach($this->tables[$page] as $sendAc130) {
            if($patricThatsAnAc130 == $sendAc130) {
                $this->shortenKillCircle = $this->tables[$sendAc130];
            }
        }
    }
    
    // Verify if the page exists in shortenKillCircle
    if (isset($this->shortenKillCircle[$page])) {
        echo "Page $page exists.<br>";
        
        foreach ($this->shortenKillCircle[$page] as $tableName => $tableData) {
            if (isset($tableData['columns'])) {
                echo "Table $tableName and its columns found.<br>";
                
                if (in_array($columnValue, $tableData['columns'])) {
                    $sql = "";
                    if ($action == "update") {
                        $sql = "UPDATE $tableName SET $columnValue = ? WHERE id = ?";
                        $stmt = $this->conn->prepare($sql);
                        $stmt->bind_param('ss', $columnValue, $idValue);
                        echo "SQL Query: $sql<br>";
                    } elseif ($action == "delete") {
                        $sql = "DELETE FROM $tableName WHERE id = ?";
                        $stmt = $this->conn->prepare($sql);
                        $stmt->bind_param('s', $idValue);
                        echo "SQL Query: $sql<br>";
                    } elseif ($action == "add") {
                        $columns = implode(", ", $tableData['columns']);
                        $placeholders = implode(", ", array_fill(0, count($tableData['columns']), '?'));
                        $values = array_map(function($col) use ($columnValue) { return $columnValue; }, $tableData['columns']);
                        $sql = "INSERT INTO $tableName ($columns) VALUES ($placeholders)";
                        $stmt = $this->conn->prepare($sql);
                        $stmt->bind_param(str_repeat('s', count($values)), ...$values);
                        echo "SQL Query: $sql<br>";
                    }
                    if ($sql && $stmt->execute()) {
                        echo "Operation executed successfully for column $columnValue.<br>";
                    } else {
                        echo "Error executing operation for column $columnValue: " . $stmt->error . "<br>";
                    }
                } else {
                    echo "Column $columnValue not found in table $tableName.<br>";
                }
            } else {
                echo "Columns not defined for table $tableName.<br>";
            }
        }
    } else {
        echo "Error: Page $page not found.<br>";
    }

    echo "Finished modifyData function.<br>";
}










            public function handleModifyRequest() {
            if (isset($_POST['modify'])) {
            $tabler = $_POST['table'];
            $id = $_POST['idValue'];
            $columned = $_POST['columnName'];
            $valued = $_POST['columnValue'];
            if (empty($id)) { // Insert operation
            $sql = "INSERT INTO $tabler ($columned) VALUES ('$valued')";
            if ($this->conn->query($sql) === TRUE) {
            echo "Record inserted successfully";
            } else {
            echo "Error: " . $this->conn->error;
            }
            } else {
            if (!empty($columned) && !empty($valued)) { // Update operation
            $sql = "UPDATE $tabler SET $columned='$valued' WHERE id=$id";
            if ($this->conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            } else {
            echo "Error: " . $this->conn->error;
            }
            } else { // Delete operation
            $sql = "DELETE FROM $tabler WHERE id=$id";
            if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            } else {
            echo "Error: " . $this->conn->error;
            }
            }
            }
            }
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
            }
            
            


class formgeneratorthree extends FormGenerator{
    public function __construct(){
        parent::__construct();
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


protected function generatePaginationLinks() {
if (isset($table_data) && (count($table_data) > 0 || !is_null($table_data))) $this->currentPage = $this->handlePageNumber();{
$totalPages = ($this->page_number % $this->itemList === 0) ? ($this->page_number / $this->itemList) : (($this->page_number - ($this->page_number % $this->itemList)) / $this->itemList) + 1;
for ($i = 1; $i <= $totalPages; $i++) {
$selected = ($this->currentPage == $i) ? ' class="selected"' : '';
$pages = '<a href="' 
    . htmlspecialchars($_SERVER['PHP_SELF']) 
    . '?location=' 
    . htmlspecialchars($locate) 
    . '&page=' 
    . htmlspecialchars($this->pageNumber) 
    . '&itemlistphp=' 
    . htmlspecialchars($this->itemlist) 
    . '&find=' 
    . htmlspecialchars($this->find) 
    . '&sortOptions=' 
    . urlencode($this->itemsort) 
    . '&usersearch=' 
    . urlencode($this->usersearch) 
    . '&username=' 
    . (isset($_POST['username']) ? htmlspecialchars($_POST['username']) : (isset($_GET['username']) ? htmlspecialchars($_GET['username']) : 'guest')) 
    . '&password=' 
    . (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : (isset($_GET['password']) ? htmlspecialchars($_GET['password']) : 'guestpassword')) 
    . '"' 
    . $selected 
    . '>Page ' 
    . htmlspecialchars($locate) 
    . '</a>';
 }
}
}

protected function handlePageNumber() {
    $this->page_number = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    }



    public function generateRMSHardwareSiteFooter() {
        $startIndex = ($this->page_number - 1) * $this->itemList;
        $endIndex = min($startIndex + $this->itemList, $this->page_number * $this->itemList);
    
        // Ensure database_data and table_name are properly set
        if (isset($this->database_data[$this->table_name]) && is_array($this->database_data[$this->table_name])) {
            $totalItems = count($this->database_data[$this->table_name]);
            $totalPages = ceil($totalItems / $this->itemList);
        } else {
            $totalPages = 1;
        }
    
        $currentPage = $this->page_number;
        $pageRange = 25;
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
            echo '<div class="fe-box-duplicate">';
            echo '<h6>' . "||" . '</h6>';
            echo '<form method="get" action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '">';
            echo '<input type="hidden" name="page" value="' . $j . '">';
            echo '<button type="submit" name="nextpage">Page ' . $j . '</button>';
            echo '</form>';
            echo '</div>';
        }
        echo '</section>';
        echo '</div>'; // Close the div properly
        if (isset($this->table_data) && !is_null($this->table_data)) {
            $this->generatePaginationLinks();
        }
        echo '</div>'; // Close the outer div
        echo '</body>';
        echo '</html>';
        $this->generateRMSHardwareSiteFooterlinks();
    }
    

protected function generateRMSHardwareSiteFooterlinks(){
{ echo ' </div>';
echo ' <section id="about-head" class="section-p1">';
echo ' <div id="footer">';
echo ' <h4><marquee bgcolor="#ccc" loop="-1" scrollamount="5">The Best Hardware Store In Town - Best Deals and Best Service</marquee></h4>';
echo ' </div>';
echo ' </section>';
echo ' <section id="feature" class="section-p1" style="display: flex; flex-wrap: wrap;">';
foreach (array_keys($this->tables) as $locate) {
$selected = ($locate === $this->compus) ? ' class="selected"' : '';
echo ' <div class="fe-box" style="margin: 10px;">';
echo ' <img src="' . $this->images[$locate] . '" alt="' . htmlspecialchars($locate) . '">';
echo '<h6><a href="' 
    . htmlspecialchars($_SERVER['PHP_SELF']) 
    . '?location=' 
    . htmlspecialchars($locate) 
    . '&page=' 
    . htmlspecialchars($this->pageNumber) 
    . '&itemlistphp=' 
    . htmlspecialchars($this->itemlist) 
    . '&find=' 
    . htmlspecialchars($this->find) 
    . '&sortOptions=' 
    . urlencode($this->itemsort) 
    . '&usersearch=' 
    . urlencode($this->usersearch) 
    . '&username=' 
    . (isset($_POST['username']) ? htmlspecialchars($_POST['username']) : (isset($_GET['username']) ? htmlspecialchars($_GET['username']) : 'guest')) 
    . '&password=' 
    . (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : (isset($_GET['password']) ? htmlspecialchars($_GET['password']) : 'guestpassword')) 
    . '"' 
    . $selected 
    . '>' 
    . htmlspecialchars($locate) 
    . '</a></h6>';
echo ' </div>';
}
echo "<br>";

echo ' </section>';
echo ' </div>';
echo '</body>';
echo '</html>';
}
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
}
class FormGeneratorbreak extends formgeneratorthree {

    public function __construct(){
        parent::__construct();
    } 

public function loadData() {
  //  echo "Loading data for compus: " . htmlspecialchars($this->compus) . "<br>";
    $this->restrictedTables = [];
    if (isset($this->tables[$this->compus])) {
        foreach ($this->tables[$this->compus] as $table_name => $table_info) {
            // Ensure columns are properly set
            if (isset($table_info['columns']) && is_array($table_info['columns'])) {
                $this->columns = $table_info['columns'];
                $this->tableName = $table_name;

                // Fetch data and store it
                $this->database_data[$table_name] = $this->fetchTableData($this->username);
             //   echo "Data loaded for table: $table_name<br>";

                // Display greeting if available
                if (isset($table_info['greet'])) {
                    echo $table_info['greet'] . "<br>";
                }
            } else {
               echo "Invalid columns structure for table: $table_name<br>";
            }
        }
    } else {
        echo "No tables found for compus: " . htmlspecialchars($this->compus) . "<br>";
    }
}















































public function fetchTableData() {
    // Get restricted tables
    $this->restrictedTables = $this->getUserRestrictedTables();

    // Ensure you have a connection to your database

    // Ensure columns is an array
    if (!is_array($this->columns)) {
        return "Error: columns should be an array.";
    }

    // Fetch the correct table columns based on the selected table
    $tableColumns = [];
    foreach ($this->tables as $section => $tables) {
        if (isset($tables[$this->tableName])) {
            $tableColumns = $tables[$this->tableName]['columns'];
            break;
        }
    }

    // Ensure the fetched columns are an array
    if (!is_array($tableColumns)) {
        return "Error: table columns should be an array.";
    }

    // Fully qualify columns to avoid ambiguity
    $qualifiedColumns = array_map(function($column) {
        return "$this->tableName.$column";
    }, array_intersect($tableColumns, $this->restrictedTables)); // Only allow items in restrictedTables

    if (empty($qualifiedColumns)) {
        return "Error: No valid columns available for selection.";
    }

    $columnString = implode(", ", $qualifiedColumns);
    $query = "SELECT $columnString";

    // Determine if we need to join productidpopularity
    $needsPopularityJoin = in_array('ProductID', $tableColumns);

    if ($needsPopularityJoin) {
        $query .= ", productidpopularity.popularity FROM $this->tableName LEFT JOIN productidpopularity ON $this->tableName.ProductID = productidpopularity.ProductID";
        // Set default sort column if not provided
        $this->itemsort = !empty($_POST['sortOptions']) ? $_POST['sortOptions'] : 'ORDER BY productidpopularity.popularity DESC';
    } else {
        $query .= " FROM $this->tableName";
        $this->itemsort = !empty($_POST['sortOptions']) ? $_POST['sortOptions'] : '';
    }

    if ($this->usersearch == null && $this->find == 1) {
        $query .= " " . $this->itemsort;
    } elseif ($this->usersearch == null && $this->find != 1) {
        $query .= " WHERE $this->tableName.DepartmentID = " . $this->find . " " . $this->itemsort;
    } else {
        // Build LIKE conditions for each column
        $likeConditions = [];
        foreach ($tableColumns as $column) {
            $likeConditions[] = "$this->tableName.$column LIKE '%$this->usersearch%'";
        }
        $query .= " WHERE (" . implode(" OR ", $likeConditions) . ") " . $this->itemsort;
    }

    // Print the constructed query for debugging
    echo "Constructed Query: $query";

    // Execute the query
    $results = $this->conn->query($query);

    $data = [];
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        return "No results found";
    }
    return $data;
}


function displayImagesFromTable() {
if (isset($this->database_data[$this->table_name])) {
foreach ($this->database_data[$this->table_name] as $row) {
if (isset($row['longbob'])) {
$this->displayImage($row['longbob']);
echo "<br>";
}
}
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

function getCompus() {
echo "Current Location: " . htmlspecialchars($this->compus);
return empty($this->compus) ? "Home" : $this->compus;
}
function renderDropdown() {
    $this->compusforreal = $this->compus;
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




}

class Page extends FormGeneratorbreak {
    public function __construct(){
        parent::__construct();
    } 
    // Declare properties
    public $tables;
    public $compus;
    public $title;
    public $keywords;
    public $keys;
    public $length;
    public $columns;
    public $data;
    public $itemList; // Make sure this is also set somewhere

    public function __set($name, $value) {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        } else {
            trigger_error("Cannot set undefined property: $name", E_USER_NOTICE);
        }
    }

    public function DisplayTitle() {
        echo "<title>" . htmlspecialchars($this->title) . "</title>";
    }

    public function DisplayKeywords() {
        echo "<meta name='keywords' content='" . htmlspecialchars($this->keywords) . "' />";
    }

    public function DisplayStyles() {
        echo '<link href="style_2.css" type="text/css" rel="stylesheet">';
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
                <a href="' . htmlspecialchars($url) . '">
                    <img src="s-logo.gif" alt="" height="20" width="20" />
                    <span class="menutext">' . htmlspecialchars($name) . '</span>
                </a>
            </div>';
        } else {
            echo '<div class="menuitem">
                <img src="side-logo.gif" alt="" />
                <span class="menutext">' . htmlspecialchars($name) . '</span>
            </div>';
        }
    }

    public function displayHeader() {
        echo '
        <div id="header1">
            <img src="images/logo.gif" alt="TLA logo" height="70" width="70" />
            <h1>RMS+ Remodeling Management Services Plus Home</h1>
            <div id="social">
            <a href="https://www.facebook.com/"><img src="images/facebook.jpg" alt="facebook"></a>
                <a href="https://www.x.com"><img src="images/x.jpg" alt="x/twitter"></a>
                <a href="https://www.linkedin.com"><img src="images/linkedin.jpg" alt="linkedin"></a>
                <a href="https://www.snapchat.com"><img src="images/2018_social_media_popular_app_logo_snapchat-512.webp" alt="snapchat"></a>
            </div>
        </div>';
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
        </section>';
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
    
    // Add other necessary methods and properties as needed
}












class Item extends Page {
    public function __construct(){
        parent::__construct();
        
    } 
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
    public function __construct(){
        parent::__construct();
   
//$usersearch
    } 
public function getUserSearch() {
return $this->usersearch;
}
public function setUserSearch($usersearch) {
$this->usersearch = $usersearch;
}
public function usersearch() {
if (empty($this->usersearch) || $this->usersearch == 0) {
return "The search string is empty. Please provide a search term.";
} else {
return "You searched for '{$this->usersearch}'";
}
}
}
class ItemListHandler extends SearchHandler {
public function __construct() {
    //$usersearch
parent::__construct();

}

}
class FindHandler extends ItemListHandler {
public function __construct() {
    //$usersearch
parent::__construct();

  
//$usersearch
}
public function getFind() {
return $this->find;
}
public function setFind($find) {
$this->find = $find;
}
public function validateFind() {
    // Connect to your database (assuming $this->conn is your database connection)

    // Fetch all departments from the database
    $result = $this->conn->query($this->sqlDepartment);

    // Create an associative array to map DepartmentID to DepartmentName
    $departments = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $departments[$row['DepartmentID']] = $row['DepartmentName'];
        }
    }

    // Check if $this->find exists in the departments array
    if (array_key_exists($this->find, $departments)) {
        echo "<p>{$departments[$this->find]}</p>";
    } else {
        echo "<p>Default products</p>";
    }
}

}


class ItemSortHandler extends FindHandler {
public function __construct() {
    parent::__construct();



//$usersearch
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
    public function __construct() {
        $this->servername = "localhost";
        $this->username;
        $this->password;
        $this->dbname = "rmstwo";

        parent::__construct();
$this->displayLoginForm();

        $this->compus = isset($_POST['location']) ? $_POST['location'] : (isset($_GET['location']) ? $_GET['location'] : 'Home');
        $this->pageNumber = empty($_POST['page']) ? '1' : $_POST['page'];
        $this->document_root = $_SERVER['DOCUMENT_ROOT'];
        $this->date = date('H:i, jS F Y');
        $this->itemlist = empty($_POST['itemlistphp']) ? 'a' : $_POST['itemlistphp'];
        $this->find = !empty($_POST['find']) ? $_POST['find'] : '1';
        $this->itemsort = !empty($_POST['sortOptions']) ? $_POST['sortOptions'] : 'ORDER BY productidpopularity.popularity DESC';
        $this->usersearch = isset($_POST['usersearch']) ? (string) $_POST['usersearch'] : "1 2 3 4 5 6 7 8 9 0 a b c d e f g h i j k l m n o p q r s t u v w x y z A B C D E F G H I J K L M N O P Q R S T U V W X Y Z";

        if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_GET['location'])) {
            $this->location = isset($_POST['location'])
            ? $_POST['location'] : (isset($_GET['location']) ? $_GET['location'] : 'Home');
            $this->postLocation($this->location);
        }

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        $this->validateItemList();

        $this->searchArray = $this->usersearch ? explode(' ', $this->usersearch) : [];
        $this->restrictedTables = $this->getUserrestrictedTables();

        $this->handleLocation();
        $this->generateRMSHardwareSite();

        // Initialize other properties...

        // Validate item list
        $this->validateItemList();
    
        // Handle request method and location
        $this->handleRequestMethodAndLocation();
    
        // Generate order form and echo the HTML part
        list($orderFormHtml, $isPostMethodOrderForm) = $this->generateOrderForm();
        echo $orderFormHtml;
    
        // Handle current location
        $this->requireCurrentLocation();
    
        // Generate order list form and echo the HTML part
        list($orderListFormHtml, $isPostMethodOrderListForm) = $this->generateOrderListForm();
        echo $orderListFormHtml;
    
        // Generate order sort form and echo the HTML part
        list($orderSortFormHtml, $isPostMethodOrderSortForm) = $this->generateOrderSortForm();
        echo $orderSortFormHtml;
        $this->generateSlideshow();

        // Additional initialization...

        // Call displayLoginForm to set the username and password

        echo $this->password;
        echo $this->username;

        parent::__construct();
        $this->DisplayKeywords();
        $this->displayTablesForCurrentCompus();
        $this->loadData();

        $this->generateRMSHardwareSiteFooter();

        $this->conn->close();
    }

    public function displayTablesForCurrentCompus() {
       // echo 'displayTablesForCurrentCompus - Current compus value: ' . htmlspecialchars($this->compus) . "<br>";

        $selectedTable = null;
        foreach ($this->tables as $tableName => $tableContent) {
            if ($tableName === $this->compus) {
                $selectedTable = $tableContent;
                break;
            }
        }

        if ($selectedTable !== null) {
            foreach ($selectedTable as $tableType => $tableInfo) {
                if ($tableType !== 'greet') {
                    if (isset($tableInfo['columns']) && is_array($tableInfo['columns'])) {
                        $this->columns = $tableInfo['columns'];
                        $this->tableName = $tableType;

                      //  echo "<h3>Columns for table $tableType:</h3>";
                      //  echo '<pre>';
                       // print_r($this->columns);
                       // echo '</pre>';

                        if (is_array($this->columns)) {
                            $qualifiedColumns = array_map(function($column) {
                                return "$this->tableName.$column";
                            }, $this->columns);

                            $columnString = implode(", ", $qualifiedColumns);
                            $needsPopularityJoin = in_array('ProductID', $this->columns);
                            $orderClause = $needsPopularityJoin ? 'ORDER BY productidpopularity.popularity DESC' : '';

                            $this->itemsort = !empty($_POST['sortOptions']) ? $_POST['sortOptions'] : $orderClause;

                            if ($this->usersearch == null && $this->find == 1) {
                                foreach ($this->restrictedTables as $heyVictor) {
                                    if ($heyVictor == $this->tableName) {
                                        $query = "SELECT $columnString" . ($needsPopularityJoin ? ", productidpopularity.popularity" : "") . "
                                                  FROM $this->tableName" . ($needsPopularityJoin ? " LEFT JOIN productidpopularity ON $this->tableName.ProductID = productidpopularity.ProductID" : "") . "
                                                  " . $orderClause;
                                        $this->executeQuery($query);
                                    } else {
                                      //  echo "HEY VICTOR!!";
                                    }
                                }
                            } elseif ($this->usersearch == null && $this->find != 1) {
                                foreach ($this->restrictedTables as $heyVictor) {
                                    if ($heyVictor == $this->tableName) {
                                        $query = "SELECT $columnString" . ($needsPopularityJoin ? ", productidpopularity.popularity" : "") . "
                                                  FROM $this->tableName" . ($needsPopularityJoin ? " LEFT JOIN productidpopularity ON $this->tableName.ProductID = productidpopularity.ProductID" : "") . "
                                                  WHERE $this->tableName.DepartmentID = " . (string)$this->find . "
                                                  " . $orderClause;
                                        $this->executeQuery($query);
                                    } else {
                                      //  echo "HEY VICTOR!!";
                                    }
                                }
                            } else {
                                foreach ($this->restrictedTables as $heyVictor) {
                                    if ($heyVictor == $this->tableName) {
                                        $likeConditions = [];
                                        for ($ii = 0; $ii < count($this->columns); $ii++) {
                                            $column = $this->columns[$ii];
                                            for ($i = 0; $i < count($this->searchArray); $i++) {
                                                $likeConditions[] = "$this->tableName.$column LIKE '%" . htmlspecialchars($this->searchArray[$i], ENT_QUOTES) . "%'";
                                            }
                                        }

                                        $query = "SELECT $columnString" . ($needsPopularityJoin ? ", productidpopularity.popularity" : "") . "
                                                  FROM $this->tableName" . ($needsPopularityJoin ? " LEFT JOIN productidpopularity ON $this->tableName.ProductID = productidpopularity.ProductID" : "") . "
                                                  WHERE (" . implode(" OR ", $likeConditions) . ") " . $orderClause;
                                        echo $this->executeQuery($query);
                                    } else {
                                       // echo "HEY VICTOR!!";
                                    }
                                }
                            }
                        } else {
                            echo "Columns parameter is not an array.";
                        }
                    } else {
                        echo "Invalid table structure for $tableType.";
                    }
                }
            }
        } else {
            echo "No matching table found for compus: " . htmlspecialchars($this->compus);
        }
    }
    public function displayLoginForm() {
        echo '<!DOCTYPE html>
        <html>
        <head>
            <title>Login Form</title>
            <style>
                /* Include your CSS here or link to the CSS file */
                @import url("https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap");
    
                html, body {
                    height: 100%;
                    color: black;
                    margin: 0;
                    padding: 0;
                    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
                    background: linear-gradient(315deg, #FCFF20, #D73694);
                    background-attachment: fixed;
                }
    
                input[type=text], input[type=password], textarea, select {
                    width: 100%;
                    padding: 12px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    margin-top: 6px;
                    margin-bottom: 16px;
                    resize: vertical;
                }
    
                input[type=submit] {
                    background-color: #04AA6D;
                    color: white;
                    padding: 12px 20px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
            </style>
        </head>
        <body>';
    
        echo '<form method="POST" action="">
              <table>
                <tr>
                <td>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                </td>
                <td>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                </td>
              <td>
                <input type="submit" value="Submit">
              </td>
              </tr>
              </table>
              </form>';
    
        if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
            $this->username = isset($_POST['username']) ? $_POST['username'] : (isset($_GET['username']) ? $_GET['username'] : '');
            $this->password = isset($_POST['password']) ? $_POST['password'] : (isset($_GET['password']) ? $_GET['password'] : '');
    
            // Ensure the password is captured correctly
            $this->login(); // Call the login function
        }
    
        echo '</body>
        </html>';
    }
    





       
        public function getAdImages() {
            return $this->adimages;
        }
    
    
        public function generateSlideshow() {
            $newadimages = $this->getAdImages(); // Accessing the array from the parent class
            ob_start();
            ?>
            <div class="container">
                <?php foreach ($newadimages as $index => $image): ?>
                    <div class="mySlides">
                        <div class="numbertext"><?php echo $index + 1; ?> / <?php echo count($newadimages); ?></div>
                        <img src="<?php echo $image['src']; ?>" width="600" height="450">
                    </div>
                <?php endforeach; ?>
    
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
    
                <div class="caption-container">
                    <p id="caption"></p>
                </div>
    
                <div class="row">
                    <?php foreach ($newadimages as $index => $image): ?>
                        <div class="column">
                            <img class="demo cursor" src="<?php echo $image['src']; ?>" height="220" style="width:100%" onclick="currentSlide(<?php echo $index + 1; ?>)" alt="<?php echo $image['alt']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
    
            <script>
            let slideIndex = 1;
            showSlides(slideIndex);
    
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }
    
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }
    
            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("demo");
                let captionText = document.getElementById("caption");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                captionText.innerHTML = dots[slideIndex-1].alt;
            }
            </script>
            <?php
            return ob_get_clean();
        }
    
    








    private function executeQuery($query) {
       // echo "Constructed Query: $query";
        $results = $this->conn->query($query);
        $data = [];
    
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                $data[] = $row;
            }
        } else {
            echo "No results found";
        }
        $this->data = $data;
    
        echo "<h3>Table: {$this->tableName}</h3>";
        echo '<pre>';
        echo '</pre>';
    
        if (is_array($this->data)) {
            $totalRows = count($this->data);
            $maxItems = min($this->itemList, $totalRows);
    
            for ($j = 0; $j < $maxItems; $j++) {
                $row = $this->data[$j];
                foreach ($row as $column => $value) {
                    if ($column === 'longbob') {
                        $base64Image = base64_encode($value);
                        echo '<img src="data:image/jpeg;base64,' . $base64Image . '" alt="Supplier Image"><br>';
                    } else {
                        echo "$column: $value<br>";
                    }
                }
            }
        } else {
            echo "Data is not an array.";
        }
    }
    
    protected function item_description($description) {
        $this->description = $description !== null ? $description : '';
        echo '<form action="" method="POST">';
        echo '<select name="location" onchange="this.form.submit()">';
        echo '<option value="">' . htmlspecialchars($this->description) . '</option>';
        echo '</select>';
        echo '</form>';
    }
    
    protected function setpassword() {
        echo "POST Data:<br>";
        echo "Username: " . htmlspecialchars($this->username) . "<br>";
        echo "Password: " . htmlspecialchars($this->password) . "<br>";
    
        try {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            if ($this->conn->connect_error) {
                throw new Exception("Connection failed: " . $this->conn->connect_error);
            }
    
            $user = $this->conn->real_escape_string($this->username);
            $pass = $this->conn->real_escape_string($this->password);
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
            $stmt->bind_param("ss", $user, $pass);
            $stmt->execute();
            $result = $stmt->get_result();
    
            if ($result->num_rows > 0) {
                echo "Welcome to RMS! Please login or register today!";
            } else {
                echo "Invalid username or password.";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    protected function setusername($username) {
        $this->username = $username;
    }
    
    private function login() {
        // Print captured username and password for debugging
       // echo "Captured Username: " . htmlspecialchars($this->username, ENT_QUOTES, 'UTF-8') . "<br>";
      //  echo "Captured Password: " . htmlspecialchars($this->password, ENT_QUOTES, 'UTF-8') . "<br>";
        
        // Create connection
        $this->conn = new mysqli("localhost", $this->username, $this->password, "rmstwo");
        
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    
}    
?>

