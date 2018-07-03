<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// contractors array
    $contractors_arr = array();
    $contractors_arr["records"] = array();

            $data = ContractorImpl::listContractors();

            foreach( $data as $row ) {

                extract($row);


   /*         echo "<tr>";
            echo "<th>".$row['id']."</th>";
            echo "<th>".$row['name']."</th>";
            echo "<th>".$row['address']."</th>";
            echo "<th>".$row['phone']."</th>";
            echo "<th>".$row['email']."</th>";
            echo "<th>".$row['rate']."</th>";
            echo "<th>".$row['users_id']."</th>";

            echo "</tr>";
    */

            $contractor=array(
            "id" => $id,
            "name" => $name,
            "address" => html_entity_decode($address),
            "phone" => $phone,
            "email" => $email,
            "rate" => $rate,
            "users_id" => $users_id
        );

        array_push($contractors_arr["records"], $contractor);

            }

        echo json_encode($contractors_arr);

    ?>
