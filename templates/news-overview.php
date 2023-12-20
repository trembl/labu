<?php namespace ProcessWire; 

// Template file for pages using the “news-overview” template

?>

<article id="content" class="">
  <h1 class="text-5xl font-semibold">
    <?php echo $page->title; ?>
  </h1>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
<?php 
// Get News
// TODO: Pagination
$page->children()->each(function($event) {
  ?>
  <div class="box">
    <div class="leading-8 mb-2">
      <span class="text-ms bg-gray-200 rounded-full px-2 py-1"><?=$event->event_date?> JST</span>
    </div>
    
<?php if ($event->images->first()):
  $img = $event->images->first()->size(1000, 333);
?>
    <img src="<?=$img->url?>" class="w-full mb-3" />
<?php endif; ?>

 
    
    <h2>
      <a href="<?=$event->url?>">
      <?php if ($event->speaker_name) { echo $event->speaker_name; echo ": ";} ?><?=$event->title?>
      </a>
    </h2>
    <div class="leading-8 my-2">
      <a class="text-ms bg-green-500 hover:bg-green-600 active:bg-green-700 text-white rounded-full ml-1 px-2 py-1" href="">BioClub&nbsp;Tokyo</a>
      <a 
        class="text-ms bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white rounded-full ml-1 px-2 py-1"    
        href="https://zoom.bioclub.tokyo"
      >Zoom</a>
      <a 
        class="text-ms bg-red-500 hover:bg-red-600 active:bg-red-700 text-white rounded-full ml-1 px-2 py-1"    
        href="https://zoom.bioclub.tokyo"
      >Lecture</a>
<a 
        class="text-ms bg-red-500 hover:bg-red-600 active:bg-red-700 text-white rounded-full ml-1 px-2 py-1"    
        href="https://zoom.bioclub.tokyo"
      >Workshop</a>

    </div>
    <div>
      <a href="<?=$event->url?>" class="">
        <?=$event->event_abstract?>
      </a>
    </div>
    <!--</a>-->
  </div>
    
<?php
});
?>
  </div>
</article>
