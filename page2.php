// Define the LocationHandler class with necessary properties
class LocationHandler {
    private $itemstring; // Added property definition
    private $itemVendor;
    private $transactionNumber;
    private $numberOfItems;
    private $stockStatus;
    private $usersearch;
    private $document_root;
    private $date;
    private $userSearch;
    private $itemList;
    private $find;
    private $itemsort;
    private $defaultspread;
    protected $locations;
    protected $compus;
    private $itemlist;
    public $content;
    private $discountCode;
    private $discountPercentage;
    private $searchArray;
    private $value;
    public $title = "Hardware and Remodeling";
    public $keywords = "We Know Hardware!";
    public $buttons = array(
        "Home" => "home.php",
        "Contact" => "contact.php",
        "Services" => "services.php",
        "Payment" => "Payment.php",
        "Edit/View Profile" => "EditViewProfile.php",
        "About" => "about.php"
    );

    public function __construct() {
        $this->document_root = $_SERVER['DOCUMENT_ROOT'];
        $this->date = date('H:i, jS F Y');
        $this->userSearch = new SearchHandler($this->usersearch);
        $this->itemList = new ItemListHandler(empty($_POST['itemlistphp']) ? 'a' : $_POST['itemlistphp']);
        $this->find = new FindHandler(!empty($_POST['find']) ? $_POST['find'] : 'a');
        $this->itemsort = new ItemSortHandler(!empty($_POST['itemsortphp']) ? $_POST['itemsortphp'] : 'a');
        $this->usersearch = isset($_POST['usersearch']) ? (string) $_POST['usersearch'] : null;
        $this->locations = array(
            "Search Results" => new SpreadInput($this->itemList, $this->userSearch, $this->find, $this->itemsort),
            "Home" => "home2.php",
            "Contact" => "contact.php",
            "Services" => "services.php",
            "Payment" => "Payment.php",
            "Edit/View Profile" => "EditViewProfile.php",
            "About" => "about.php"
        );
        $this->compus = "";
    }

    public function postLocation($index) {
        if (isset($this->locations[$index])) {
            $this->compus = $this->locations[$index];
        }
    }

    public function getCompus() {
        return empty($this->compus) ? "Home" : $this->compus;
    }

    public function renderDropdown() {
        echo '<select name="location" onchange="this.form.submit()">';
        foreach ($this->locations as $index => $location) {
            $selected = ($location === $this->compus) ? 'selected' : '';
            echo "<option value=\"$index\" $selected>$location</option>";
        }
        echo '</select>';
    }

    public function handleLocation() {
        echo "======= inside function handlelocation========";
        switch ($this->compus) {
            case 'Home':
                echo "You're at home!";
                break;
            case 'Payment':
                echo "Processing payment...";
                break;
            case 'Login':
                echo "User login page.";
                break;
            case 'Edit/View Profile':
                echo "Edit or view your profile here.";
                break;
            case 'Contact':
                echo "Get in touch with resources.";
                break;
            case 'Services':
                echo "Services we offer.";
                break;
            case 'About':
                echo "Learn more about us.";
                break;
            default:
                echo "Unknown location.";
                break;
        }
    }

    public function requireCurrentLocation() {
        $locationFile = strtolower(str_replace(' ', '_', $this->compus)) . '.php';
        if (file_exists($locationFile)) {
            require($locationFile);
        } else {
            echo "File for the current location does not exist.";
        }
    }
}

// Now, extend the LocationHandler in the Page class
class Page extends LocationHandler {
    // Define necessary properties
    public $itemlist;

    public function __construct($itemlist) {
        switch ($itemlist) {
            case 'a':
                $this->itemlist = 25;
                break;
            case 'b':
                $this->itemlist = 50;
                break;
            case 'c':
                $this->itemlist = 75;
                break;
            case 'd':
                $this->itemlist = 100;
                break;
            default:
                $this->itemlist = 0; // or some default value
                break;
        }
    }

    // Updated __set method with property existence check
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

    public function inputArray($item) {
        $items = array();
        $items[] = $item;
        for ($i = 0; $i < $this->itemlist; $i++) {
            if (!isset($items[$i])) {
                $items[$i] = "NULLitem Number " . $i;
                echo $items[$i] . "\n";
            }
        }
        return $items;
    }

    public function SearchEngine() {
        require('searchengine.php');
    }

    public function getButton($function = null) {
        switch ($function) {
            case 'Contact':
                return $this->buttons['Contact'];
            case 'Services':
                return $this->buttons['Services'];
            case 'About':
                return $this->buttons['About'];
            default:
                return $this->buttons['Home'];
        }  
    }
}
