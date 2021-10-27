<?php 
    class Movie {
        public $nome;
        public $data;
        public $regista;
    }

    function __construct($nome, $data, $regista)
    {
        $this->nome = $nome;
        $this->data = $data;
        $this->regista = $regista;
    }

    $ritorno_al_futuro = new Movie("Ritorno al Futuro", "22/04/2000", "Ciaone A Tutti");
    $annabelle = new Movie("Annabelle", "22/04/2018", "Riccardo Paura");

?>

<pre>
    <?php 
       var_dump($ritorno_al_futuro, $annabelle);
    ?>
</pre>