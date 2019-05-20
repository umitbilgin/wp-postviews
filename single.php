<?php
// Bu kodu single.php içinde okunma sayısını göstermek istediğiniz yere ekleyin.
// Add these lines to your single.php file where you want to display view count.

PostViews('set',get_the_ID());
echo PostViews('get',get_the_ID());

?>
