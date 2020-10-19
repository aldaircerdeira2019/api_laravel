@extends('template')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="m-0 font-weight-bold text-primary float-left">Lista de Atores</div>
                    <a href="#" onclick="CreateAtor()"  class="btn btn-primary btn-sm float-right">Novo</a>
                </div>
                <div class="d-flex justify-content-center" id="Load">
                    <div class="spinner-border m-5" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                        <div id='atores'>
                        </div>
                </div>
              
            </div>
        </div>
    </div>
    @include('site.ator.modal.create') 
@endsection
@section('section_script')
    @include('site.ator.script.index')
    @include('site.ator.script.delete')
    @include('site.ator.script.create')
    {{-- @include('site.home.script.show') --}}
@endsection
