@extends('template')
<!-- page content Pagina de Formulario -->
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Emitente</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Editar Emitente: {{$emitente->id}}<small></small></h2>

          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          {!! Form::open(['url'=>'Emitente/'.$emitente->id.'/update']) !!}  
          <div class="form-horizontal form-label-left" novalidate>
            
          </p>
          <span class="section">Editar informações</span>
          <div class="item form-group">
            {!! Form::label('nome','Nome:',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}<span class="required">*</span>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input class="form-control col-md-7 col-xs-12" name="id" value="{{$emitente->id}}" disable> 
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('nome','Nome:',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}<span class="required">*</span>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input class="form-control col-md-7 col-xs-12" name="nome" value="{{$emitente->nome}}"> 
            </div>
          </div>
          <div class="item form-group">
            <label for="setor" class="control-label col-md-3 col-sm-3 col-xs-12">Setor<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="setor" class="form-control col-md-7 col-xs-12">
                <option active>{{$emitente->setor}}</option>
                <option>Finanças</option>
                <option>RH</option>
                <option>Marketing</option>
                <option>Produção</option>
                <option>Outro</option>
              </select>
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inf_adicionais','Informações adicionais:',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::textarea('inf_adicionais', {{$emitente->inf_adicionais}},['class'=>'form-control col-md-7 col-xs-12']) !!}
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
           {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!} 
           <button id="send" type="submit" class="btn btn-success">Limpar</button>
         </div>
       </div>
     </div>
     {!! Form::close() !!} 
   </div>
 </div>
</div>
</div>
</div>
</div>
@endsection