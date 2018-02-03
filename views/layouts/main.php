<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php
    NavBar::begin([
        /*'brandLabel' => 'Гранд',
        'brandUrl' => Yii::$app->homeUrl,*/
        'options' => [
            'class' => 'navbar-default navbar-fixed-top navTopSearch',
        ],
    ]);  echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [

        ],
    ]);
    NavBar::end();
    ?>

    <div class="container" style="height: 220px;">

    </div>

    <?php
    NavBar::begin([
        /**'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,*/
        'options' => [
            'class' => 'navbar-default navTopmenu',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-leat'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'О нас', 'url' => ['/site/about']],
            ['label' => 'Новости', 'url' => ['/site/about1']],
            ['label' => 'Дома', 'url' => ['/site/about2']],
            ['label' => 'Другие обслуживаемые мкд', 'url' => ['/site/about3']],
            ['label' => 'Отчетность', 'url' => ['/site/about4']],
            ['label' => 'Информация', 'url' => ['/site/about5']],
            ['label' => 'Отзывы', 'url' => ['/site/about6']],


            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Кабинет', 'url' => ['/site/about8']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
