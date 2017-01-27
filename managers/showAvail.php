 <?php
        $dbuser = "kamal12";
        $dbpass = "";
        $dbhost = "localhost";
        $dbname = "an";
        $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
        //this code should return only json data, not html
        if($_POST["submit"] == "sunday"){
            $query = "SELECT * FROM availability WHERE availDay = 1";
            $result = $connection -> query($query) ;
            //--create an array to store response
            //$response = array();
            //---create an array to store data
            //$data = array();
             if($result-> num_rows > 0){
                 
                    //this table will cause the ajax request to fail since it's 
                    //expecting json in return
                   // echo "<table border='1'>
                   // <tr>
                    //<th>Available ID</th>
                    //<th>Available Day</th>
                   // <th>available From</th>
                   // <th>Available Till</th>
                   // <th>Recurring Till</th>
                    //<th>Emplouee ID</th>
                    //</tr>";
                   
                 
                 while($row = $result->fetch_assoc()){
                     //add result to $data
                     //array_push($data,$row);
                     echo "<td width=120px>" . $row['availID'] . "</td>";
                     echo "<td width=120px>" . $row['availDay'] . "</td>";
                     echo "<td width=120px>" . $row['availFrom'] . "</td>";
                     echo "<td width=120px>" . $row['availTill'] . "</td>";
                     echo "<td width=120px>" . $row['recurringTill'] . "</td>";
                     echo "<td width=120px>" . $row['empID'] . "</td>";
                     echo "</tr>";
                 }
                 echo "</table>";
                 //--add data into response and indicate success
                 //$response["success"] = true;
                 //$response["data"] = $data;
                 //---cannot convert $result (query result) into json
                 echo json_encode($result);
                 //---return the $response array instead
                 //echo json_encode($response);
            }
            else{
                //if an error, return an error in json
                //$response["success"] = false;
                //echo json_encode($response);
                //do not echo anything other than json, it will invalidate the response
                echo "Something went wrong";
            }
            
            
        }
        ?>
        