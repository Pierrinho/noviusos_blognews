<div class="blognews_post blognews_post_item">
    <div class="blognews_primary_information">
        <?= \View::forge('noviusos_blognews::front/post/thumbnail', array('item' => $item)) ?>
        <?= \View::forge('noviusos_blognews::front/post/title', array('item' => $item)) ?>
        <?= \View::forge('noviusos_blognews::front/post/summary', array('item' => $item)) ?>
    </div>
    <div class="blognews_secondary_information">
        <?= \View::forge('noviusos_blognews::front/post/author', array('item' => $item)) ?>
        <?= \View::forge('noviusos_blognews::front/post/publication_date', array('item' => $item)) ?>
        <?= \View::forge('noviusos_blognews::front/post/categories', array('item' => $item)) ?>
        <?= \View::forge('noviusos_blognews::front/post/tags', array('item' => $item)) ?>
        <?= \View::forge('noviusos_blognews::front/comment/nb', array('item' => $item)) ?>
    </div>
</div>
