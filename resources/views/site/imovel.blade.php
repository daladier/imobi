@extends('layouts.site')

@section('content')

<div class="container">
	<div class="row section">
    	<h3 align="center">Imóvel</h3>
    	<div class="divider"></div>
    </div>
    <div class="row section">
    	<div class="col s12 m8">
    		<div class="row">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="{{ asset('img/modelo_detalhe_1.jpg') }}" alt="">
                            <div class="caption center-align">
                                <h3>Título da Imagem</h3>
                                <h5>Descrição do Slide</h5>
                            </div>                            
                        </li>
                        <li>
                            <img src="{{ asset('img/modelo_detalhe_1.jpg') }}" alt="">
                            <div class="caption left-align">
                                <h3>Título da Imagem</h3>
                                <h5>Descrição do Slide</h5>
                            </div>                            
                        </li>
                        <li>
                            <img src="{{ asset('img/modelo_detalhe_1.jpg') }}" alt="">
                            <div class="caption right-align">
                                <h3>Título da Imagem</h3>
                                <h5>Descrição do Slide</h5>
                            </div>                            
                        </li>
                        <li>
                            <img src="{{ asset('img/modelo_detalhe_1.jpg') }}" alt="">
                            <div class="caption left-align">
                                <h3>Título da Imagem</h3>
                                <h5>Descrição do Slide</h5>
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
    		<h4>Título do Imóvel</h4>
    		<blockquote>
    			Descrição breve do imóvel.
    		</blockquote>
    		<p><b>Código:</b> 245</p>
            <p><b>Status:</b> Disponível</p>
            <p><b>Tipo:</b> Casa</p>
            <p><b>Endereço:</b> Centro</p>
            <p><b>CEP:</b> 53.637-107</p>
            <p><b>Cidade:</b> Cidade</p>
            <p><b>Valor:</b> R$ 2.300,00</p>
            <a class="btn deep-orange darken-1" href="{{ route ('site.contato')}}">Entrar em Contato</a>
    	</div>
    </div>
</div>
@endsection
