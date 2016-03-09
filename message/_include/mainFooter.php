<div class="mainFooter clearfix">
  <?php if($__cN > 1){ ?>
  <a class="btnPrev" href="./<?php echo sprintf('%03d', $__cN-1); ?>.php#_bn" title="#<?php echo $__cN-1; ?>" >
    <span>前へ</span>
  </a>
  <?php } ?>
  <a class="btnBacknumber" href="javascript:void(0)" title="バックナンバー" onClick="backnumberOpen('<?php echo $__cN; ?>')" >
    <span>バックナンバー</span>
  </a>
  <?php if($__cN < $__total){ ?>
  <?php if(($__cN+1 == $__total)){ ?>
  <a class="btnNext" href="./#_bn" title="#<?php echo $__cN-1; ?>" >
  <?php } else { ?>
  <a class="btnNext" href="./<?php echo sprintf('%03d', $__cN+1); ?>.php#_bn" title="#<?php echo $__cN-1; ?>" >
  <?php } ?>
    <span>次へ</span>
  </a>
  <?php } ?>
</div><!-- /mainFooter -->
