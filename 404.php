<?php require_once 'functions.php'; http_response_code(404); layout_header('Страница не найдена'); ?>
<section class="not-found"><h1>404</h1><p>Запрашиваемая страница не найдена. Возможно, адрес был введен с ошибкой.</p><a class="btn" href="index.php">Вернуться на главную</a></section>
<?php layout_footer(); ?>