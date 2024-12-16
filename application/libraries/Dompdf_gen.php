<?php

use Dompdf\Dompdf;
use Dompdf\Options;

class Dompdf_gen {
    protected $dompdf;

    public function __construct() {
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        
        $this->dompdf = new Dompdf($options);
    }

    public function loadHtml($html) {
        return $this->dompdf->loadHtml($html);
    }

    public function setPaper($paperSize, $paperOrientation) {
        return $this->dompdf->setPaper($paperSize, $paperOrientation);
    }

    public function render() {
        return $this->dompdf->render();
    }

    public function stream($fileName, $options) {
        return $this->dompdf->stream($fileName, $options);
    }
}

