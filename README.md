Yii2 Bootstrap Pincode Input
============================
Yii2 Bootstrap Pincode Input

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist smartysoft/yii2-pincode-input "*"
```

or add

```
"smartysoft/yii2-pincode-input": "*"
```

for bootstrap 4
```
"smartysoft/yii2-pincode-input": "dev-bs4"
```


to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \smartysoft\PincodeInput\PinCodeInput::widget([
                                'model' => $model,
                                'attribute' => 'pincode',
                                'jsOptions' => [
                                    'hidedigits'=>false,
                                    'inputs'=>4
                                ],
                            
                            ]) ?>
```                            
                            
```php
<?= $form->field($model, 'pincode')->widget(\smartysoft\PincodeInput\PinCodeInput::className(), [
                                'jsOptions' => [
                                    'hidedigits'=>false,
                                    'inputs'=>4
                                ],
                            ])->label(false) ?>
```

JsOptions
---------
http://fkranenburg.github.io/bootstrap-pincode-input/
