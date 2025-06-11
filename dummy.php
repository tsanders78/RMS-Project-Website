<?php
 
 class Employee  {
     private $employeeId;
     private $name;
     private $salary;
     private $department;
 
     public function __construct($name, $employeeId) {
         $this->name = $name;
         $this->employeeId = $employeeId;
         $this->salary = 0.0;
         $this->department = "";
     }
 
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
 
     public function __construct($departmentName, $employeeName, $employeeId) {
         parent::__construct($employeeName, $employeeId);
         $this->departmentName = $departmentName;
     }
 
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
 
 class FormGenerator  extends Department {
     // Method to generate the HTML form
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





     function generateRMSHardwareSite() {
        $html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>RMS HardWare Site</title>
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
            <link rel="stylesheet" href="style.css"/>
        </head>
        <body>
            <div id="main">
                <div id="header1">
                   <img src="images/logo.gif" alt="TLA logo" height="70" width="70" /> 
                   <h1>RMS+ Remodeling Management Services Plus!</h1>
                </div>
                <div id="social">
                    <a href="https://www.facebook.com">
                        <img src="images/facebook.jpg" alt="facebook">
                    </a>
                    <a href="https://www.x.com">
                        <img src="images/x.jpg" alt="x/twitter">
                    </a>
                    <a href="https://www.linkedin.com">
                        <img src="images/linkedin.jpg" alt="linkedin">
                    </a>
                    <a href="https://www.snapchat.com">
                       <img src="images/2018_social_media_popular_app_logo_snapchat-512.webp" alt="snapchat">
                    </a>
                </div>
            </div>
        </body>
        </html>';
        return $html;
    }
    



 }
 
 
  
class LocationHandler extends FormGenerator {
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
    protected $locations;
    protected $locationFile;
    protected $table_name; // Define the property
    protected $compus;
    protected $itemlist;
    public $content;
    protected $itemList;
    protected $discountCode;
    protected $discountPercentage;
    protected $searchArray;
    protected $value;
    protected $database_data = [];
protected $data = [];

    protected $servername = "localhost";
    protected  $username = "root";
    protected $password = "Frankhank22!";
    protected $dbname = "rmstwo";
     

   protected $conn;
 


// Define tables and their key columns
// protected $tables = [
//     'store' => ['StoreID', 'StoreName', 'ZipCode', 'Location', 'ContactInfo', 'Description'],
//     'employee' => ['EmployeeID', 'EmployeeName', 'Position', 'Email', 'PhoneNumber', 'StoreID', 'Description'],
//     'product' => ['ProductID', 'ProductName', 'Description', 'Price', 'QuantityInStock'],
//     'storeproduct' => ['StoreID', 'ProductID', 'QuantityInStock', 'ZipCode', 'Description'],
//     'supplier' => ['SupplierID', 'SupplierName', 'ContactInfo', 'Description'],
//     'storesupplier' => ['StoreID', 'SupplierID', 'Description'],
//     'customer' => ['CustomerID', 'CustomerName', 'Email', 'PhoneNumber', 'Description', 'isdiy'],
//     'orders' => ['ORDERID', 'OrderDate', 'CustomerID', 'EmployeeID', 'Description'],
//     'orderdetail' => ['ORDERID', 'ProductID', 'Quantity', 'PRICE'],
// ];




protected $tables = [
    'store' => [
        'columns' => ['StoreID', 'StoreName', 'ZipCode', 'Location', 'ContactInfo', 'Description'],
        'greet' => 'Hello, welcome to the store table!'
    ],
    'employee' => [
        'columns' => ['EmployeeID', 'EmployeeName', 'Position', 'Email', 'PhoneNumber', 'StoreID', 'Description'],
        'greet' => 'Hello, welcome to the employee table!'
    ],
    'product' => [
        'columns' => ['ProductID', 'ProductName', 'Description', 'Price', 'QuantityInStock'],
        'greet' => 'Hello, welcome to the product table!'
    ],
    'storeproduct' => [
        'columns' => ['StoreID', 'ProductID', 'QuantityInStock', 'ZipCode', 'Description'],
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
    ],
    'orders' => [
        'columns' => ['ORDERID', 'OrderDate', 'CustomerID', 'EmployeeID', 'Description'],
        'greet' => 'Hello, welcome to the orders table!'
    ],
    'orderdetail' => [
        'columns' => ['ORDERID', 'ProductID', 'Quantity', 'PRICE'],
        'greet' => 'Hello, welcome to the order detail table!'
    ],
];



protected $compusTables = [
    'Home' => ['storeproduct'],
    'Contact' => ['employee', 'supplier', 'storesupplier', 'customer'],
    'Services' => ['supplier', 'storeproduct'],
    'Payment' => ['orderdetail'],
    'Edit/View Profile' => ['orders'],
    'About' => ['store', 'employee', 'product', 'storeproduct', 'supplier', 'storesupplier', 'customer'],
];







   
    public $title = "Hardware and Remodeling";
    public $keywords = "We Know Hardware!";
    // public $buttons = array(
    //     "Home" => "home.php",
    //     "Contact" => "contact.php",
    //     "Services" => "services.php",
    //     "Payment" => "Payment.php",
    //     "Edit/View Profile" => "EditViewProfile.php",
    //     "About" => "about.php"
    // );

    public function __construct() {


     // Create connection
      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
     

        
        $this->document_root = $_SERVER['DOCUMENT_ROOT'];
        $this->date = date('H:i, jS F Y');
        $this->itemlist = empty($_POST['itemlistphp']) ? 'a' : $_POST['itemlistphp'];
        $this->find = !empty($_POST['find']) ? $_POST['find'] : 'a';
        $this->itemsort = !empty($_POST['itemsortphp']) ? $_POST['itemsortphp'] : 'a';
        $this->usersearch = isset($_POST['usersearch']) ? (string) $_POST['usersearch'] : null;
        // Check connection
  if ($this->conn->connect_error) {
    die("Connection failed: " . $this->conn->connect_error);
}

                $this->locations = array(
                    "Home" => "home.php",
                    "Contact" => "contact.php",
                    "Services" => "services.php",
                    "Payment" => "Payment.php",
                    "Edit/View Profile" => "EditViewProfile.php",
                    "About" => "about.php"
                );
                $this->compus = "Home"; // Default to Home
            
        

        
        
        $this->compus = isset($_POST['location']) ? $_POST['location'] : "Home"; // Default to Home

        $this->renderDropdown();
        $this->handleLocation();
        $this->requireCurrentLocation();
            }



// Function to fetch data and store in array
function fetchTableData($conn, $table_name) {
    if ($table_name !== 'greet') {
        $sql = "SELECT * FROM $table_name";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $this->data[] = $row;
            }
        }
        return $this->data;
    } else {
        return []; // Return an empty array if the table name is 'greet'
    }
}




public function loadData() {
    foreach ($this->tables as $table_name => $keys) {
        $this->database_data[$table_name] = $this->fetchTableData($this->conn, $table_name);
    }
}



public function postLocation($index) {
    // Ensure $index is a valid key
    if (is_string($index) || is_int($index)) {
        if (isset($this->locations[$index])) {
            $this->compus = $index;
        }
        echo "Selected Location: " . $this->compus;
    } else {
        echo "Invalid key type for locations array.";
    }
}


    public function getCompus() {
        echo "Current Location: " . $this->compus;
        return empty($this->compus) ? "Home" : $this->compus;
    }

    public function renderDropdown() {
        echo '<form action="" method="POST">';
        echo '<select name="location" onchange="this.form.submit()">';
        foreach ($this->locations as $index => $location) {
            $selected = ($index === $this->compus) ? 'selected' : '';
            echo "<option value=\"$index\" $selected>$index</option>";
        }
        echo '</select>';
        echo '</form>';
    }
  








    protected function rendersortOrderForm($locationFile) {
        $this->locationFile = $locationFile;
            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
            echo '<head>';
            echo '<meta charset="UTF-8">';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
            echo '<title>Order Form</title>';
            echo '</head>';
            echo '<body>';
            echo '<form action="" method="post">';
            echo '<table style="border: 0px;">';
            echo '<tr>';
            echo '<td>';
            echo '<select name="itemSortphp">';
            echo '<option value="a">Price Low-High</option>';
            echo '<option value="b">Price High-Low</option>';
            echo '<option value="c">Whats Hot!</option>';
            echo '<option value="d">Newest Arrivals</option>';
            echo '</select>';
            echo '</td>';
            echo '<td colspan="2" style="text-align: center;"><input type="submit" value="Search" /></td>';
            echo '</tr>';
            echo '</table>';
            echo '</form>';
            echo '</body>';
            echo '</html>';
        }










    protected function renderlistOrderForm() {

        echo '<!DOCTYPE html>';
            echo '<html lang="en">';
            echo '<head>';
            echo '<meta charset="UTF-8">';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
            echo '<title>Order Form</title>';
            echo '</head>';
            echo '<body>';
            echo '<form action="" method="post">';
            echo '<table style="border: 0px;">';
            echo '<tr>';
            echo '<td>';
            echo '<select name="itemlistphp">';
            echo '<option value="a">Price 25</option>';
            echo '<option value="b">Price 50</option>';
            echo '<option value="c">Whats 75</option>';
            echo '<option value="d">100</option>';
            echo '</select>';
            echo '</td>';
            echo '<td colspan="2" style="text-align: center;"><input type="submit" value="Search" /></td>';
            echo '</tr>';
            echo '</table>';
            echo '</form>';
            echo '</body>';
            echo '</html>';
        }
    

    public function loadLocation() {
        if (file_exists($this->locations[$this->compus])) {
            require_once $this->locations[$this->compus];
        } else {
            echo "The requested page does not exist.";
        }
    }



















   
    
     public function handleLocation() {

        foreach ($this->compusTables as $compus => $this->tables) {
            if ($this->compus === $compus) {
                return in_array($this->table_name, $this->tables);
            }
        }
    
        return false;
    }
    public function meetandgreet(){
    // Example of assigning echo statements to strings and adding greetings
    foreach ($this->tables as $this->table_name => $this->table_data) {
        $this->columns = implode(", ", $table_data['columns']);
        $this->greet = $this->table_data['greet'];
        $this->output = "Table: $this->table_name\nColumns: $this->columns\n$this->greet";
        echo $this->output . "\n";
    }
    





    }












    // public function handleLocation() {
    //     echo "Current Location: " . $this->compus; // Echo the current selected location
    //     echo "<br>======= inside function handleLocation ========<br>";
    //     switch($this->compus) {
    //         case 'home.php':
    //             echo "You're at home!";
    //             break;
    //         case 'Payment.php':
    //             echo "Processing payment...";
    //             break;
    //         case 'Login.php':
    //             echo "User login page.";
    //             break;
    //         case 'EditViewProfile.php':
    //             echo "Edit or view your profile here.";
    //             break;
    //         case 'contact.php':
    //             echo "Get in touch with resources.";
    //             break;
    //         case 'services.php':
    //             echo "Services we offer.";
    //             break;
    //         case 'about.php':
    //             echo "Learn more about us.";
    //             break;
    //         default:
    //             echo "Unknown location.";
    //             break;
    //     }
    // }

    public function requireCurrentLocation() {
        $this->locationFile = strtolower(str_replace(' ', '_', $this->compus)) . '.php';
        if (file_exists($this->locationFile)) {
            require_once($this->locationFile);
        } else {
            echo "File for the current location does not exist.";
        }
    }
}


class page extends LocationHandler {
    public function __set($name, $value) {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        } else {
            trigger_error("Cannot set undefined property: $name", E_USER_NOTICE);
        }
    }

    public function Display() {
        echo "Inside Display method"; // Debugging statement
        echo "<br><br>";
        $this->DisplayTitle();
        $this->DisplayKeywords();
        $this->DisplayStyles();
        echo "<br><br>";
        $this->DisplayHeader();
        $this->DisplayMenu($this->buttons);
        echo "<br>";
        echo "====== under display menu=======";
        echo "<br><br>";
        echo $this->content;
        echo "<br><br>";
    }

    public function DisplayTitle() {
        echo "<title>".$this->title."</title>";
    }

    public function DisplayKeywords() {
        echo "<meta name='keywords' content='".$this->keywords."' />";
    }

    public function DisplayStyles() {
        echo '<link href="styles.css" type="text/css" rel="stylesheet">';
    }

    public function DisplayHeader() {
        echo '<!-- page header --> <header> <img src="logo.gif" alt="TLA logo" height="70" width="70" /> <h1>RMS+ Remodeling Management Services Plus!</h1> </header>';
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
            <a href="'.$url.'">
            <img src="s-logo.gif" alt="" height="20" width="20" />
            <span class="menutext">'.$name.'</span>
            </a>
            </div>';
        } else {
            echo '<div class="menuitem">
            <img src="side-logo.gif">
            <span class="menutext">'.$name.'</span>
            </div>';
        }
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
    //  $this->find = $find;
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
    //  $this->itemsort = $itemsort;
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
        parent::__construct($usersearch, $itemstring, $itemVendor, $transactionNumber, $numberOfItems, $stockStatus, $discountCode, $discountPercentage, $itemlist, $find, $itemsort);

        $this->searchArray = $usersearch ? explode(' ', $usersearch) : [];
        $this->inputArray($this->searchArray);
        
        $this->validateItemList($itemlist);
        
        $this->loadData();

        foreach ($this->tables as $table_name => $keys) {
            $database_data[$table_name] = $this->fetchTableData($this->conn, $table_name);
        }

        echo "<!DOCTYPE html>
        <html>
        <head>
            <title>RMS Database</title>
            <style>
                .details { display: none; }
            </style>
            <script>
                function toggleDetails(rowId) {
                    var details = document.getElementById(rowId);
                    if (details) {
                        if (details.style.display === 'none') {
                            details.style.display = 'block';
                        } else {
                            details.style.display = 'none';
                        }
                    }
                }
            </script>
        </head>
        <body>";

        $this->generateHTMLContent();

        echo "</body></html>";
        $this->conn->close();

        $this->renderlistOrderForm();
            require('land.php');
        require('footer.php');
    }

    function inputArray($searchArray) {
        if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_GET['location'])) {
            $location = isset($_POST['location']) ? $_POST['location'] : (isset($_GET['location']) ? $_GET['location'] : null);
    
            if ($location !== null && (is_string($location) || is_int($location))) {
                $this->postLocation($location);
            } else {
                echo "Invalid location type.";
            }
    
            if (isset($_POST['usersearch'])) {
                $this->setUserSearch($_POST['usersearch']);
            }
    
            if (isset($_POST['find'])) {
                $this->setFind($_POST['find'] ?: 'a');
            }
    
            if (isset($_POST['itemlistphp'])) {
                $this->validateItemList($_POST['itemlistphp'] ?: 'a');
            }
    
            if (isset($_POST['itemSortphp'])) {
                $this->setItemSort($_POST['itemSortphp'] ?: 'a');
            }
        }
    
        $this->handleLocation();
        
        require_once('advertise.php');
       $this->rendersortOrderForm($this->locationFile);
                require_once('searchengine.php');
    
        echo "These items contain:<br>";
        foreach ($this->locations as $renlocation) {
            echo "These items contain:<br>";
            echo $this->itemList;
    
            if ($renlocation === $this->compus) {
                echo $renlocation . "<br>";
                foreach ($searchArray as $index => $item) {
                    echo $item ?? "NULL item Number " . $index . "<br>";
                }
                return $searchArray;
            }
        }
    }
    
    function generateHTMLContent() {
        echo "Current compus: " . $this->compus . "<br>";
        echo "================================================================================";

        $tableNames = array_keys($this->tables);
        $itemListLength = strlen($this->itemList);

        for ($i = 0; $i < $itemListLength; $i++) {
            $table_name = $tableNames[$i % count($tableNames)];
            $keys = $this->tables[$table_name];

            if ($this->shouldDisplayTable($table_name)) {
                $data = $this->fetchTableData($this->conn, $table_name);

                echo "<h2>$table_name</h2>";
                foreach ($data as $index => $row) {
                    foreach ($row as $column => $value) {
                        echo "$column: $value<br>";
                    }
                    $this->item_description($row['Description']);
                    echo "<div class='details' id='$table_name-$index' style='display:none;'>";
                    foreach ($row as $column => $value) {
                        echo "$column: $value<br>";
                    }
                    echo "</div><br>";
                }
            }
        }
    }

    function shouldDisplayTable($table_name) {
        foreach ($this->tables as $table_name => $keys) {
 
            if (($this->compus === 'Home' && $table_name === 'storeproduct') || 
                ($this->compus === 'Contact' && in_array($table_name, ['employee', 'supplier', 'storesupplier', 'customer'])) ||
                ($this->compus === 'Services' && in_array($table_name, ['supplier', 'storeproduct'])) ||
                ($this->compus === 'Payment' && $table_name === 'orderdetail') ||
                ($this->compus === 'Edit/View Profile' && $table_name === 'orders') ||
                ($this->compus === 'About' && !in_array($table_name, ['orders', 'orderdetail']))) {
                    echo " ================================================================================================================";
        
                echo "Matching condition for compus: " . $this->compus . " and table: " . $table_name . "<br>";
                echo " ================================================================================================================";
        
                $data = $this->fetchTableData($this->conn,$table_name);
                echo " ================================================================================================================";
        
                echo "<h2>$table_name</h2>";
                echo " ================================================================================================================";
                foreach ($data as $index => $row) {
                    foreach ($row as $column => $value) {
                        echo "$column: $value<br>";
                    }
                    item_description($row['Description']);
                    echo "<div class='details' id='$table_name-$index' style='display:none;'>";
                    foreach ($row as $column => $value) {
                        echo "$column: $value<br>";
                    }
                    echo "</div><br>";
                }
            }
            //  else {
            //     echo " ================================================================================================================";
        
            //     echo "No matching condition for compus: " . $this->compus . " and table: " . $table_name . "<br>";
        
            //     $data = $this->fetchTableData($this->conn, $table_name);
            //     echo "<h2>$table_name</h2>";
            //     foreach ($data as $index => $row) {
            //         foreach ($keys as $key) {
            //             echo "$key: " . $row[$key] . "<br>";
            //         }
            //         item_description($row['Description']);
            //         echo "<div class='details' id='$table_name-$index' style='display:none;'>";
            //         foreach ($row as $column => $value) {
            //             echo "$column: $value<br>";
            //         }
            //         echo "</div><br>";
            //     }
            // }
        }
    }

    function item_description($description) {
        echo '<form action="" method="POST">';
        echo '<select name="location" style="width: 21ch;" onchange="this.form.submit()">';
        echo '<option value="">' . "click for description" . htmlspecialchars($description) . '</option>';
        echo '</select>';
        echo '</form>';
    }
}

?>