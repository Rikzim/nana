<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
        <div class="panel content">
                <h2 class="text-center title">Login</h2>
                <?= $this->Form->create(); ?>
                    <?= $this->Form->control('email'); ?>
                    <?= $this->Form->control('password'); ?>
                    <?= $this->Form->submit('login'); ?>
                <?= $this->Form->end(); ?>
        </div>
    </div>
</body>
</html>