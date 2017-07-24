<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $existe = Pagina::where('tipo','=','sobre')->count();

       



      
       if($existe){
       	$paginaSobre = Pagina::where('tipo','=','sobre')->
        first();
       }else{
       	$paginaSobre = new Pagina();
       }

        

       
    
       
       $paginaSobre->titulo = "IluminaWeb";
       $paginaSobre->descricao = " Acompanhe a manutenção do ponto de iluminação mais próximo de você";
       $paginaSobre->texto = " A iluminaWeb disponibiliza, por meio de seu site, a visualização dos pontos de iluminação pública das cidades parceiras. Garantindo assim, segurança e agilidade nas manutenções.";
       $paginaSobre->imagem = "imagem_Iluminacao/ilumin1.jpg";
       $paginaSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29552.513179855003!2d-51.31078649453299!3d-22.199668353067807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949475cb5b19608d%3A0x9a94779a65349de2!2zUmVnLiBGZWlqw7MsIFNQ!5e0!3m2!1spt-BR!2sbr!4v1499972342482" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
       $paginaSobre->tipo = "sobre";
       $paginaSobre->save();
       echo "Paginas Sobre criada com sucesso";

       $existe = Pagina::where('tipo','=','contato')->count();

       



      
       if($existe){
        $paginaContato = Pagina::where('tipo','=','contato')->
        first();
       }else{
        $paginaContato = new Pagina();
       }

        

       
    
       
       $paginaContato->titulo = "Entre em contato";
       $paginaContato->descricao = "Preeencha o formulário";
       $paginaContato->texto = "Contato";
       $paginaContato->imagem = "imagem_Iluminacao/ilumin1.jpg";
       $paginaContato->email = "rodriggokbs@gmail.com";
      
       $paginaContato->tipo = "contato";
       $paginaContato->save();
       echo "Paginas Contato criada com sucesso";
       

       }
    }

