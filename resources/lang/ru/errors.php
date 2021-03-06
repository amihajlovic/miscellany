<?php

return [
    '403'       => [
        'body'  => 'Кажется, у вас нет разрешения для доступа к этой странице.',
        'title' => 'В Доступе Отказано',
    ],
    '404'       => [
        'body'  => 'К сожалению, нужная страница не найдена.',
        'title' => 'Страница Не Найдена',
    ],
    '500'       => [
        'body'  => [
            '1' => 'Упс, кажется, что-то пошло не так.',
            '2' => 'Мы получили сообщение о неизвестной ошибке, но иногда может помочь немного информации о том, что вы делали.',
        ],
        'title' => 'Ошибка',
    ],
    '503'       => [
        'body'  => [
            '1' => 'Kanka в данный момент находится на обслуживании, что значит, что ведется работа над обновлением!',
            '2' => 'Простите за доставленные неудобства. Все будет готово через пару минут.',
        ],
        'title' => 'Обслуживание',
    ],
    '503-form'  => [
        'body'  => 'Невозможно сохранить данные. Это обычно происходит по двум причинам. Пожалуйста, откройте Kanka в :link. Если приложение на обслуживании, пожалуйста, сохраните свои данные где-нибудь, пока приложение не придет в рабочее состояние и попробуйте снова. Если вы получили сообщение о "Проверке браузера", попробуйте "Сохранить снова".',
        'link'  => 'новом окне',
        'title' => 'Произошла Непредвиденная Ошибка',
    ],
    'footer'    => 'Если вам нужна дополнительная помощь, пожалуйста, свяжитесь с нами через hello@kanka.io или :discord.',
];
