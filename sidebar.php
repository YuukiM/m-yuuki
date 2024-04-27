<nav id="sidebar" class="sidebar">
    <div id="sidebarNavi">
        <?php
          if ( function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-1') ) :
          else :
        ?>
        <?php endif; ?>
    </div>
</nav>
