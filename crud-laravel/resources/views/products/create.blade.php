@extends('products.master')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <h2>Nuevo Producto</h2>
                
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <a href="{{route('products.index')}}" class="btn btn-primary">Atras</a>
            </div>

            <div class="pull-right">
                <a href="{{route('products.index')}}" class="btn btn-primary">Atras</a>
            </div>
        </div>
    </div>
    
    <form action="{{route('products.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nombre">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('detail')?' has-error':''}}">
                    <strong>Detalle:</strong>
                    <textarea name="detail" id="detail"  rows="4" placeholder="Detalle" class="form-control"></textarea>
                    <span class="text-danger">{{$errors->first('detail')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
        </div>
    </form>
@endsection