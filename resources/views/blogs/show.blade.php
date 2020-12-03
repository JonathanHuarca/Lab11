@extends('layouts.app')
@section('content')
<br/><br/>
    <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <br/>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
   <div style="text-align:center">
    <h2> Show Contact</h2>
  </div>
  <br/>
    <div class="card bg-light mb-3" style="padding: 10px;">
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $blog->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $blog->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cellphone:</strong>
                {{ $blog->cellphone }}
            </div>
        </div>
    </div>
@endsection

