<?php require_once 'functions.php'; require_once 'data/articles.php'; layout_header('Уход за изделиями'); ?>
<h1>Уход за кожаными изделиями</h1><p>Правильный уход продлевает срок службы сумок, ремней и аксессуаров. Ниже приведены статьи раздела.</p><div class="cards"><?php foreach($articles as $a){ if($a['category']==='Уход') article_card($a); } ?></div>
<?php layout_footer(); ?>