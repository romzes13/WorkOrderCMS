<p>List of all workorders submitted by the company.</p>

        <table>
        <caption>List of company's workorders</caption>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Estimate</th>
                <th>Location</th>
                <th>Received</th>
                <th>Scheduled   </th>
                <th>Compleated</th>
                <th>Location_id</th>
            </tr>
  <?php
            $companyId = "";
            $company = CompanyImpl::findCompanyByUserId($_SESSION['id']);

            foreach( $company as $row ) {
                $companyId = $row['id'];

            }


            $data = WorkorderImpl::listWorkorderByCompany($companyId);

            foreach( $data as $row ) {

            echo "<tr>";
            echo "<th>".$row['id']."</th>";
            echo "<th>".$row['description']."</th>";
            echo "<th>".$row['estimate']."</th>";
            echo "<th>".$row['location']."</th>";
            echo "<th>".$row['received']."</th>";
            echo "<th>".$row['scheduled']."</th>";
            echo "<th>".$row['compleated']."</th>";
            echo "<th>".$row['location_id']."</th>";
            }

        echo "</table>";
    ?>
