    <?php 
    require('partials/_head.php')
    ?>
<body data-spy="scroll" data-target="#myScrollspy">
    
    <?php 
        include_once('partials/_tagManager.php')
    ?>

    <div class="container-fluid">    
        <?php 
            require('partials/_nav.php')
        ?>
    </div>
        <?php 
            require_once('partials/_mailer.php')
        ?>

<main class="main-content">
    <?php 
        require('partials/_pitch.php')
    ?>
    
    <br><br>
    <?php
        require('partials/_program.php')
    ?>
    <br><br><br>
    <?php
        require('partials/_benefits.php')
    ?>
    <br>
    <?php
        require('partials/_about.php')
    ?>
     <br><br>
     <?php include_once('partials/_social.php') ?>
</main>
    <?php
        require('partials/_footer.php')
    ?>
    <?php
        require('partials/_scripts.php')
    ?>

</body>
</html>