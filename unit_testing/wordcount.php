<?php 
    // File : Wordcount.php

class wordcount{

    //membuat fungsi untuk penampung kata yang akan Dimasukkan
    public function countWords($kata){
        
        //Memecah Per Kata
        return count(explode(" ",$kata));
    }
}
?>