<?php
    include '../php/connections/connection.php';

    $sql = 'SELECT ID, CLASS_RESULT FROM results';
    $results = mysqli_query($conn, $sql);
?>
<div class="d-flex justify-content-center w-100" style="background-color: rgb(233, 233, 233);">
    <div class="navwid">
        <h2 class="font-weight-bold my-3">RESULTS</h2>
        <div class="w-100 py-4">
            <ul>
                <?php
                    while($class =  mysqli_fetch_assoc($results)){
                ?>
                    <li id="classresult">
                        <?php echo $class["CLASS_RESULT"]; $class["ID"]?>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</div>