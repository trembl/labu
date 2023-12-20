<?php namespace ProcessWire; 

// Template file for pages using the “news” template

?>

<article id="content">
<?php if ($page->speaker_name): ?>
  <div class="">
    <?=$page->speaker_name?>:
  </div>
<?php endif; ?>
<?php if ($page->title): ?>
  <div class="">
    <?=$page->title?>
  </div>
<?php endif; ?>
  <div class="">
    <?=$page->event_date?> JST
  </div>
<?php
  if ($page->images->first()):
    $featured_image = $page->images->first();
?>
  <div class="">
    <img src="<?=$featured_image->url?>" />
    <figcaption class=""><?=$featured_image->description?></figcaption>
  </div>
<?php endif; ?>
  <div class="">
<?php echo $page->content; ?>
  </div>

</article>
