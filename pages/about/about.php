<?php





function ssBranch_about_page()
{


  if (!current_user_can('manage_options')) {
    return;
  }


  ?>
  <!-- Our admin page content should all be inside .wrap -->
  <div class="wrap">
    <!-- Print the page title -->
    <h1> <?php echo __( 'About', 'branchLang' ) ?> </h1>
    <div style="background: #fff;
    border: 1px solid #c3c4c7;
    border-left-width: 4px;
    box-shadow: 0 1px 1px rgb(0 0 0 / 4%);
    margin: 5px 5px 2px;
    padding: 1px 12px;">



      <strong><?php echo __( 'Info', 'branchLang' ) ?></strong>
<p><?php echo __( 'About', 'branchLang' ) ?> </p>

    </div>

  </div>




          <?php




}
