<!-- File: templates/Articles/view.php -->
<h1><?= h($yorda->title) ?></h1>
<p><?= h($yorda->body) ?></p>
<p><small>Created: <?= $yorda->created->format(DATE_RFC850) ?></small></p>
