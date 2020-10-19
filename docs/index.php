<?php
    $title = 'Dokumentation';
    require '../_init.php';
    include_once '../includes/docs/nav.php';
?>
<?php
    Markdown::i()->setMarkupEscaped(true);
    echo Markdown::i()->text('_hello_
    ```
<head>
    <title>Page Title </title>
</head>
    ```');
?>
<?php
    include_once '../includes/docs/footer.php';
?>
