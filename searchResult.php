    <?php 
    require('partials/_head.php')
    ?>
<body data-spy="scroll" data-target="#myScrollspy">
    <?php 
        require('partials/_tagManager.php')
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
  <br><br><br><br><br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
      <div>Search our site</div>
       <br><br>
      
      <form action="searchResult.php" id="cse-search-box"><span class="sr-only">Search form</span>
          <input type="hidden" name="cx" value="012891757999132843964:scgl5oupulo" />
          <input type="hidden" name="ie" value="UTF-8" />
          <input type="text" name="q" size="15" placeholder="Find Stuff" title="Search Field" class="search"/><br>
          <input type="submit" class="btn btn-p1" name="sa" value="Search" />
      </form>
<div class="lato-light">
      <script>
  (function() {
    var cx = '012891757999132843964:scgl5oupulo';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>
    </div>
    </div></div>
     <br><br>
</div>
</main>
    <?php
        require('partials/_footer.php')
    ?>
    <?php
        require('partials/_scripts.php')
    ?>

</body>
</html>
