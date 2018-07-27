<div class="link--back-wrap">
    <?php
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    echo '<a href="'.$url.'" class="link--back"><span></span> back</a>'; 
    ?>
</div>