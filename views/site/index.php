<?php

/** @var yii\web\View $this */
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Selamat Datang</h1>

        <p class="lead">SISTEM SEKOLAH SMA 1 JAGAKARSA</p>

        <p><a class="btn btn-lg btn-success" href="<?= Url::to(['site/login']) ?>">SIGN-IN</a></p>
    </div>

    
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
            </div>
        </div>

    </div>
</div>
