@extends('template')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="m-0 font-weight-bold text-primary float-left">Lista de Diretores</div>
                    <a href="#" onclick="CreateDiretor()"  class="btn btn-primary btn-sm float-right">Novo</a>
                </div>
                <div class="d-flex justify-content-center" id="Load">
                    <div class="spinner-border m-5" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                        <div id='diretores'>
                        </div>
                </div>
              
            </div>
        </div>
    </div>
    @include('site.diretor.modal.create') 
@endsection
@section('section_script')
    @include('site.diretor.script.index')
    @include('site.diretor.script.delete')
    @include('site.diretor.script.create')
@endsection
