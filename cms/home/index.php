<?php 
    $pgName="Dashboard";

    include $_SERVER['DOCUMENT_ROOT'] . "/src/php/cms/header.php"; 
?>

<div class="section-toolbar">
    <form id="logout">
        <input type="submit" value="logout" class="hidden" id="logout-button">
        <label class="button blue" for="logout-button">Logout</label>
    </form>
</div>



<?php 
    include $_SERVER['DOCUMENT_ROOT'] . "/src/php/cms/footer.php"; 
?>