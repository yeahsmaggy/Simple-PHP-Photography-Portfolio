<?php require('includes/header.php');?>
<div class="jumbotron">
  <div class="html_carousel">
    <div id="slideshow" >
      <?php
      $imgarray = array(
      array('path' => 'photo_category_foldername/file_name','alt' => 'alternative text'),
      );
      shuffle($imgarray);
      foreach($imgarray as $img) {
      if(isset($img['portrait']) && $img['portrait'] == true) {
      print $markup = '<div class="slide">
        <div class="col-xs-6" style="padding-left:0px;padding-right:10px;"><img src="/images/' . $img['path'][0] . '.jpg" alt="' . $img['alt'][0] . '" /></div>
        <div class="col-xs-6" style="padding-right:0px;padding-left:10px;"><img src="/images/' . $img['path'][1] . '.jpg" alt="' . $img['alt'][1] . '"/></div>
        <div class="caption">
          <h4></h4>
          <p></p>
        </div>
      </div>';
      } else {
      print $markup = '<div class="slide">
        <img src="/images/' . $img['path'] . '.jpg" alt="' . $img['alt'] . '" />
        <div class="caption">
          <h4></h4>
          <p></p>
        </div>
      </div>';
      }
      }
      ?>
    </div>
  </div>
</div>
</div>
<?php require('includes/footer.php');?>