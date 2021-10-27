<?php 
    class Movie {
        public $nome;
        public $data;
        public $regista;
        public $etaminima;

        function __construct($nome, $data, $regista, $etaminima)
        {
            $this->nome = $nome;
            $this->data = $data;
            $this->regista = $regista;
            $this->etaminima = $etaminima;
        }

        public function adultFilm(){
            if($this->etaminima >= 18){
                return true;
            } else{
                return false;
            }
        }
    }

    $ritorno_al_futuro = new Movie("Ritorno al Futuro", "22/04/2000", "Ciaone A Tutti", 0);
    $annabelle = new Movie("Annabelle", "22/04/2018", "Riccardo Paura", 18);

?>

<pre>
    <?php 
       var_dump($ritorno_al_futuro, $annabelle);

       var_dump($annabelle->adultFilm());

       var_dump($ritorno_al_futuro->adultFilm())
    ?>
</pre>
