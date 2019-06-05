<?php

require '../DBO/Connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btAction']) && ($_POST['btAction'] == "Register")) {
        $con = connect();
        $sql = "INSERT INTO exc2_user(name,birthday,registerDay) VALUES (?,?,?)";
        $name = trim($_POST['txtName']);
        $date = $_POST['txtDate'];
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $regDate = date("Y-m-d H:i:s");
        if (empty($name)) {
            echo json_encode(['status' => "400", 'msg' => "Empty Name"]);
            die();
        }
        if (empty($date)) {
//            echo "$name";
            echo json_encode(['status' => "400", 'msg' => "Empty Date $name"]);
            die();
        }
        $stm = $con->prepare($sql);
        $stm->bind_param("sss", $name, $date, $regDate)or die("Cannot Assign Statement");
        $stm->execute();
        echo json_encode(['status' => "200", 'msg' => "Successfully added user $name"]);
        $stm->close();
        die();
    }
    if (isset($_POST['btAction']) && ($_POST['btAction'] == "Show Result")) {
        $con = connect();
        $rdButton = $_POST['rdSort'];
        $sql = "SELECT * FROM exc2_user ORDER BY birthday ASC";
        if (isset($rdButton) && ($rdButton == "sort by registered day")) {
            $sql = "SELECT * FROM exc2_user ORDER BY registerDay ASC";
        }
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            ?>            
            <table border="1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Birthday</th>
                        <th>Registered Time</th>
                    </tr>
                </thead>
                <tbody>                
                    <?php

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['birthday'] . "</td>
                            <td>" . $row['registerDay'] . "</td>                            
                        </tr>";
                    }
                    echo '</tbody></table>';
                }
                die();
            };
        }