<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, viewport-fit=cover" />
    <title><?= TITLE; ?></title>
    <link rel="shortcut icon" href="<?= path('/images/favicon.png'); ?>" />
    <link href="<?= path(['STYLES', 'default.css']); ?>" rel="stylesheet" />
    <script async src="https://googletagmanager.com/gtag/js?id=UA-133296967-1"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-133296967-1');</script>
  </head>
  <body>
    <section>
      <header></header>
      <aside>
        <figure></figure>
      </aside>
      <article>
        <?= CONTENT; ?>
      </article>
      <footer>
        <?php if(defined('FOOTER')) { ?>
          <?= FOOTER; ?>
        <?php } ?>
      </footer>
    </section>
  </body>
</html>