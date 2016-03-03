@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6">
                <h3>Archives <small>» Listing</small></h3>
            </div>
            <div class="col-xs-6 text-right">
                <a href="/admin/archive/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> New Archive
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                @include('admin.partials.errors')
                @include('admin.partials.success')
                <table id="archives-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Archive</th>
                        <th>Count</th>
                        <th class="xs-hidden">Slug</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($archives as $archive)
                        <tr>
                            <td>{{ $archive->name }}</td>
                            <td>{{ $archive->counts }}</td>
                            <td class="xs-hidden">{{ $archive->slug }}</td>
                            <td>{{ $archive->created_at->format('Y-n-j') }}</td>
                            <td>
                                <a href="/admin/archive/{{ $archive->id }}/edit" class="btn btn-xs btn-info">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop