<?php include("header.php"); ?>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Search Form</a>
                <form class="d-flex" role="search" method="POST" action="search.php">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="search-button">Search</button>
                </form>
            </div>
        </nav>
        <div class="container">

            <?php

                $query = "SELECT * FROM search ";
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