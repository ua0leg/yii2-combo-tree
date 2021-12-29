Yii2 Combo Tree
===============
Yii2 Combo Tree Select Extension

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist mrmuminov/yii2-combo-tree "*"
```

or add

```
"mrmuminov/yii2-combo-tree": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \MrMuminov\ComboTree\ComboTree::widget([
    'source' => [
        [
            'id' => 0,
            'title' => 'choice 1  '
        ], [
            'id' => 1,
            'title' => 'choice 2',
            'subs' => [
                [
                    'id' => 10,
                    'title' => 'choice 2 1'
                ], [
                    'id' => 11,
                    'title' => 'choice 2 2'
                ], [
                    'id' => 12,
                    'title' => 'choice 2 3'
                ]
            ]
        ], [
            'id' => 2,
            'title' => 'choice 3'
        ]
    ]
]); ?>```