<?php include("header.php"); ?>


        <div class="container">

            <h4 class="mb-4">Post data</h4>
            <?php

                $title = mysqli_real_escape_string($connection, $_GET['title']);
                $date = mysqli_real_escape_string($connection, $_GET['date']);

                $query = "SELECT * FROM search WHERE search_title= '$title' AND search_date = '$date'";
                $search_query = mysqli_query($connection, $query);
                $query_results = mysqli_num_rows($search_query);

                if($query_results > 0){

                    while($row = mysqli_fetch_assoc($search_query)){

                        echo"
                           
                            <div class='cont-box'>
                                <h4>".$row['search_title']."</h4>
                                <p>".$row['search_content']."</p>
                                <p>".$row['search_date']."</p>
                                <p>".$row['search_author']."</p>
                            </div

                        ";

                    }

                }

            ?>
        
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>