<?php

/* ���������� � �����������
1. ������� ����� EnglishTranslator, ������� ����������� �� Translator.
2. ����������� ��� ����������� ������.
3. �������, ��� ������ ���������� ����� getLanguage.
4. ��������� ������ �������� �� ����� "� ���������� � �����������".
5. ����� main ������ ������.
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