<?php namespace ProcessWire; 

// Template file for pages using the “event-overview” template

?>

<article id="content" class="">
  <h2 class="text-center">Upcoming Seminars</h2>
  <div>
<?php
// Future Seminars
$page->children()->each(function($seminar) {

  // Featured Image
  $preview_image = false;
  if ($seminar->images->first()) {
    $preview_image = $seminar->images->first()->size(300, 200);
  }

  $date = str_replace(
  ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
  ['月', '火', '水', '木', '金', '土', '日'],
  $seminar->date
  );
  
  
  ?>
    <a href="<?=$seminar->url?>" class="" style="">
    <div class="">
      <?php if ($seminar->speaker_name) { echo $seminar->speaker_name; echo ": ";} ?><?=$seminar->title?>
    </div>
    <div class="">
      <?=$seminar->date?> JST
    </div>
<?php if ($preview_image): ?>
    <div>
      <img src="<?=$preview_image->url?>" />
    </div>
<?php endif; ?>
    <div>
      <?=$seminar->event_abstract?>
    </div>
    </a>
    
<?php
});
?>
  </div>
  <h2 class="text-center pb-5">Recent Seminars</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
<?php 
// Past Events
$page->children("date<today, sort=date")->each(function($seminar) {
  ?>
  <div class="box">
    
    <div class="leading-8 mb-2">
      <span class="text-ms bg-gray-200 rounded-full px-2 py-1"><?=$seminar->date?> JST</span>
    </div>
    
<?php if ($seminar->images->first()):
  $img = $seminar->images->first()->size(1000, 333);
?>
    <img src="<?=$img->url?>" class="w-full mb-3" />
<?php endif; ?>

 
    
    <h2>
      <a href="<?=$seminar->url?>">
      <?php if ($seminar->speaker_name) { echo $seminar->speaker_name; echo ": ";} ?><?=$seminar->title?>
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
      <a href="<?=$seminar->url?>" class="">
        <?=$seminar->event_abstract?>
      </a>
    </div>
    <!--</a>-->
  </div>
    
<?php
});
?>
  </div>
</article>
