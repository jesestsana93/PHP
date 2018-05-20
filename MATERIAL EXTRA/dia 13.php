<?php
//http://www.fpdf.org/
//Manera controlada de acceder a las funciones
    class Autor{
        private $nombre;
        
        public function setNombre ($nombre){
            $this->nombre=$nombre;
        }
        
        public function __set ($propiedad, $valor) {
            $method = 'set'.ucfirst($propiedad); //setNombre
            if (methond_exist ($this, $method)){
                $this->$method ($valor);
            } else if (property_exists ($this, $propiedad)) {
                $this->$propiedad = $valor;
            }
        }

        $autor->nombre='Román';
        echo $ $autor->nombre;

        public function __get ($propiedad){
            $method = 'get'.ucfirst($propiedad); //getNombre
            if (methond_exist ($this, $method)){
                return $this->$method;
            }if (property_exists ($this, $propiedad)) {
                return $this->$propiedad;
            }
        }
    }
    
    $sql = "SELECT * FROM autor";
    $statement = $pdo->query($sql);
    
    //PDO
    //1
    while($fila=$statement->fecth(PDO::FETCH_ASSOC)){
        $autor=new Autor();
        $autor->nombre=$fila['nombre'];
        $autores[]=$autor;
    }
    
    //2
    while($autor=$statement->fetch(PDO::FETCH_CLASS,'Autor')){
        $autores[]=$autor;
    }
        
    //3
    $autores=$statement->fetchAll(PDO::FETCH_CLASS,'Autor');


    include_once('./fpdf/fpdf.php');
    $pdf=new FPDF('P','mm','Letter');
    $pdf->AddPage();
    $pdf->SetFont('Times','B',16);
    $pdf->SetXY(20,20);
    $pdf->SetFillColor('r','g','b');
    $pdf->SetDrawColor();
    $pdf->SetTextColor();
    $pdf->SetMargins('L','T','R');
    $pdf->Cell(0,0,'Hola',1,0,'L',1);
    $pdf->Output();
    
    class PDF extends FPDF{
        function Header(){
            $this->Image('imagen.jpg','X','Y');
        }
        function Footer(){
            $this->Cell(0,10,'Pagina'.$this->PageNo().' de{nb}',0,0,'C');        
        }
    }
?>