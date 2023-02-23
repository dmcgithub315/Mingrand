<?php
session_start();
if(isset($_POST['post'])){
    if(isset($_POST['title'])){
        $title = $_POST['title'];
    }
    if(isset($_POST['type'])){
        $type = $_POST['type'];
    }
    if(isset($_POST['garages'])){
        $garages = $_POST['garages'];
    }
    if(isset($_POST['purpose'])){
        $purpose = $_POST['purpose'];
    }
    if(isset($_POST['bedrooms'])){
        $bedrooms = $_POST['bedrooms'];
    }
    if(isset($_POST['bathrooms'])){
        $bathrooms = $_POST['bathrooms'];
    }
    if(isset($_POST['kitchen'])){
        $kitchen = $_POST['kitchen'];
    }
    if(isset($_POST['livingroom'])){
        $livingroom = $_POST['livingroom'];
    }
    if(isset($_POST['location'])){
        $location = $_POST['location'];
    }
    if(isset($_POST['locationdetail'])){
        $locationdetail = $_POST['locationdetail'];
    }
    if(isset($_POST['floor'])){
        $floor = $_POST['floor'];
    } else {
        $floor = 0;
    }
    if(isset($_POST['floors'])){
        $floors = $_POST['floors'];
    }
    if(isset($_POST['area'])){
        $area = $_POST['area'];
    }
    if(isset($_POST['price'])){
        $price = $_POST['price'];
    }
    if(isset($_POST['orienten'])){
        $orienten = $_POST['orienten'];
    }
    if(isset($_POST['length'])){
        $length = $_POST['length'];
    }
    if(isset($_POST['width'])){
        $width = $_POST['width'];
    }
    if(isset($_POST['height'])){
        $height = $_POST['height'];
    }
    if(isset($_POST['yearbuild'])){
        $yearbuild = $_POST['yearbuild'];
    }
    if(isset($_POST['description'])){
        $description = $_POST['description'];
    }
    if(isset($_POST['image'])){
        $image = $_POST['image'];
    }
   
    // covert textarea to array 
    
    $input = isset($_POST['album'])? trim($_POST['album']) :"";
    // var_dump($input) ;
    $album = explode("\n", str_replace("\r", "", $input));
    
    // encoce array to string to save into database
    if(isset($album)){
        $album = json_encode($album, true);
    }

    if(isset($_POST['estatelocation'])){
        $estatelocation = json_encode($_POST['estatelocation'], true);
    }
    if(isset($_POST['floorplan'])){
        $floorplan = json_encode($_POST['floorplan'], true);
    }
    if(isset($_POST['introvideo'])){
        $introvideo = json_encode($_POST['introvideo'], true);
    }
    if(isset($_POST['equipment'])){
        $equipment = json_encode($_POST['equipment'], true);
    }

    if(!empty($_POST['amenities'])) {
        $amenitieslist = array();
        foreach($_POST['amenities'] as $value){
            array_push($amenitieslist, $value);
        }
        $amenities = json_encode($amenitieslist, true);
    }

    // check input null
    if(empty($_POST['title']) || empty($_POST['location']) || empty($_POST['locationdetail']) || empty($_POST['area']) || empty($_POST['image']) || empty($_POST['yearbuild'])){
        echo "Please input fully! <a href='javascript: history.go(-1)'>Go Back</a>";
        exit;
    }
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y/m/d', time());
    include('connect.php');
    $sqlQuery = "INSERT INTO house(image, album, title, location, locationdetail, price, bedrooms, bathrooms, kitchen, livingroom, garages, area, sold, 
    ownerId, purpose, description, descriptiondetail, type, timepost, yearbuild, amenities, equipment, orienten, length, width, height, floors, floor) 
    VALUES('{$image}', '{$album}', '{$title}', '{$location}', '{$locationdetail}', '{$price}', '{$bedrooms}', '{$bathrooms}', '{$kitchen}', '{$livingroom}', 
    '{$garages}', '{$area}', '0', '{$_SESSION['userid']}', '{$purpose}', '{$description}', '{$description}', '{$type}', '{$date}', '{$yearbuild}', 
    '{$amenities}', '{$equipment}', '{$orienten}', '{$length}', '{$width}', '{$height}', '{$floors}', '{$floor}')";
    
    if ($conn->query($sqlQuery) === TRUE) {
        echo "Add House Successfully. <a href='index.php'>Go Home</a>";
      } else {
        echo "Error: " . $sqlQuery . "<br>" . $conn->error;
      }
      
      $conn->close();
}
?>