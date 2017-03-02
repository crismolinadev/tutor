<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-sm-12">
        <div class="wrapper-page">
            <div class="m-t-40 account-pages">
                <div class="text-center account-logo-box">
                    <h2 class="text-uppercase">
                        <a href="index.html" class="text-success">
                            PUNTOMX
                        </a>
                    </h2>
                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                </div>
                <div class="account-content">
                  <?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => ['class' => 'form-horizontal']]); ?>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <?= $form->field($model, 'username')->label('Usuario') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <?= $form->field($model, 'password')->label('Contraseña')->passwordInput() ?>
                            </div>
                        </div>

                        <div class="form-group account-btn text-center m-t-10">
                            <div class="col-xs-12">
                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit">Iniciar Sesión</button>
                            </div>
                        </div>
                    <?php ActiveForm::end(); ?>

                    <div class="clearfix"></div>

                </div>
            </div>
            <!-- end card-box-->
            <div class="row m-t-50">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">Desarrollado por<a href="#" class="text-primary m-l-5"><b>PuntoMX</b></a></p>
                </div>
            </div>

        </div>
        <!-- end wrapper -->

    </div>
</div>
