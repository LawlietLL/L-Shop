<?php

return [
    'frontend' => [
        'auth' => [
            'login' => [
                'invalid_credentials' => 'Пользователь с такими данными не найден.',
                'welcome' => 'Добро пожаловать, :username!',
                'not_activated' => 'Пользователь не активирован.',
                'too_many_attempts' => 'Вы произвели слишком большое количество неудачных попыток аутентификации. Возможность входа в аккаунт временно заблокирована. Осталось: :remaining сек.'
            ],
            'register' => [
                'username_already_exist' => 'Пользователь с таким именем уже существует.',
                'email_already_exist' => 'Пользователь с таким адресом электронной почты существует.',
                'success' => 'Регистрация успешно завершена. Теперь вы можете войти в аккаунт.'
            ],
            'logout' => [
                'success' => 'Вы вышли из аккаунта.'
            ],
            'password' => [
                'forgot' => [
                    'success' => 'На вашу почту отправлено письмо с инструкциями по сбросу пароля.',
                    'user_not_found' => 'Пользователь с таким адресом электронной почты не найден.'
                ],
                'reset' => [
                    'invalid_code' => 'Код сброса пароля не существует или устарел.',
                    'success' => 'Пароль успешно изменён.'
                ]
            ],
            'activation' => [
                'success' => 'Ваш аккаунт успешно активирован!',
                'fail' => 'Код активации недействителен или устарел.',
                'already' => 'Этот аккаунт уже подтвержден.',
                'repeat' => 'Повторный запрос активации отправлен.',
                'user_not_found' => 'Не удалось произвести повторную отправку запроса: пользователь с таким адресом электронной почты не найден или уже активирован.'
            ]
        ],
        'shop' => [
            'catalog' => [
                'put_in_cart' => 'Товар добавлен в корзину.',
                'product_not_found' => 'Товар не найден.',
                'purchase' => [
                    'success' => 'Покупка совершена успешно.',
                    'invalid_amount' => 'Покупка такого количества товара невозможна.',
                    'distribution_failed' => 'Покупка совершена, но при попытке выдачи товара произошел сбой. Выдайте товар вручную или обратитесь к администрации проекта.'
                ]
            ],
            'cart' => [
                'remove' => [
                    'success' => 'Товар убран из корзины.',
                    'fail' => 'Неудалось убрать товар из корзины.'
                ],
                'purchase' => [
                    'server_not_found' => 'Сервер не существует.'
                ]
            ],
            'payment' => [
                'wait' => 'Платеж обрабатывается. Пожалуйста, подождите.',
                'error' => 'Оплата не удалась.',
            ]
        ],
        'profile' => [
            'skin' => [
                'success' => 'Скин успешно установлен!',
                'disabled' => 'Возможность установки скинов откючена.',
                'invalid_ratio' => 'Неверное соотношение сторон изображения.',
                'invalid_resolution' => 'Неверное разрешение изображения.',
                'delete' => [
                    'success' => 'Скин удалён.',
                    'fail' => 'Не удалось удалить скин.'
                ]
            ],
            'cloak' => [
                'success' => 'Плащ успешно установлен!',
                'disabled' => 'Возможность установки плащей откючена.',
                'invalid_ratio' => 'Неверное соотношение сторон изображения.',
                'invalid_resolution' => 'Неверное разрешение изображения.',
                'delete' => [
                    'success' => 'Плащ удалён.',
                    'fail' => 'Не удалось удалить плащ.'
                ]
            ],
            'settings' => [
                'password_change' => [
                    'success' => 'Пароль изменён успешно.'
                ],
                'reset_sessions' => [
                    'success' => 'Логин-сессии были сброшены. Вам необходимо заново авторизоваться.'
                ]
            ],
            'cart' => [
                'distribution' => [
                    'wait' => 'Действие обрабатывается. Для того, чтобы узнать результат, проверьте ваш внутриигровой
                    инвентарь или обновите страницу.',
                    'not_found' => 'Не удается выдать предмет игроку. Возможно, выдача уже была произведена.',
                    'failure' => 'Не удалось выдать товар. Повторите попытку позже или обратитесь к администрации проекта.'
                ]
            ]
        ]
    ],
    'admin' => [
        'control' => [
            'optimization' => [
                'reset_app_cache_successfully' => 'Кэш приложения успешно сброшен.'
            ]
        ],
        'servers' => [
            'switch' => [
                'server_not_found' => 'Не удалось переключить: сервер не найден.',
                'enabled' => 'Сервер был включен.',
                'disabled' => 'Сервер был выключен.',
            ],
            'add' => [
                'success' => 'Сервер создан успешно.',
                'distributor_not_found' => 'Не удалось создать сервер: данный дистрибъютор не зарегистрирован в системе.'
            ],
            'edit' => [
                'success' => 'Сервер успешно изменён.',
                'server_not_found' => 'Редактирование не удалось: сервер не найден.',
                'category_not_found' => 'Редактирование не удалось: категория не найдена.',
                'distributor_not_found' => 'Не удалось изменить сервер: данный дистрибъютор не зарегистрирован в системе.'
            ],
            'delete' => [
                'success' => 'Сервер удалён.',
                'not_found' => 'Не удалось удалить: сервер не найден.'
            ]
        ],
        'products' => [
            'add' => [
                'success' => 'Товар успешно создан.',
                'item_not_found' => 'Не удалось добавить товар: предмет не существует.',
                'category_not_found' => 'Не удалось добавить товар: категория не существует.',
            ],
            'edit' => [
                'success' => 'Товар успешно изменён.',
                'product_not_found' => 'Редактирование не удалось: товар не существует.',
                'item_not_found' => 'Редактирование не удалось: предмет не существует.',
                'category_not_found' => 'Редактирование не удалось: категория не существует.',
            ],
            'delete' => [
                'success' => 'Товар удалён.',
                'not_found' => 'Не удалось удалить: товар не существует.'
            ]
        ],
        'items' => [
            'add' => [
                'success' => 'Предмет успешно создан.'
            ],
            'edit' => [
                'success' => 'Предмет успешно изменён.',
                'not_found' => 'Редактирование не удалось: предмет не существует.'
            ],
            'list' => [
                'delete' => [
                    'success' => 'Предмет был удалён.',
                    'not_found' => 'Не удалось удалить: предмет не существует.'
                ]
            ]
        ],
        'news' => [
            'add' => [
                'success' => 'Новость успешно опубликована.'
            ],
            'edit' => [
                'success' => 'Новость успешно изменена.',
                'not_found' => 'Новость с идентификатором :id не найдена.'
            ],
            'list' => [
                'delete' => [
                    'success' => 'Новость была удалена.',
                    'not_found' => 'Не удалось удалить: новость не найдена.'
                ]
            ]
        ],
        'pages' => [
            'add' => [
                'success' => 'Статическая страница успешно создана.',
                'already_exists' => 'Не удалось добавить статическую страницу: страница с таким адресом уже существует.'
            ],
            'edit' => [
                'success' => 'Статическая страница успешно обновлена.',
                'not_found' => 'Не удалось обновить статическую страницу: страница не найдена.'
            ],
            'list' => [
                'delete' => [
                    'success' => 'Страница была удалена.',
                    'not_found' => 'Не удалось удалить статическую страницу: страница не найдена.'
                ]
            ]
        ],
        'users' => [
            'edit' => [
                'success' => 'Пользователь успешно обновлён.',
                'user_not_found' => 'Редактирование не удалось: пользователь не найден.',
                'username_already_exists' => 'Пользователь с таким именем уже существует.',
                'email_already_exists' => 'Пользователь с таким адресом электронной почты уже существует.',
                'ban' => [
                    'add' => [
                        'success' => 'Пользователь заблокирован.',
                        'user_not_found' => 'Заблокировать не удалось: пользователь не найден.'
                    ],
                    'delete' => [
                        'success' => 'Блокировка удалена.',
                        'not_found' => 'Блокировка не найдена.'
                    ]
                ]
            ],
            'list' => [
                'delete' => [
                    'success' => 'Пользователь успешно удалён.',
                    'user_not_found' => 'Не удалось удалить: пользователь не найден.'
                ]
            ],
            'permissions' => [
                'not_found' => 'Право не найдено.',
                'already_exists_with_name' => 'Право с именем ":name" уже существует.',
                'successfully_created' => 'Право успешно создано.',
                'successfully_updated' => 'Право успешно обновлено.',
                'successfully_deleted' => 'Право успешно удалено.'
            ],
            'roles' => [
                'not_found' => 'Роль не найдена.',
                'already_exists_with_name' => 'Роль с именем ":name" уже существует.',
                'successfully_created' => 'Роль успешно создана.',
                'successfully_updated' => 'Роль успешно обновлена.',
                'successfully_deleted' => 'Роль успешно удалена.',
                'permission_not_found_with_name' => 'Право с именем \":name\" не найдено.'
            ]
        ],
        'statistic' => [
            'purchases' => [
                'complete' => [
                    'success' => 'Покупка успешно завершена, содержимое выдано пользователю.',
                    'already_completed' => 'Не удалось завершить покупку: уже завершено.'
                ]
            ]
        ]
    ],
    'api' => [
        'auth' => [
            'sashok724sV3Launcher' => [
                'disabled' => 'Функция отключена',
                'ip_not_in_whitelist' => 'Запрос не может быть выполнен с этого IP',
                'banned' => 'Пользователь заблокирован.',
                'throttling' => 'Много неудачных попыток, попробуйте через :cooldown сек.'
            ]
        ]
    ],
    'request_error' => [
        'title' => 'Во время выполнения запроса произошла ошибка.',
        'notify' => 'Рекомендуем сообщить об этом администрации ресурса.',
        'main' => 'На главную',
        'back' => 'Назад',
    ],
    'only_for_auth' => 'Для того, чтобы выполнить это действие, вы должны авторизоваться.',
    'user_not_found' => 'Пользователь не найден.',
    'only_for_guests' => 'Только для гостей.',
    'captcha_required' => 'Вы должны подтвердить то, что не являетесь роботом.',
    'forbidden' => 'Запрещено.',
    'no_rights' => 'У вас недостаточно прав для выполнения данного действия.'
];
