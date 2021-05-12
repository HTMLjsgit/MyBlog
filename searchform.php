<form method="get" class="searchform" action="<?php echo esc_url( home_url('/') ); ?>">
    <div>
        <?php if(isset($_GET['s'])): ?>
            <input type="search" placeholder="検索する" name="s" class="searchfield" value="<?php echo $_GET['s']; ?>" />
        <?php else: ?>
            <input type="search" placeholder="検索する" name="s" class="searchfield" value="" />
        <?php endif; ?>
        <input type="submit" value="検索" alt="検索" title="検索" id="searchsubmit">
    </div>
</form>