</main>
<?php
function auto_copyright($year = 'auto'){
    if(intval($year) == 'auto'){ $year = date('Y'); }
    if(intval($year) == date('Y')){ echo intval($year); }
    if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
    if(intval($year) > date('Y')){ echo date('Y'); }
}
?>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="container">
        <footer class="py-3 my-4">
            <!--<ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="https://starvalcity.de/forum" target="_blank" class="nav-link px-2 text-muted">Forum</a></li>
                <li class="nav-item"><a href="karte.php" class="nav-link px-2 text-muted">Karte</a></li>
                <li class="nav-item"><a href="voiceserver.php" class="nav-link px-2 text-muted">Voice Server</a></li>
                <li class="nav-item"><a href="voten.php" class="nav-link px-2 text-muted">Voten</a></li>
            </ul>-->
            <p class="text-center text-muted">&copy; <?php auto_copyright(2022); ?> StarvalCity, All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>
