<?php
/**
 * Templates render the content of your pages.
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page.
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * This example templates only echos the field values from the content file and doesn't need any special logic from a controller.
 * Snippets like the header, footer and intro contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet('header') ?>

<main>
    <?php snippet('intro') ?>

  <div class="layout">

    <aside>
      <section>
        <h2>Resume</h2>
          <a href="<?= $page->slug() ?>/<?= $page->resume()->html() ?>" target="_blank">Download resumé</a>
      </section>
    </aside>

    <div class="text">
      <?= $page->text()->kt() ?>
    </div>

  </div>
</main>

<?php snippet('footer') ?>
