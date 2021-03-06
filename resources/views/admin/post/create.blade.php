@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>文章 <small>» 撰写新文章</small></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @include('admin.partials.errors')
                <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.post.store') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @include('admin.post._form')
                    <button type="submit" class="btn-submit btn btn-primary btn-lg">
                        <i class="fa fa-disk-o"></i>发布
                    </button>
                </form>
            </div>
        </div>
    </div>
@stop