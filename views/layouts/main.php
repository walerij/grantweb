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

            /*'
             <div class="col-lg-4 col-sm-3 col-md-6">
                    <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
            '*/
            '<li>
                 '
            . Html::beginForm(['/site/logout'], 'post').
                '<div class="col-md-4 col-lg-4 input-group">'
            . Html::textInput('searchField' , '', [
                    'placeholder'=>'Поиск по сайту',
                'class' =>'form-control'


            ])
                .'<div class="input-group-btn">'
            . Html::submitButton(
                'Поиск',
                ['class' => 'btn btn-default']
            ).
              '</div>
                 </div>'
            . Html::endForm()
            . '</li>'

        ],
    ]);
    NavBar::end();
    ?>

    <div class="container" style="height: 220px;">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                1

            </div>
            <div class="col-md-8 col-lg-8">
                <div class="row">
                    <div class="col-md-3 col-lg-3"></div>
                    <div class="col-md-5 col-lg-5"></div>
                    <div class="col-md-4 col-lg-4">Кнопки</div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <i class="glyphicon glyphicon-earphone glyph_top"></i>
                        909-919
                    </div>
                    <div class="col-md-5 col-lg-5">
                        <i class="glyphicon glyphicon-map-marker glyph_top"></i>
                        г. Хабаровск, ул. Краснореченская, 189
                    </div>
                    <div class="col-md-4 col-lg-4">
                      <i class="glyphicon glyphicon-envelope glyph_top"></i>
                        yk_grand@mail.ru
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <i class="glyphicon glyphicon-earphone glyph_top"></i>
                        909-929
                    </div>
                    <div class="col-md-5 col-lg-5">
                        <i class="glyphicon glyphicon-map-marker glyph_top"></i>
                        г. Хабаровск, пер. Засыпной, 14
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <i class="glyphicon glyphicon-envelope glyph_top"></i>
                        grand-khv@mail.ru
                    </div>
                </div>

            </div>
        </div>

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
            /*Yii::$app->user->isGuest ? (
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
            )*/

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
