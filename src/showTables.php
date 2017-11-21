
<?php
function showAllLocations()
{
    $dbhost = 'knknieman.cnarzda1cahm.us-west-2.rds.amazonaws.com';
    $dbuser = 'knknieman69';
    $dbName = 'furniture_store';
    $dbpass = 'Todayis1234';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbName, 3306);

    $query = "select * from locations";
    $result = $conn->query($query);
    echo "Locations";

    echo '<table class="table table-striped table-bordered table-hover">';
    echo "<tr><th>Location_id</th><th>Address_line1</th><th>Address_line2</th><th>City</th><th>State</th><th>Zipcode<th><tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>";
        echo $row['location_id'] . "    ";
        echo "</td><td>";
        echo $row['address_line1'] . "    ";
        echo "</td><td>";
        echo $row['address_line2'] . "    ";
        echo "</td><td>";
        echo $row['address_city'] . "    ";
        echo "</td><td>";
        echo $row['address_state'] . "    ";
        echo "</td><td>";
        echo $row['address_zipcode'] . "    ";
        echo "</td></tr>";
    }
    echo "</table>";

    mysql_close($conn);
}
function showAllStores()
{
    $dbhost = 'knknieman.cnarzda1cahm.us-west-2.rds.amazonaws.com';
    $dbuser = 'knknieman69';
    $dbName = 'furniture_store';
    $dbpass = 'Todayis1234';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbName, 3306);

    $query = "select * from stores Natural join locations";
    $result = $conn->query($query);
    echo "Stores";

    echo '<table class="table table-striped table-bordered table-hover">';
    echo "<tr><th>Location_id</th><th>Address_line1</th><th>Address_line2</th><th>City</th><th>State</th><th>Zipcode</th><th>Manager_id</th><th>Phone_number</th><th>Hours<th><tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>";
        echo $row['location_id'] . "    ";
        echo "</td><td>";
        echo $row['address_line1'] . "    ";
        echo "</td><td>";
        echo $row['address_line2'] . "    ";
        echo "</td><td>";
        echo $row['address_city'] . "    ";
        echo "</td><td>";
        echo $row['address_state'] . "    ";
        echo "</td><td>";
        echo $row['address_zipcode'] . "    ";
        echo "</td><td>";
        echo $row['manager_id'] . "    ";
        echo "</td><td>";
        echo $row['phone_number'] . "    ";
        echo "</td><td>";
        echo $row['hours'] . "    ";
        echo "</td></tr>";
    }
    echo "</table>";

    mysql_close($conn);
}
function showAllWarehouses()
{
    $dbhost = 'knknieman.cnarzda1cahm.us-west-2.rds.amazonaws.com';
    $dbuser = 'knknieman69';
    $dbName = 'furniture_store';
    $dbpass = 'Todayis1234';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbName, 3306);

    $query = "select * from warehouses Natural join locations";
    $result = $conn->query($query);
    echo "Stores";

    echo '<table class="table table-striped table-bordered table-hover">';
    echo "<tr><th>Location_id</th><th>Address_line1</th><th>Address_line2</th><th>City</th><th>State</th><th>Zipcode</th><th>Manager_id</th><th>Square_footage<th><tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>";
        echo $row['location_id'] . "    ";
        echo "</td><td>";
        echo $row['address_line1'] . "    ";
        echo "</td><td>";
        echo $row['address_line2'] . "    ";
        echo "</td><td>";
        echo $row['address_city'] . "    ";
        echo "</td><td>";
        echo $row['address_state'] . "    ";
        echo "</td><td>";
        echo $row['address_zipcode'] . "    ";
        echo "</td><td>";
        echo $row['manager_id'] . "    ";
        echo "</td><td>";
        echo $row['square_footage'] . "    ";
        echo "</td></tr>";
    }
    echo "</table>";

    mysql_close($conn);
}
function showAllEmployees()
{
    $dbhost = 'knknieman.cnarzda1cahm.us-west-2.rds.amazonaws.com';
    $dbuser = 'knknieman69';
    $dbName = 'furniture_store';
    $dbpass = 'Todayis1234';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbName, 3306);

    $query = "select * from employees";
    $result = $conn->query($query);
    echo "Stores";

    echo '<table class="table table-striped table-bordered table-hover">';
    echo "<tr><th>Employee_id</th><th>location_id</th><th>ssn</th><th>home_address_line1</th><th>home_address_line2</th><th>City</th><th>State</th><th>zipcode</th>
                    <th>phone_number</th><th>Email<th><tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>";
        echo $row['employee_id'] . "    ";
        echo "</td><td>";
        echo $row['location_id'] . "  ";
        echo "</td><td>";
        echo $row['ssn'] . "    ";
        echo "</td><td>";
        echo $row['home_address_line1'] . "    ";
        echo "</td><td>";
        echo $row['home_address_line2'] . "    ";
        echo "</td><td>";
        echo $row['home_address_city'] . "    ";
        echo "</td><td>";
        echo $row['home_address_state'] . "    ";
        echo "</td><td>";
        echo $row['home_address_zipcode'] . "    ";
        echo "</td><td>";
        echo $row['phone_number'] . "    ";
        echo "</td><td>";
        echo $row['email'] . "    ";

        echo "</td></tr>";
    }
    echo "</table>";

    mysql_close($conn);
}
function showAllManagers()
{
    $dbhost = 'knknieman.cnarzda1cahm.us-west-2.rds.amazonaws.com';
    $dbuser = 'knknieman69';
    $dbName = 'furniture_store';
    $dbpass = 'Todayis1234';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbName, 3306);

    $query = "select * from employees Natural JOIN managers";
    $result = $conn->query($query);
    echo "Stores";

    echo '<table class="table table-striped table-bordered table-hover">';

    echo "<tr><th>Employee_id</th><th>location_id   </th><th>Rank   </th><th>ssn  </th><th>home_address_line1   </th><th>home_address_line2 </th><th>City</th><th>State</th><th>zipcode</th>
                    <th>phone_number</th><th>Email<th><tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>";
        echo $row['employee_id'] . "    ";
        echo "</td><td>";
        echo $row['location_id'] . "  ";
        echo "</td><td>";
        echo $row['rank'] . "  ";
        echo "</td><td>";
        echo $row['ssn'] . "    ";
        echo "</td><td>";
        echo $row['home_address_line1'] . "    ";
        echo "</td><td>";
        echo $row['home_address_line2'] . "    ";
        echo "</td><td>";
        echo $row['home_address_city'] . "    ";
        echo "</td><td>";
        echo $row['home_address_state'] . "    ";
        echo "</td><td>";
        echo $row['home_address_zipcode'] . "    ";
        echo "</td><td>";
        echo $row['phone_number'] . "    ";
        echo "</td><td>";
        echo $row['email'] . "    ";

        echo "</td></tr>";
    }
    echo "</table>";

    mysql_close($conn);
}

function showAllStaff()
{
    $dbhost = 'knknieman.cnarzda1cahm.us-west-2.rds.amazonaws.com';
    $dbuser = 'knknieman69';
    $dbName = 'furniture_store';
    $dbpass = 'Todayis1234';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbName, 3306);

    $query = "select * from employees Natural JOIN staff";
    $result = $conn->query($query);
    echo "Stores";

    echo '<table class="table table-striped table-bordered table-hover">';

    echo "<tr><th>Employee_id</th><th>location_id   </th><th>Position   </th><th>Managed by </th><th>ssn  </th><th>home_address_line1   </th><th>home_address_line2 </th><th>City</th><th>State</th><th>zipcode</th>
                    <th>phone_number</th><th>Email<th><tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>";
        echo $row['employee_id'] . "    ";
        echo "</td><td>";
        echo $row['location_id'] . "  ";
        echo "</td><td>";
        echo $row['position'] . "  ";
        echo "</td><td>";
        echo $row['manager_id'] . "    ";
        echo "</td><td>";
        echo $row['ssn'] . "    ";
        echo "</td><td>";
        echo $row['home_address_line1'] . "    ";
        echo "</td><td>";
        echo $row['home_address_line2'] . "    ";
        echo "</td><td>";
        echo $row['home_address_city'] . "    ";
        echo "</td><td>";
        echo $row['home_address_state'] . "    ";
        echo "</td><td>";
        echo $row['home_address_zipcode'] . "    ";
        echo "</td><td>";
        echo $row['phone_number'] . "    ";
        echo "</td><td>";
        echo $row['email'] . "    ";

        echo "</td></tr>";
    }
    echo "</table>";

    mysql_close($conn);
}

function showAllCustomers()
{
    $dbhost = 'knknieman.cnarzda1cahm.us-west-2.rds.amazonaws.com';
    $dbuser = 'knknieman69';
    $dbName = 'furniture_store';
    $dbpass = 'Todayis1234';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbName, 3306);

    $query = "select * from customers";
    $result = $conn->query($query);
    echo "Stores";

    echo '<table class="table table-striped table-bordered table-hover">';

    echo "<tr><th>Customer_Id</th><th>first_name   </th><th>mid_initial </th><th>last_name </th><th>home_address_line1 </th><th>home_address_line2  </th><th>home_address_city </th><th>State</th><th>Zipcode</th><th>
                    phone_number</th><th>Email<th><tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>";
        echo $row['customer_id'] . "    ";
        echo "</td><td>";
        echo $row['first_name'] . "  ";
        echo "</td><td>";
        echo $row['mid_initial'] . "  ";
        echo "</td><td>";
        echo $row['last_name'] . "    ";
        echo "</td><td>";
        echo $row['home_address_line1'] . "    ";
        echo "</td><td>";
        echo $row['home_address_line'] . "    ";
        echo "</td><td>";
        echo $row['home_address_city'] . "    ";
        echo "</td><td>";
        echo $row['home_address_state'] . "    ";
        echo "</td><td>";
        echo $row['home_address_zipcode'] . "    ";
        echo "</td><td>";
        echo $row['phone_number'] . "    ";
        echo "</td><td>";
        echo $row['email'] . "    ";

        echo "</td></tr>";
    }
    echo "</table>";

    mysql_close($conn);
}
function showAllItems()
{
    $dbhost = 'knknieman.cnarzda1cahm.us-west-2.rds.amazonaws.com';
    $dbuser = 'knknieman69';
    $dbName = 'furniture_store';
    $dbpass = 'Todayis1234';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbName, 3306);

    $query = "select * from inventory_items";
    $result = $conn->query($query);
    echo "inventory_items";

    echo '<table class="table table-striped table-bordered table-hover">';

    echo "<tr><th>item_id</th><th>location_id   </th><th>box_length </th><th>box_width </th><th>box_height </th><th>item_length </th><th>item_width </th><th>item_height</th><th>item_description</th><th>
                    brand </th><th>model_number</th><th>price<th><tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>";
        echo $row['item_id'] . "    ";
        echo "</td><td>";
        echo $row['location_id'] . "  ";
        echo "</td><td>";
        echo $row['box_length'] . "  ";
        echo "</td><td>";
        echo $row['box_width'] . "    ";
        echo "</td><td>";
        echo $row['box_height'] . "    ";
        echo "</td><td>";
        echo $row['item_length'] . "    ";
        echo "</td><td>";
        echo $row['item_width'] . "    ";
        echo "</td><td>";
        echo $row['item_height'] . "    ";
        echo "</td><td>";
        echo $row['item_description'] . "    ";
        echo "</td><td>";
        echo $row['brand'] . "    ";
        echo "</td><td>";
        echo $row['model_number'] . "    ";
        echo "</td><td>";
        echo $row['price'] . "    ";
        echo "</td></tr>";
    }
    echo "</table>";

    mysql_close($conn);
}

showAllItems();
?>