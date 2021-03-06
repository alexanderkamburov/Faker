<?php

namespace Faker\Provider\bg_BG;

class Person extends \Faker\Provider\Person
{
    protected static $lastNameFormat = array(
        '{{lastNameMale}}',
        '{{lastNameFemale}}',
    );

    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastNameMale}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}}'
    );

    protected static $firstNameMale = array(
        'Албен', 'Ангел', 'Асен', 'Аспарух', 'Билян', 'Бисер', 'Божидар', 'Валентин', 'Венелин', 'Венцислав', 'Вихрен', 'Върбан', 'Георги', 'Герган', 'Горан', 'Данаил', 'Деян', 'Делян', 'Детелин', 'Жан', 'Живко', 'Здравко', 'Ивайло', 'Иван', 'Искрен', 'Калоян', 'Камен', 'Кирил', 'Лозан', 'Лъчезар', 'Людмил', 'Маргарит', 'Младен', 'Момчил', 'Михаил', 'Недялко', 'Огнян', 'Орлин', 'Павел', 'Пламен', 'Преслав', 'Радостин', 'Росен', 'Сашо', 'Свилен', 'Стамен', 'Стефан', 'Стилян', 'Страхил', 'Теодор', 'Тихомир', 'Тодор', 'Томислав', 'Траян', 'Трифон', 'Чавдар', 'Чудомир', 'Юлиян', 'Явор', 'Ясен',
    );

    protected static $firstNameFemale = array(
        'Албена', 'Аспаруха', 'Балкана', 'Биляна', 'Валентина', 'Венелина', 'Венцислава', 'Вихра', 'Гергана', 'Горана', 'Данаила', 'Деяна', 'Деляна', 'Деница', 'Детелина', 'Евгения', 'Жана', 'Живка', 'Здравка', 'Зорница', 'Ивайла', 'Искра', 'Калина', 'Калояна', 'Камена', 'Кремена', 'Лилия', 'Лозана', 'Лъчезара', 'Магдалена', 'Младена', 'Момчила', 'Михаела', 'Незабравка', 'Ния', 'Огняна', 'Орлина', 'Павлина', 'Симона', 'Саша', 'Свилена', 'Стамена', 'Томислава', 'Трифонка', 'Чавдара', 'Чудомира', 'Янислав', 'Ясна'
    );

    protected static $lastNameMale = array(
        'Абаджиев', 'Александров', 'Алексиев', 'Ангелов', 'Андреев', 'Антонов', 'Арабаджиев', 'Арнаудов', 'Атанасов', 'Бобев', 'Бонев', 'Ботев', 'Бояджиев', 'Бранков', 'Буров', 'Вазов', 'Вакрилов', 'Ванков', 'Василев', 'Вачков', 'Видев', 'Владимиров', 'Вълков', 'Вятков', 'Ганев', 'Георгиев', 'Гергов', 'Григоров', 'Гроздев', 'Груев', 'Грънчаров', 'Гълъбов', 'Гюзелев', 'Даскалов', 'Диманов', 'Димитров', 'Димов', 'Динев', 'Динчев', 'Добрев', 'Доков', 'Донков', 'Енев', 'Живков', 'Зарев', 'Златев', 'Иванов', 'Игнатов', 'Илиев', 'Йорданов', 'Йосифов', 'Какачев', 'Калев', 'Кантарджиев', 'Каравелов', 'Карагьозов', 'Кирков', 'Кожухаров', 'Костов', 'Коцев', 'Кралев', 'Кръстев', 'Кънчев', 'Маврудиев', 'Манолов', 'Марков', 'Минчев', 'Михайлов', 'Михов', 'Младенов', 'Ников', 'Николов', 'Панайотов', 'Панев', 'Пеев', 'Петков', 'Петранов', 'Петров', 'Петрунов', 'Попов', 'Първанов', 'Радев', 'Радков', 'Радославов', 'Рангелов', 'Русев', 'Славейков', 'Славков', 'Славчев', 'Станев', 'Станчев', 'Стефанов', 'Стойков', 'Стоилов', 'Стоянов', 'Събев', 'Събенов', 'Талев', 'Танчев', 'Тасков', 'Терзиев', 'Тодоров', 'Томов', 'Тончев', 'Тотев', 'Тошев', 'Трендафилов', 'Филипов', 'Хаджиев', 'Христов', 'Цаков', 'Цанков', 'Цветанов', 'Цветков', 'Цеков', 'Ценков', 'Чернев', 'Шопов', 'Яворов', 'Янев', 'Янков'
    );

    protected static $lastNameFemale = array(
        'Абаджиева','Александрова','Алексиева','Ангелова','Андреева','Антонова','Арабаджиева','Арнаудова','Атанасова','Бобева','Бонева','Ботева','Бояджиева','Бранкова','Бурова','Вазова','Вакрилова','Ванкова','Василева','Вачкова','Видева','Владимирова','Вълкова','Вяткова','Ганева','Георгиева','Гергова','Григорова','Гроздева','Груева','Грънчарова','Гълъбова','Гюзелева','Даскалова','Диманова','Димитрова','Димова','Динева','Динчева','Добрева','Докова','Донкова','Енева','Живкова','Зарева','Златева','Иванова','Игнатова','Илиева','Йорданова','Йосифова','Какачева','Калева','Кантарджиева','Каравелова','Карагьозова','Киркова','Кожухарова','Костова','Коцева','Кралева','Кръстева','Кънчева','Маврудиева','Манолова','Маркова','Минчева','Михайлова','Михова','Младенова','Никова','Николова','Панайотова','Панева','Пеева','Петкова','Петранова','Петрова','Петрунова','Попова','Първанова','Радева','Радкова','Радославова','Рангелова','Русева','Славейкова','Славкова','Славчева','Станева','Станчева','Стефанова','Стойкова','Стоилова','Стоянова','Събева','Събенова','Талева','Танчева','Таскова','Терзиева','Тодорова','Томова','Тончева','Тотева','Тошева','Трендафилова','Филипова','Хаджиева','Христова','Цакова','Цанкова','Цветанова','Цветкова','Цекова','Ценкова','Чернева','Шопова','Яворова','Янева','Янкова',

    );

    protected static $titleMale = array('Г-н', 'Др.', 'Инж.');
    protected static $titleFemale = array('Г-жа', 'Г-ца', 'Др.', 'Инж.');

    /**
     * @param string|null $gender 'male', 'female' or null for any
     * @example 'Чанталиев'
     */
    public function lastName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return static::lastNameMale();
        } elseif ($gender === static::GENDER_FEMALE) {
            return static::lastNameFemale();
        }

        return $this->generator->parse(static::randomElement(static::$lastNameFormat));
    }

    public static function lastNameMale()
    {
        return static::randomElement(static::$lastNameMale);
    }

    public static function lastNameFemale()
    {
        return static::randomElement(static::$lastNameFemale);
    }
}
