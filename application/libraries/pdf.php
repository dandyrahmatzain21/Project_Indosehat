<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;
class pdf extends Dompdf{
    protected $ci;
    private $filename;

    public function __construct()
    {
       parent::__construct();
        $this->ci =& get_instance();
    }

    public function setFileName($filename)
   {
      $this->filename = $filename;
   }

   public function loadView($viewFile, $data = array())
   {
      $options = new Options();
      $options->setChroot('/xampp/htdocs/indosehat/');
      $options->setDefaultFont('courier');

      $this->setOptions($options);

      $html = $this->ci->load->view($viewFile, $data, true);
      $this->loadHtml($html);
      $this->render();
      $this->stream($this->filename, ['Attachment' => 0]);
   }

   function PdfGenerator($html, $filename, $paper, $orientation){

    $dompdf = new Dompdf();
    $options = $dompdf->getOptions();
    $options->setChroot('/xampp/htdocs/indosehat/');
    $options->setDefaultFont('Courier');
    $dompdf->setOptions($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper($paper,$orientation);
    $dompdf->render();
    $dompdf->stream($filename, array('Attachment'=>0));
   }


}