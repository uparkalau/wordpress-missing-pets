<?php
/**
 * The main template file.
 *
 * @package Missing_Pets_Directory
 */

get_header();
?>

<div id="primary" class="content-area container">
    <main id="main" class="site-main">
        <!-- Search form -->
        <div class="d-flex justify-content-center align-items-center vh-40">
            <div class="form-group w-50 position-relative">
                <input type="text" class="form-control form-control-lg" id="search" placeholder="Search by name, age, animal">
                <i class="fa fa-search position-absolute" style="right: 20px; top: 50%; transform: translateY(-50%);"></i>
            </div>
        </div>        

        <!-- Titles for the fields -->
        <div class="row bg-light text-dark p-2">
            <div class="col-md-4"><h5>Pet Name</h5></div>
            <div class="col-md-4"><h5>Animal</h5></div>
            <div class="col-md-4"><h5>Age</h5></div>
        </div>
        <!-- Summary of pets -->
        <div id="summary" class="card">
            <div class="card-title">Summary</div>
            <div class="card-text"></div>
        </div>
        <!-- List of pets -->
        <div id="pets-container">
            <!-- Pet cards will go here -->
        </div>


    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
