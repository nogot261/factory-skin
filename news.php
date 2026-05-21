<?php require_once 'functions.php'; require_once 'data/articles.php'; layout_header('Новости и статьи'); ?>
<h1>Новости и статьи</h1><p>Раздел содержит материалы по трем категориям: материалы, производство и уход. В каждом разделе размещено не менее пяти статей.</p><div class="cards"><?php foreach($articles as $a) article_card($a); ?></div>
<?php layout_footer(); ?>