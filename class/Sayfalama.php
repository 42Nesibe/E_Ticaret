      <?php
    /*      yazar: cihan MENGE */

      class Sayfalama {
      public $toplam;
      public $sayfa_basina;
      public $sayfa_sayisi;
      public $url;
      public $baslangic;
      public $ilerigeri;
      public $ilkson;
      public $sayfa;
      private $set;
	  
      function __construct() 
	  {
		  $this->sayfa_basina=1;
		  $this->baslangic='0,10';
		  $this->ilerigeri=true;
		  $this->ilkson=true;
		  $this->sayfa=1;
		  $this->set=false;
      }

      function hazirla()
      {
          $this->sayfa=$this->sayfa < 1 ? 1 :$this->sayfa;
          $this->sayfa_sayisi=ceil($this->toplam/$this->sayfa_basina);
          $this->baslangic=(($this->sayfa-1)*$this->sayfa_basina);
          $this->set=true;



      }
	  
	  
      function link($sayfa) 
	  {
		return sprintf($this->url,$sayfa);
      }
	  
      function sayfala() 
	  {
		  if($this->set==false) $this->hazirla();
			  $ilk_sayfa=$this->sayfa-5;
			  $son_sayfa=$this->sayfa+5;
			  
		  if($this->ilkson==true) 
		  {
			  $ilk_link='<li><a class="ilkson" href="'.$this->link(1).'">&laquo;</a></li>';
			  $son_link='<li><a class="ilkson" href="'.$this->link($this->sayfa_sayisi).'">&raquo;</a></li>';
		  } else $ilk_link=$son_link='';
		  if($ilk_sayfa <=1 ){$ilk_sayfa=1;$ilk_link='';}
		  if($son_sayfa >= $this->sayfa_sayisi ){$son_sayfa=$this->sayfa_sayisi;$son_link=' ';}
		  $sayfalar='<!-- sayfalama başlangıç --><ul class="control-thumb">';
		  $sayfalar.=$ilk_link;
		  for($i=$ilk_sayfa;$i<=$son_sayfa;$i++){
		  $class= ($this->sayfa==$i) ? 'active' : 'pasif_sayfa';
		  $sayfalar.='<li class="'.$class.' default"><a href="'.$this->link($i).'" title="'.$i.'. Sayfa" class="ajax-page">'.$i.'</a><i class="fa fa-angle-right"></i></li>';
		  }
		  $sayfalar.=$son_link;
		  $sayfalar.='</ul><!-- sayfalama bitiş -->';
		  return $sayfalar;
      }
      }
      ?> 