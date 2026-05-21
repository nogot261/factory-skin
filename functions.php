<?php
function current_page(){ return basename($_SERVER['PHP_SELF']); }
function page_title($title){ return htmlspecialchars($title) . ' | Мастерская кожаных изделий «Матвеева»'; }
function is_active($file){ return current_page()===$file ? ' class="active"' : ''; }
function layout_header($title){
    if (session_status() === PHP_SESSION_NONE) session_start();
    $user = $_SESSION['user'] ?? null;
    echo '<!doctype html><html lang="ru"><head><meta charset="utf-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '<title>'.page_title($title).'</title>';
    echo '<link rel="stylesheet" href="assets/css/styles.css">';
    echo '</head><body><a class="skip-link" href="#content">Перейти к содержанию</a>';
    echo '<header class="site-header"><div class="topbar">';
    echo '<div><strong>Мастерская «Матвеева»</strong><span>Производство изделий из натуральной и экокожи</span></div>';
    echo '<button id="accessToggle" class="access-btn" type="button">Версия для слабовидящих</button></div>';
    echo '<nav class="main-nav" aria-label="Главное меню">';
    $items = [
        'index.php'=>'Главная','about.php'=>'О компании','catalog.php'=>'Каталог','production.php'=>'Производство',
        'care.php'=>'Уход за кожей','news.php'=>'Новости','contacts.php'=>'Контакты','sitemap.php'=>'Карта сайта'
    ];
    foreach($items as $file=>$label){ echo '<a'.is_active($file).' href="'.$file.'">'.$label.'</a>'; }
    echo '<form class="search-form" action="search.php" method="get"><input type="search" name="q" placeholder="Поиск" aria-label="Поиск по сайту"><button>Найти</button></form>';
    echo $user ? '<a href="admin.php">Кабинет</a><a href="login.php?logout=1">Выход</a>' : '<a href="login.php">Вход</a>';
    echo '</nav></header><main id="content" class="container">';
}
function layout_footer(){
    echo '</main><footer class="site-footer"><p>© 2025 Мастерская кожаных изделий «Матвеева». Учебный проект без использования CMS.</p>';
    echo '<p>Тел.: +7 (000) 000-00-00 · email: info@matveeva-leather.example</p></footer>';
    echo '<script src="assets/js/main.js"></script></body></html>';
}
function article_card($a){
    echo '<article class="card"><h3>'.htmlspecialchars($a['title']).'</h3><p class="muted">'.htmlspecialchars($a['category']).' · '.htmlspecialchars($a['date']).'</p><p>'.htmlspecialchars($a['text']).'</p></article>';
}
function require_role($roles){
    if (session_status() === PHP_SESSION_NONE) session_start();
    $role = $_SESSION['user']['role'] ?? null;
    if(!$role || !in_array($role, $roles)){ header('Location: login.php'); exit; }
}
?>
