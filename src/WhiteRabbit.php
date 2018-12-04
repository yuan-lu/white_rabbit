<?php

class WhiteRabbit
{
    public function findMedianLetterInFile($filePath)
    {
        return array("letter"=>$this->findMedianLetter($this->parseFile($filePath),$occurrences),"count"=>$occurrences);
    }

    /**
     * Parse the input file for letters.
     * @param $filePath
     */
    private function parseFile ($filePath)
    {
        //TODO implement this!
        $pf=fopen("$filePath");


        return pf;

    }

    public function testParseFile($filePath){
        $pf = $this->parseFile($filePath);

        echo 'this is file path test';
        return $pf;
    }

    /**
     * Return the letter whose occurrences are the median.
     * @param $parsedFile
     * @param $occurrences
     */
    private function findMedianLetter($parsedFile, &$occurrences)
    {
        //TODO implement this!
    }


    public function debugTest(){
        echo "this is debug test";
    }

    public $text="hello";
}

$wr=new WhiteRabbit;
$wr->debugTest();
#echo $wr->text;
echo '<br>';

$fp="D:/Apache2.4.23/htdocs/white_rabbit/txt";
$wr->testParseFile(fp);