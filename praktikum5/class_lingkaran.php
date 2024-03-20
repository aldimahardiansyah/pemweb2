<?php
class Lingkaran
{
    /**
     * Access Modifier:
     * 1. public: properti/method dapat diakses dimanapun
     * 2. private: properti/method hanya dapat diakses di dalam class tsb.
     * 3. protected: mirip seperti private, tetapi dapat diakses juga 
     * oleh child class
     */

    //  properti
    private $jari;
    const PHI = 3.14;

    // method: function yg berada di dalam class
    // constructor: method yg otomatis berjalan ketika objek dibuat
    public function __construct($r)
    {
        $this->jari = $r;
    }

    public function getLuas()
    {
        return  self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling()
    {
        return 2 * self::PHI * $this->jari;
    }
}
