<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<style>.u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 108px;
}
.u-header .u-image-1 {
  width: 60px;
  height: 64px;
  margin: 22px auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-image-2 {
  width: 362px;
  height: 64px;
  margin: -64px auto 22px 81px;
}
@media (max-width: 1199px) {
  .u-header .u-image-1 {
    width: 60px;
  }
  .u-header .u-image-2 {
    margin-left: 81px;
  }
}
@media (max-width: 575px) {
  .u-header .u-sheet-1 {
    min-height: 104px;
  }
  .u-header .u-image-2 {
    width: 340px;
    height: 60px;
    margin-left: 0;
  }
}</style>
