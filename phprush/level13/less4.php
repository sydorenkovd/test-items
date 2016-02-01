<?php

/* Переводчик с английского
1. Создать класс EnglishTranslator, который наследуется от Translator.
2. Реализовать все абстрактные методы.
3. Подумай, что должен возвращать метод getLanguage.
4. Программа должна выводить на экран "Я переводчик с английского".
5. Метод main менять нельзя.
*/

class EnglishTranslator extends Translator
{
    public function getLang($e)
    {
        return $e;
    }

    public function translate()
    {
        $lang = '';
        return "I am translator from " . $this->getLang($lang);
    }
}

abstract class Translator
{
    abstract function translate();

    abstract function getLang($e);
}

$engTrans = new EnglishTranslator();
$engTrans->getLang('English');
echo $engTrans->translate();