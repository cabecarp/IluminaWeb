@extends('layouts.site')

@section('content')


<div class="container">
    <div class="row section">
       <h3 align="center">Ponto de Iluminação</h3>
       <div class="divider"></div>
    	
    </div>
    <div class="row section">
    	<div class="col s12 m8">
    		<div class="row">
          <div class="slider">
              <ul class="slides">
                  <li>
                      <img src="{{asset('imagem_Iluminacao/ilumin2.jpg')}}">
                        <div class="caption center-align">
                            <h3>Características do ponto de Iluminação</h3>
                            <h5>Acompanhe a manutenção</h5>
                        </div>
                  </li>
                     <li>
                      <img src="{{asset('imagem_Iluminacao/ilumin2.jpg')}}">
                        <div class="caption left-align">
                            <h3>Características do ponto de Iluminação</h3>
                            <h5>Acompanhe a manutenção</h5>
                        </div>
                  </li>
                     <li>
                      <img src="{{asset('imagem_Iluminacao/ilumin2.jpg')}}">
                        <div class="caption right-align">
                            <h3>Características do ponto de Iluminação</h3>
                            <h5>Acompanhe a manutenção</h5>
                        </div>
                  </li>
                     <li>
                      <img src="{{asset('imagem_Iluminacao/ilumin2.jpg')}}">
                        <div class="caption leftr-align">
                            <h3>Características do ponto de Iluminação</h3>
                            <h5>Acompanhe a manutenção</h5>
                        </div>
                     </li>
              </ul>
          </div>      
            </div>
            <div class="row" align="center">

                <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                <button onclick="sliderNext()" class="btn blue">Próxima</button>
            </div>
    	</div>
    	<div class="col s12 m4">
    		<h4>Identificação do PI</h4>
    		<blockquote>
    			Breve descrição sobre o ponto de iluminação
    		</blockquote>
            <p><b>Código:</b> 245</p>
            <p><b>Status:</b> Ativo</p>
            <p><b>Tipo de Lâmpada:</b> Led</p>
            <p><b>Tipo de Poste:</b> Rua</p>
            <p><b>Endereço:</b> Rua João, Centro</p>
            <p><b>Cep:</b> 19700000</p>
            <p><b>Cidade:</b> Pirapora</p>
    		<p><b>Foto celula:</b> Sim</p>
            <a class="btn deep-orange darke-1" href="{{ route('site.contato') }}">Entrar em contato</a>

    	</div>
    </div>
</div>
@endsection