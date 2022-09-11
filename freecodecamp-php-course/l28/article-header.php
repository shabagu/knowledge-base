<!-- Варианты использования переменной без присвоения ей значения -->
<h3><?php if (!empty($title)) echo $title; ?></h3>
<h4><?php if (isset($author)) echo $author; ?></h4>
<?php /** @var string $wordCount */ # PHPDoc comment ?>
word count: <?php echo $wordCount; ?>
<hr>
