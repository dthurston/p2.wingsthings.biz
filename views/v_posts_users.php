<?php foreach($users as $user): ?>

    <!-- Print this user's name -->
    <?=$user['first_name']?> <?=$user['last_name']?>

    <!-- If there exists a connection with this user, show a unfollow link -->
    <?php if(isset($connections[$user['user_id']])): ?>
        <!-- <a class="btn btn-primary" href='/posts/unfollow/ //<?=$user['user_id']?>'>Unfollow</a> -->
        <a href='/posts/unfollow/<?=$user['user_id']?>'><button class="btn btn-primary" type="button">Unfollow</button></a>
        <!-- Otherwise, show the follow link -->
    <?php else: ?>
        <!-- <a class="btn btn-success" href='/posts/follow/ //<?=$user['user_id']?>'>Follow</a> -->
        <a href='/posts/follow/<?=$user['user_id']?>'><button class="btn btn-success" type="button">Follow</button></a>
    <?php endif; ?>
    <br><br>

<?php endforeach; ?>