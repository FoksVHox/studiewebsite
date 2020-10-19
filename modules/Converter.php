<?php
// This class contains all the things that don't really fit into other classes, but we still need to be accessible from everywhere
class Converter
{
    use Singleton;

    public function run()
    {
        $this->ConvertDocs();
    }

    public function ConvertDocs()
    {
        $files = scandir('../docs/src');
        array_shift($files);array_shift($files);

        //Config::i()->path().'/docs/src/'.$files[2]
        print_r($files);
         for( $x = 0; $x <= count($files)-1; $x++)
         {
             readfile('../docs/src/'.$files[$x]);
             //chmod('../docs',0777);
             fwrite(fopen('../docs/'.$files[$x], 'w'),'does it wor?k');
         }
    }
}