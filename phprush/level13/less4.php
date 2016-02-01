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