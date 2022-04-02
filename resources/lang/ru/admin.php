<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used on the admin dashboard
    |
    */

    'nav' => [
        'dashboard' => 'Панель',
        'settings' => [
            'heading' => 'Настройки',
            'settings' => [
                'settings' => 'Настройки',
                'global' => 'Общее',
                'security' => 'Безопасность',
                'performances' => 'Производительность',
                'seo' => 'SEO',
                'auth' => 'Авторизация',
                'mail' => 'Почта',
                'maintenance' => 'Техобслуживание',
            ],
            'navbar' => 'Панель навигации',
            'servers' => 'Серверы',
        ],

        'users' => [
            'heading' => 'Пользователи',
            'users' => 'Пользователи',
            'roles' => 'Роли',
            'bans' => 'Баны',
        ],

        'content' => [
            'heading' => 'Содержание',
            'pages' => 'Страницы',
            'posts' => 'Посты',
            'images' => 'Изображения',
        ],

        'extensions' => [
            'heading' => 'Расширения',
            'plugins' => 'Плагины',
            'themes' => 'Темы',
        ],

        'other' => [
            'heading' => 'Другое',
            'update' => 'Обновление',
            'logs' => 'Логи',
        ],

        'profile' => [
            'profile' => 'Профиль',
        ],

        'back-website' => 'Вернуться на сайт',

        'support' => 'Поддержка',
        'documentation' => 'Документация',
    ],

    'confirm-delete' => [
        'title' => 'Удалить?',
        'description' => 'Вы уверены, что хотите удалить это? Это невозможно отменить!',
    ],

    'footer' => 'Работает на :azuriom &copy; :year. Панель разработана :startbootstrap.',

    /*
    |
    | Admin pages
    |
    */

    'dashboard' => [
        'title' => 'Панель',

        'new-update' => 'Доступна новая версия Azuriom: :version',
        'https-warning' => 'Ваш сайт не использует https, вам следует включить его для вашей безопасности и безопасности других пользователей.',
        'proxy-warning' => 'Если вы используете Cloudflare, вам следует установить плагин Cloudflare Support.',
        'recent-users' => 'Последние пользователи',
        'active-users' => 'Активные пользователи',
        'emails-disabled' => 'Рассылка электронной почты отключена. Если пользователь забудет свой пароль, он не сможет его сбросить. Вы можете включить рассылку в разделе <a href=":url">настройки почты</a>.',
        'users' => 'Пользователи',
        'posts' => 'Посты',
        'pages' => 'Страницы',
        'images' => 'Изображения',
    ],

    'settings' => [
        'index' => [
            'title' => 'Общие настройки',

            'site-name' => 'Название сайта',
            'site-url' => 'URL сайта',
            'site-description' => 'Описание сайта',
            'meta' => 'Мета-теги',
            'meta-info' => 'Ключевые слова должны быть разделены запятыми.',
            'favicon' => 'Favicon',
            'background' => 'Фон',
            'logo' => 'Логотип',
            'timezone' => 'Часовой пояс',
            'locale' => 'Язык',
            'money' => 'Название валюты сайта',
            'copyright' => 'Копирайт',
            'user-money-transfer' => 'Активация возможности перевода денег между пользователями',
            'site-key' => 'Ключ сайта для azuriom.com',
            'site-key-label' => 'Ключ сайта azuriom.com необходим для установки премиальных расширений, купленных в магазине. Вы можете получить ключ сайта в своём <a href="https://azuriom.com/profile" target="_blank" rel="noopener norefferer">профиле Azuriom</a>.',
        ],

        'security' => [
            'title' => 'Настройки безопасности',

            'captcha' => [
                'title' => 'Капча',
                'site-key' => 'Ключ сайта',
                'secret-key' => 'Секретный ключ',
                'recaptcha' => 'Вы можете получить ключи reCaptcha на <a href="https://www.google.com/recaptcha/" target="_blank" rel="noopener noreferrer">Google reCaptcha website</a>. Вам нужно использовать reCaptcha <strong>v2 invisible</strong> ключи.',
                'hcaptcha' => 'Вы можете получить ключи hCaptcha на <a href="https://www.hcaptcha.com/" target="_blank" rel="noopener noreferrer"> hCaptcha сайте</a>.',
            ],

            'hash' => 'Алгоритм хеширования',
            'hash-info' => 'Argon2id - самый безопасный алгоритм, но для него требуется PHP 7.3 или выше. Если вы используете PHP 7.2, вам следует использовать Argon2i.',
            'hash-error' => 'Этот алгоритм хеширования не поддерживается вашей текущей версией PHP.',
        ],

        'performances' => [
            'title' => 'Настройки производительности',

            'cache' => [
                'title' => 'Очистить кэш',
                'description' => 'Очищает кеш сайта.',

                'status' => [
                    'cleared' => 'Кэш успешно очищен.',
                    'clear-error' => 'Ошибка при очистке кеша.',
                ],

                'actions' => [
                    'clear' => 'Очистить кэш',
                ],
            ],

            'boost' => [
                'title' => 'AzBoost',
                'description' => 'AzBoost улучшает производительность вашего сайта, добавляя еще один эксклюзивный слой кеширования.',
                'info' => 'Если после включения расширения у вас возникли проблемы, перезагрузите кэш.',

                'current' => [
                    'status' => 'AzBoost в данный момент :status.',
                    'enabled' => '<span class="text-success">включен</span>',
                    'disabled' => '<span class="text-danger">отключен</span>',
                ],

                'status' => [
                    'enabled' => 'AzBoost теперь включен.',
                    'disabled' => 'AzBoost теперь выключен.',
                    'reloaded' => 'AzBoost был перезагружен.',

                    'enable-error' => 'Ошибка при включении AzBoost.',
                ],

                'actions' => [
                    'enable' => 'Включить AzBoost',
                    'disable' => 'Выключить AzBoost',
                    'reload' => 'Перезагрузить AzBoost',
                ],
            ],
        ],

        'seo' => [
            'title' => 'Настройки SEO',

            'html-head-code' => 'HTML-код для включения в <head> всех страниц.',
            'html-body-code' => 'HTML-код для включения в <body> всех страниц.',

            'html-code-info' => 'Например: Cookie баннер, Google Analytics и т. д',

            'welcome-popup' => [
                'enable' => 'Включить приветственное всплывающее окно?',
                'message' => 'Приветственное всплывающее сообщение',
                'info' => 'Это всплывающее окно будет отображаться при первом посещении сайта пользователем.',
            ],
        ],

        'auth' => [
            'title' => 'Аутентификация',

            'conditions-url' => 'Условия URL',
            'conditions-info' => 'Пользователи должны будут принять эти условия при регистрации.',
            'enable-user-registration' => 'Включить регистрацию пользователей',
            'enable-user-registration-label' => 'Регистрация через плагины все еще будет возможна.',
            'auth-api' => 'Включить Auth API',
            'auth-api-label' => 'Этот API дает вам возможность добавить нестандартную аутентификацию на ваши игровые сервера. Для серверов Майнкрафт использующих лаунчер, вы можете использовать <a href="https://github.com/Azuriom/AzAuth" target="_blank" rel="noopener noreferrer">AzAuth</a> для простой и быстрой интеграции.',
            'minecraft-verification' => 'Включить верификацию имени пользователя в Майнкрафт через minecraft.net',
        ],

        'mail' => [
            'title' => 'Настройки почты',
            'from-address' => 'Почтовый используемый при отправке почты.',
            'driver' => 'Тип почтового сообщения',
            'driver-info' => 'Azuriom supports SMTP и Sendmail для отправки почты. Вы можете нейти дополнительную информацию по настройке почты в нашей <a href="https://azuriom.com/docs" target="_blank" rel="noopener noreferrer">документации</a>.',
            'disabled-warn' => 'Когда почта выключена, пользователи не будут иметь возможность восстановить их пароль если его забудут.',
            'sendmail-warn' => 'Не рекомендуется использовать Sendmail и лучше использовать SMTP сервер когда это возможно.',
            'smtp' => [
                'host' => 'Адрес хоста SMTP',
                'port' => 'Порт хоста SMTP',
                'encryption' => 'Протокол шифрования',
                'username' => 'Имя пользователя SMTP-сервера',
                'password' => 'Пароль SMTP-сервера',
            ],
            'enable-users-verification' => 'Включить подтверждение почтового адреса пользователя',
            'send' => 'Отправить тестовое письмо',
            'sent' => 'Тестовое письмо было успешно отправлено.',
        ],

        'maintenance' => [
            'title' => 'Настройки техобслуживания',

            'enable' => 'Включить техобслуживание',
            'message' => 'Техническое сообщение',
        ],

        'status' => [
            'updated' => 'Настройки были обновлены.',
        ],
    ],

    'navbar-elements' => [
        'title' => 'Панель навигации',
        'title-edit' => 'Редактировать элемент :element панели навигации',
        'title-create' => 'Создать элемент панели навигации',

        'dropdown-info' => 'Вы можете добавить элемент в этот выпадающий список, когда этот элемент будет сохранен.',

        'fields' => [
            'home' => 'Главная',
            'link' => 'Внешняя ссылка',
            'page' => 'Страница',
            'post' => 'Пост',
            'posts' => 'Список постов',
            'plugin' => 'Плагин',
            'dropdown' => 'Выпадающее меню',
            'new-tab' => 'Открыть в новой вкладке',
        ],

        'status' => [
            'nav-updated' => 'Панель навигации обновлена.',

            'created' => 'Элемент панели навигации был создан.',
            'updated' => 'Этот элемент панели навигации был обновлён.',
            'deleted' => 'Этот элемент панели навигации был удалён.',

            'not-empty' => 'Вы не можете удалить выпадающее меню с элементами.',
        ],
    ],

    'servers' => [
        'title' => 'Серверы',
        'title-edit' => 'Редактировать сервер :server',
        'title-create' => 'Добавить сервер',

        'default' => 'Сервер по умолчанию',
        'default-info' => 'Количество игроков подключенных к серверу по умолчанию будет выводится на сайте если это предусмотрено текущей темой оформления.',

        'ping-no-commands' => 'Пинг-ссылке не нужен плагин, но вы не можете выполнить команду с этой ссылкой.',
        'query-no-commands' => 'Через быструю ссылку невозможно выполнять команды на сервере.',

        'query-port-info' => 'Можно оставить пустым есть совпадает с портом игры.',

        'fields' => [
            'address' => 'Адрес',
            'port' => 'Порт',

            'rcon-password' => 'Пароль Rcon',
            'rcon-port' => 'Порт Rcon',
            'query-port' => 'Порт получения данных (Source Query Port)',

            'azlink-port' => 'Порт AzLink',
        ],

        'actions' => [
            'verify-connection' => 'Проверить соединение',
        ],

        'azlink' => [
            'link' => 'Чтобы связать Minecraft с вашим сайтом, используйте AzLink:',
            'link-1' => '<a href="https://azuriom.com/azlink">Загрузите плагин AzLink</a> и установите его на свой сервер.',
            'link-2' => 'Перезагрузите сервер.',
            'link-3' => 'Выполните эту команду на сервере: ',

            'link-info' => 'Вы можете связать свой сервер Minecraft с вашим сайтом с помощью команды: ',
            'port-info' => 'Если вы используете порт AzLink, отличный от порта по умолчанию, вы должны настроить его с помощью команды: ',

            'enable-ping' => 'Включить мгновенные команды (требуется открытый порт на сервере)',
            'ping-info' => 'Когда мгновенные команды не включены, команды будут выполнятся с задержкой от 30 секунд до минуты.',
            'custom-port' => 'Использовать пользовательский порт AzLink',
        ],

        'players' => ':count игрок|:count игроков',
        'offline' => 'Не в сети',

        'status' => [
            'created' => 'Сервер был добавлен.',
            'updated' => 'Сервер был обновлён.',
            'deleted' => 'Сервер был удалён.',

            'connect-success' => 'Подключение к серверу успешно установлено!',
            'connect-error' => 'Ошибка подключения к серверу: :error',

            'not-azlink' => 'Этот сервер не подключен через AzLink.',
            'azlink-connect' => 'Ошибка подключения к серверу, неправильный адрес и/или порт, или порт закрыт.',
            'azlink-badresponse' => 'Не удалось подключиться к серверу (код :code), токен недействителен или неправильно настроен сервер. Вы можете повторить команду link, чтобы исправить это.',
        ],

        'type' => [
            'mc-ping' => 'Пинг Майнкрафт',
            'mc-rcon' => 'Майнкрафт RCON',
            'mc-azlink' => 'AzLink',
            'source-query' => 'Source Query',
            'source-rcon' => 'Source RCON',
            'bedrock-ping' => 'Bedrock Пинг',
            'bedrock-rcon' => 'Bedrock RCON',
            'fivem-status' => 'FiveM статус',
            'fivem-rcon' => 'FiveM RCON',
            'rust-rcon' => 'Rust RCON',
            'flyff-server' => 'Flyff сервер', // TODO make this dynamic
        ],
    ],

    'users' => [
        'title' => 'Пользователи',
        'title-edit' => 'Редактировать пользователя :user',
        'title-create' => 'Создать пользователя',

        'fields' => [
            'register-date' => 'Зарегистрирован',
            'last-login' => 'Время последнего входа',
            'email-verified' => 'Почтовый адрес верифицирован',
            '2fa' => 'Двухфакторная аутентификация',
            'ip' => 'IP-адрес',
        ],

        'info' => [
            'admin' => 'Админ',
            'banned' => 'Забанен',
            'deleted' => 'Удалён',
        ],

        'actions' => [
            'ban' => 'Забанить',
            'unban' => 'Разбанить',
            'delete' => 'Удалить',
            'verify-email' => 'Подтвердить электронную почту',
            'disable-2fa' => 'Отключить 2FA',
        ],

        'alert-deleted' => 'Этот пользователь удалён, его нельзя редактировать.',
        'alert-banned' => [
            'title' => 'Этот пользователь сейчас забанен:',
            'banned-by' => 'Забанил: :author',
            'reason' => 'Причина: :reason',
            'date' => 'Дата: :date',
        ],

        'edit-profile' => 'Редактировать профиль',

        'user-info' => 'Информация о пользователе',

        'ban-title' => 'Забанить :user',
        'ban-description' => 'Вы уверены, что хотите забанить этого пользователя?',

        'status' => [
            'created' => 'Пользователь был создан.',
            'updated' => 'Этот пользователь был обновлён.',
            'deleted' => 'Этот пользователь был удалён.',

            'email-verified' => 'Почтовый адрес был верифицирован.',
            '2fa-disabled' => 'Двухфакторная аутентификация была отключена.',

            'banned' => 'Этот пользователь теперь забанен.',
            'unbanned' => 'Этот пользователь был разбанен.',
        ],
    ],

    'roles' => [
        'title' => 'Роли',
        'title-edit' => 'Редактировать роль :role',
        'title-create' => 'Создать роль',

        'permissions' => 'Права',
        'perm-admin' => [
            'label' => 'Администратор',
            'info' => 'Когда роль является администратором, она имеет все разрешения.',
        ],

        'info' => [
            'default' => 'По умолчанию',
            'admin' => 'Админ',
        ],

        'status' => [
            'power-updated' => 'Роли были обновлены.',
            'created' => 'Роль была создана.',
            'updated' => 'Эта роль была обновлена.',
            'deleted' => 'Эта роль была удалена.',

            'unauthorized' => 'Эта роль выше вашей роли.',
            'add-admin' => 'Вы не можете добавить права администратора для роли.',
            'remove-admin' => 'Вы не можете удалить права администратора своей роли.',
            'permanent-role' => 'Эта роль не может быть удалена.',
            'own-role' => 'Вы не можете удалить свою роль.',
        ],
    ],

    'permissions' => [
        'create-comments' => 'Прокомментировать пост',
        'delete-other-comments' => 'Удалить комментарий от другого пользователя',
        'maintenance-access' => 'Доступ к веб-сайту во время обслуживания',
        'admin-access' => 'Доступ к панели администратора',
        'admin-logs' => 'Просмотр и управление логами сайта',
        'admin-images' => 'Просмотр и управление изображениями',
        'admin-navbar' => 'Просмотр и управление панели навигации',
        'admin-pages' => 'Просмотр и управление страницами',
        'admin-posts' => 'Просмотр и управление постами',
        'admin-settings' => 'Просмотр и управление настройками',
        'admin-users' => 'Просмотр и управление пользователями',
        'admin-themes' => 'Просмотр и управление темами',
        'admin-plugins' => 'Просмотр и управление плагинами',
    ],

    'bans' => [
        'title' => 'Баны',

        'fields' => [
            'banned-by' => 'Забанил',
            'reason' => 'Причина',
        ],

        'removed' => 'Удалён :date :user',
    ],

    'posts' => [
        'title' => 'Посты',
        'title-edit' => 'Редактировать пост :post',
        'title-create' => 'Создать пост',

        'published-info' => 'Этот пост не будет виден публично до этой даты.',

        'fields' => [
            'published-at' => 'Опубликован',
        ],

        'pin' => 'Закрепить этот пост',

        'status' => [
            'created' => 'Пост был создан.',
            'updated' => 'Этот пост был изменён.',
            'deleted' => 'Этот пост был удалён.',
        ],

        'info' => [
            'pinned' => 'Закреплённые',
        ],
    ],

    'pages' => [
        'title' => 'Страницы',
        'title-edit' => 'Редактировать страницу #:page',
        'title-create' => 'Создать страницу',

        'enable' => 'Включить страницу',

        'status' => [
            'created' => 'Страница была создана.',
            'updated' => 'Эта страница была обновлена.',
            'deleted' => 'Эта страница была удалена.',
        ],
    ],

    'images' => [
        'title' => 'Изображения',
        'title-edit' => 'Редактировать изображение :image',
        'title-create' => 'Загрузить изображение',

        'status' => [
            'created' => 'Изображение было создано.',
            'updated' => 'Это изображение было обновлено.',
            'deleted' => 'Это изображение было удалено.',
        ],
    ],

    'extensions' => [
        'buy' => 'Купить за :price',
    ],

    'plugins' => [
        'title' => 'Плагины',

        'installed' => 'Установленные плагины',
        'available' => 'Доступные плагины',

        'azuriom-requirement' => 'Плагин не совместим с вашей версией Azuriom.',
        'game-requirement' => 'Этот плагин не совместим с игрой :game.',
        'plugin-requirement' => 'Плагин ":plugin" не найден или его версия не совместима с этим плагином.',

        'status' => [
            'reloaded' => 'Плагины были перезагружены.',
            'enabled' => 'Плагин был включен.',
            'disabled' => 'Плагин был отключен.',
            'updated' => 'Плагин был обновлён.',
            'installed' => 'Плагин был установлен.',
            'deleted' => 'Плагин был удалён.',

            'error-delete' => 'Плагин должен быть отключен, прежде чем его можно будет удалить.',
        ],
    ],

    'themes' => [
        'title' => 'Темы',

        'current' => [
            'title' => 'Текущая тема',
            'author' => 'Автор: :author',
            'version' => 'Версия: :version',
        ],
        'installed' => 'Установленные темы',
        'available' => 'Доступные темы',
        'no-enabled' => 'У вас нет включенной темы.',

        'actions' => [
            'edit-config' => 'Редактировать конфиг',
            'disable' => 'Отключить тему',
        ],

        'status' => [
            'reloaded' => 'Темы были перезагружены.',
            'no-config' => 'Эта тема не имеет конфига.',
            'config-updated' => 'Конфиг темы был обновлён.',
            'invalid' => 'Эта тема недействительна (имя папки темы должно быть ид темы).',
            'updated' => 'Тема была обновлена.',
            'installed' => 'Тема была установлена.',
            'deleted' => 'Тема была удалена.',

            'error-delete' => 'Вы не можете удалить текущую тему.',
        ],
    ],

    'update' => [
        'title' => 'Обновление',

        'subtitle-update' => 'Доступно обновление',
        'subtitle-no-update' => 'Нет доступных обновлений',

        'update' => 'Доступна <code>:last-version</code> версия Azuriom, а у вас <code>:version</code> версия.',
        'download' => 'Последняя версия Azuriom готова к загрузке.',
        'install' => 'Последняя версия Azuriom была загружена и готова к установке.',

        'backup-info' => 'Перед обновлением Azuriom необходимо сделать резервную копию вашего сайта!',

        'up-to-date' => 'Вы используете последнюю версию Azuriom: <code>:version</code>.',

        'status' => [
            'download-success' => 'Последняя версия была загружена, теперь вы можете установить её.',
            'install-success' => 'Обновление было успешно установлено.',

            'up-to-date' => 'Вы используете последнюю версию Azuriom.',
            'error-fetch' => 'Произошла ошибка при получении обновлений: :error',
            'error-download' => 'Произошла ошибка при загрузке: :error',
            'error-install' => 'Произошла ошибка при установке: :error',
        ],

        'actions' => [
            'check' => 'Проверить обновления',
            'install' => 'Установить',
            'download' => 'Скачать',
        ],
    ],

    'logs' => [
        'title' => 'Логи',

        'actions' => [
            'clear' => 'Очистить старые логи (15д+)',
        ],

        'status' => [
            'cleared' => 'Старые логи были удалены.',
        ],

        'pages' => [
            'created' => 'Создана страница #:id',
            'updated' => 'Обновлена страница #:id',
            'deleted' => 'Удалена страница #:id',
        ],

        'posts' => [
            'created' => 'Создан пост #:id',
            'updated' => 'Обновлён пост #:id',
            'deleted' => 'Удалён пост #:id',
        ],

        'images' => [
            'created' => 'Создано изображение #:id',
            'updated' => 'Обновлено изображение #:id',
            'deleted' => 'Удалено изображение #:id',
        ],

        'roles' => [
            'created' => 'Создана роль #:id',
            'updated' => 'Обновлена роль #:id',
            'deleted' => 'Удалена роль #:id',
        ],

        'servers' => [
            'created' => 'Создан сервер #:id',
            'updated' => 'Обновлён сервер #:id',
            'deleted' => 'Удалён сервер #:id',
        ],

        'users' => [
            'updated' => 'Обновлён пользователь #:id',
            'deleted' => 'Удалён пользователь #:id',
            'transfer' => 'Отправлено :money денег пользователю #:id',
        ],

        'settings' => [
            'updated' => 'Обновлены настройки',
        ],

        'updates' => [
            'installed' => 'Установлено обновление Azuriom',
        ],

        'plugins' => [
            'enabled' => 'Включен плагин',
            'disabled' => 'Отключен плагин',
        ],

        'themes' => [
            'changed' => 'Изменена тема',
        ],
    ],

    'errors' => [
        'back' => 'Вернуться к панели',
        '404' => 'Страница не найдена',
        'info' => 'Похоже, вы нашли ошибку в матрице...',
    ],
];