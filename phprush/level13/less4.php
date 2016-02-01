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
    public $lang = '';

    public function setLang($e)
    {
        return $this->lang = $e;
    }

    public function translate()
    {
        return "I am translator from " . $this->setLang($this->lang);
    }
}

abstract class Translator
{
    abstract function translate();

    abstract function setLang($e);
}

$engTrans = new EnglishTranslator();
$engTrans->setLang('English');
echo $engTrans->translate();