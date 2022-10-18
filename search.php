<?php include("header.php"); ?>

<h2> SEARCH RESULT DETAILS </h2>

<div class="container">

    <?php

        if(isset($_POST['search-button'])){

            $search = mysqli_real_escape_string($connection, $_POST['search']);
            $search_query_post = "SELECT * FROM search WHERE search_title LIKE '%$search%' OR search_content LIKE '%$search%' OR search_author LIKE '%$search%' OR search_date LIKE '%$search%' ";

            $search_result = mysqli_query($connection, $search_query_post);

            if(!$search_result){
                die('failed'.mysqli_error($connection)); 
            }
            $db_results = mysqli_num_rows($search_result);

            if($db_results > 0){

                while($row = mysqli_fetch_assoc($search_result)){
                    echo"
                           
                        <div class='cont-box'>
                            <h4>".$row['search_title']."</h4>
                            <p>".$row['search_content']."</p>
                            <p>".$row['search_date']."</p>
                            <p>".$row['search_author']."</p>
                        </div

                    ";
                }

            }else{

                echo "<h1>There Are No Records Matching Your Search!</h1>";

            }


        }

    ?>

</div>