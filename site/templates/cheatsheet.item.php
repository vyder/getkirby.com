<?php snippet('header') ?>

  <main class="main" role="main">

    <?php if(!$page->call()->isEmpty()): ?>
    <h1 class="alpha"><?php echo $page->call()->html() ?></h1>
    <?php else: ?>
    <h1 class="alpha"><?php echo $page->title()->html() ?></h1>
    <?php endif ?>

    <p class="zeta subtitle margin-bottom"><?php echo $page->excerpt() ?></p>

    <section class="text col-4-6">

      <?php if(!$page->params()->isEmpty() or !$page->return()->isEmpty()): ?>
      <?php $params = $page->params()->yaml() ?>
      <?php $return = $page->return()->yaml() ?>
      <ul>
        <?php foreach($params as $param): ?>
        <li>
          <strong><?php echo $param['name'] ?></strong> (<?php echo $param['type'] ?>)<br />
          <em><?php echo $param['text'] ?></em>
        </li>
        <?php endforeach ?>
        <?php if(!empty($return)): ?>
        <li>
          <strong>return </strong> (<?php echo $return['type'] ?>)<br />
          <?php if(isset($return['text'])): ?>
          <em><?php echo $return['text'] ?></em>
          <?php endif ?>
        </li>
        <?php endif ?>
      </ul>
      <?php endif ?>


      <?php echo kirbytext($page->text()) ?>
      <?php if($page->image()): ?>
      <h2 class="beta">Result</h2>
      <figure>
        <?php foreach($page->images() as $image): ?>
        <img src="<?php echo $image->url() ?>" alt="Screenshot <?php echo $page->title() ?>">
        <?php endforeach ?>
      </figure>
      <?php endif ?>
    </section>

    <nav class="sidebar col-2-6 last">
      <?php $overview_page = page((string)kirby()->request()->path()->slice(0, -2)) ?>
      <ul>
        <li>
          <a href="<?php echo $overview_page->url() ?>">
            <small>&uarr;</small><?php echo $overview_page->title() ?> overview
          </a>
        </li>

        <?php if($prev = $page->prevVisible()): ?>
        <li><a href="<?php echo $prev->url() ?>"><small>&larr;</small> <?php echo html($prev->title()) ?></a></li>
        <?php endif ?>

        <?php if($next = $page->nextVisible()): ?>
        <li><a href="<?php echo $next->url() ?>"><small>&rarr;</small> <?php echo html($next->title()) ?></a></li>
        <?php endif ?>

        <li>
          <a href="<?php echo $overview_page->url() ?>#<?php echo $page->parent()->uid() ?>">
            <small>&darr;</small>Back to <?php echo $overview_page->title() ?> section
          </a>
        </li>
      </ul>
    </nav>

  </main>

<?php snippet('footer') ?>