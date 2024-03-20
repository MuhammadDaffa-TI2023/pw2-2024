<?php
class hewanmamalia 
{
    public $warna;
    public $namahewan;
    public $habitat;
    
    function makan()
    {
    return "mamalia makan";
    }
    function minum()
    {
    return "mamalia minum";
    }
    function menyusui()
    {
        return "mamalia menyusui";
    }
}
$mamalia= new hewanmamalia();
$mamalia->makan();
echo $mamalia->namahewan= "Lumba lumba";
echo $mamalia->warna= "ABU ABU";
echo $mamalia->habitat= "laut";
echo "<br>";
echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();
echo "<br>";


?>