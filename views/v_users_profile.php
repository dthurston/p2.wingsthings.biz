<h1>This is the profile of <?=$user->first_name?></h1>
<!--<img src="/uploads/avatars/thedude.jpg" alt="User Avatar" height="42" width="42"> -->

<ul class="thumbnails">
    <li class="span4">
        <a href="/uploads/avatars/thedude.jpg" class="thumbnail">
            <!-- <img data-src="holder.js/300x200" alt="//<?=$user->first_name?>"> -->
            <img src="/uploads/avatars/thedude.jpg" class="img-polaroid">
        </a>
    </li>
</ul>



<ul class="thumbnails">
    <li class="span4">
        <div class="thumbnail">
            <!--<img data-src="holder.js/300x200" alt="">-->
            <img data-src="/uploads/avatars/thedude.jpg" alt="<?=$user->first_name?>">
            <h3>Thumbnail label</h3>
            <p>Thumbnail caption...</p>
        </div>
    </li>
</ul>