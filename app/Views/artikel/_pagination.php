<?php if ($pager): ?>
<nav>
    <ul class="pagination">
    <?php if ($pager): ?>
  <nav>
    <?= $pager->links('default', 'default_full') ?>
  </nav>
<?php endif; ?>

    </ul>
</nav>
<?php endif; ?>
