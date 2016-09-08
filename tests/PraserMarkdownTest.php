<?php

class PraserMarkdownTest extends \PHPUnit_Framework_TestCase
{
    private $praserService;

    public function __construct($name = NULL, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->praserService = new PraserMarkdownService();
    }

    public function additionHeaderProvider()
    {
        return [
            ['# title', '<h1>title</h1>', ''],
            ['## title 2', '<h2>title 2</h2>'],
            ['### title 3', '<h3>title 3</h3>'],
            ['#### title 4', '<h4>title 4</h4>']
        ];
    }

    public function additionListProvider()
    {
        return [
            ["- list 1\n- list 2", '<ol><li>list 1</li><li>list 2</li></ol>'],
            ["1. list1\n1. list2", '<ol><li>list1</li><li>list2</li></ol>'],
//            ["- list1\n- list2\n    - nested list1\n    - nested list2", '<ol><li>list1</li><li>list2</li></ol>']
        ];
    }

    /**
     * @dataProvider additionHeaderProvider
     */
    public function testHeaderPraser($a, $expected)
    {
        $this->assertEquals($expected, $this->praserService->handler($a));
    }

    /**
     * @dataProvider additionListProvider
     */
    public function testListPraser($a, $expected)
    {
        $this->assertEquals($expected, $this->praserService->handler($a));
    }
}

class PraserMarkdownService
{
    private static $h_format  = '<h%d>%s</h%d>';
    private static $ol_format = '<ol>%s</ol>';
    private static $li_format = '<li>%s</li>';

    public function handler($val)
    {
        if (preg_match("/^#/", $val)) {
            $arrstr = preg_split("/[\s,]+/", $val, 2);
            if (($count  = substr_count($arrstr[0], '#')) > 0 && $count < 7) {
                return sprintf(self::$h_format, $count, $arrstr[1], $count);
            }
        } elseif (preg_match("/^-\s/", $val)) {
            return $this->praserList($val, '-');
        } elseif (preg_match("/^[1-9].\s/", $val)) {
            return $this->praserList($val, '[1-9].');
        }

        return $val;
    }

    private function praserList($val, $delimiter)
    {
        $prased = [];
        foreach (preg_split("/\\r\\n|\\r|\\n/", $val) as $item) {
            $prased[] = $this->praserListItem($item, $delimiter);
        }
        if (count($prased) && strpos($val, 'nested') === false) {
            return sprintf(self::$ol_format, join('', $prased));
        }
        return null;
    }

    private function praserListItem($str, $delimiter)
    {
        if (preg_match("/^$delimiter/", $str)) {
            $arrstr = preg_split("/[\s,]+/", $str, 2);
            return sprintf(self::$li_format, $arrstr[1]);
        }
        return $str;
    }
}
