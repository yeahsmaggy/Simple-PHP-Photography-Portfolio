<?php require('includes/header.php');?>
<div class="jumbotron">
</div>
<div class="row">
  <div class="col-md-3">
    <h2>Title</h2>
    <p>Content</p>
  </div>
  <div class="col-md-9">
    <div id="tabs" style="margin-top:60px;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
      <div class="col-md-3"><ul class="craft-video-menu ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
        <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Bike Frame Shop</a></li>
        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Design Workshop</a></li>
        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false"><a href="#tabs-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">Carpenter</a></li>
      </ul>
    </div>
    <div id="tabs-1" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
      <div class="video-container"><iframe width="560" height="315" src="//www.youtube.com/embed/NAm_v_7nQDo" frameborder="0" allowfullscreen=""></iframe></div>
    </div>
    <div id="tabs-2" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
      Other Tabbed content
    </div>
    <div id="tabs-3" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
      Other Tabbed content
    </div>
  </div>
</div>
</div>
<?php require('includes/footer.php');?>