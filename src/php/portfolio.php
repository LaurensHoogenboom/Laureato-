<?php 
    $db = new mysqli('localhost', 'root', '', 'laureato') or die(mysqli_error($conn));

    if ($_POST) {
        $action = $_POST['action'];

        if ($action == 'add') {
            $id = uniqid();
            $title = $_POST['title'];
            $date = $_POST['date'];
            $type = $_POST['type'];

            $db->query("INSERT INTO portfolioitems (id, title, submitDate, type) VALUES ('$id', '$title', '$date', '$type')") 
                    or die($db->error);
        }

        if ($action == 'get') {
            $result = $db->query("SELECT * FROM portfolioitems");

            $portfolioItems = array();

            while ($row = $result->fetch_assoc()) {
                $portfolioItems[] = $row;
            }

            header('Content-Type: application/json');
            echo json_encode($portfolioItems, JSON_PRETTY_PRINT);
        }
    }
?>