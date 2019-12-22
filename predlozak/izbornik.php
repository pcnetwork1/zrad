<!-- Početak izbornik -->
<div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
<button class="menu-icon" type="button" data-toggle></button>
<div class="title-bar-title"><?=$nazivAPP?></div>
</div>

<div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
<div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
    <li class="menu-text show-for-large"><?php echo $nazivAPP ?></li>
    <li><a href="index.php">Početna</a></li>
    <li>
    
        <a href="#">Zadaci</a>
        <ul class="menu vertical">
            <li><a href="zadatak1.php">Zadatak 1</a></li>
            <li><a href="zadatak2.php">Zadatak 2</a></li>  
            <li><a href="zadatak3.php">Zadatak 3</a></li>  
            <li><a href="zadatak4.php">Zadatak 4</a></li>       

        </ul>
        </li>

        <li>
        <a href="#">Test</a>
        <ul class="menu vertical">
            <li><a href="zadatak1_1.php">Zadatak 1.1</a></li>       

        </ul>
        
    </li>
    </ul>
</div>
</div>
<!-- Kraj izbornik -->