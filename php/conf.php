<?php 

/*

CONNECTION TO DATABASE 

*/
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=food", $username, $password);


/*

INSERT INTO DATABASE 

*/
if ( isset( $_POST['send'] ) && ! empty( $_POST['name'] ) && ! empty( $_POST['type'] ) && ! empty( $_POST['price'] ) && ! empty( $_POST['size'] ) ) {
    
    $data = [
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
        'size' => $_POST['size'],
    ];
    $sql = "INSERT INTO food (name, type, price, size) VALUES (:name, :type, :price, :size)";
    $stmt= $conn->prepare($sql);
    $stmt->execute($data);

    echo "poslane";
} 




/*

SORTING STUFF

*/

/* SORTING BY name, price etc.. */
if ( isset($_POST['type_sort']) ) {
    $_SESSION['field'] = 'type';
} else if ( isset($_POST['price_sort']) ) {
    $_SESSION['field'] = 'price';
} else if ( isset($_POST['size_sort']) ) {
    $_SESSION['field'] = 'size';
} else if ( empty($_SESSION['field']) ) {
    $_SESSION['field'] = 'id';
}

/* SORTING BY ASC/DESC */
if ( isset($_POST['ASC']) ) {
    $_SESSION['order'] = 'asc';
} else if ( isset($_POST['DESC']) ) {
    $_SESSION['order'] = 'desc';
} else if ( empty($_SESSION['order']) ) {
    $_SESSION['order'] = 'asc';
}
$field = $_SESSION['field'];
$ordertype = $_SESSION['order'];




/* STYLING CSS BUTTONS WITH GIVEN VALUE name, price etc.. */
switch ( $field ) {
    case 'type':
        $press1 = 'press';
        break;
    case 'price':
        $press2 = 'press';
        break;
    case 'size':
        $press3 = 'press';
        break;
}
/* STYLING CSS BUTTONS WITH GIVEN VALUE ASC/DESC */
switch ( $ordertype ) {
    case 'asc':
        $sort1 = 'sorting';
        break;
    case 'desc':
        $sort2 = 'sorting';
        break;
}
/*

PAGE SYSTEM

*/
$limit = 3;


if (isset($_POST['next'])) {
    $_SESSION['page'] += 1;
} else if (isset($_POST['prev']) && $_SESSION['page'] > 1) {
    $_SESSION['page'] -= 1;
} else if (empty($_POST['page'])) {
    $_SESSION['page'] = 1;
}
$page = $_SESSION['page'];
echo $page;

$offset = ( $page - 1 ) * $limit; 
        
/* SELECTING DATA FROM DATABASE WITH SORTING STUFF & PAGE SYSTEM */
$select = $conn->query("SELECT * FROM food ORDER BY $field $ordertype LIMIT $limit OFFSET $offset");
