<div id="widgetcontainer">
  <div class="tabs"><span id="tab1"><a id="element1" style="cursor: pointer;" onmousedown="showPanel2();">
  <!--              -->
  <!-- Left Tab Name-->
  <!--              -->
  <?php 
  // If you are on a page, echo the page tab title, if on the blog echo the blog's
  echo htmlspecialchars(get_option(((is_page())?'page':'blog').'-tab-title')) 
  ?>
  </a></span><span id="tab2"><a id="element2" style="cursor: pointer;" onmousedown="showPanel1();">
  Information
  </a></span></div>

  <div class="panel" id="panel2">
  <!-- Begin Left Tab Content -->
  <!--                         -->
    <div class="widgetcontentarea">
    <?php   /* Widgetized sidebar, if you have the plugin installed. */
      if(is_page()==true){
        dynamic_sidebar(1);
      }else{
        dynamic_sidebar(2);
      }
    ?>
      <br clear="all" />
    </div>
  </div>

  <div class="panel" id="panel1">
    <div class="widgetcontentarea">
      <div class="widgetelement" style="border: 0px">
      <?php echo htmlspecialchars(get_option('information-text')) ?>
      </div>
      <br clear="all" />
    </div>
  </div>

  <div id="more"></div>

</div>




