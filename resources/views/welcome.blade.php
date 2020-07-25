@extends('layouts.app')

@section('content')
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="panel">
                    <div class="panel-heading text-center text-uppercase">{{ __('List of Users') }}
                        <a href="{{ route('pdf-download') }}" class="btn btn-sm btn-warning" style="float:right"><i class="fa fa-arrow-down"></i> Download PDF</a>
                    </div>
                     <div class="panel-body tabel-responsive">
                        <table class="table table-bordered">
                            @if(count($users) > 0)
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Join Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key=>$value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ \Carbon\Carbon::parse($value->created_at)->format('d/m/Y') }}</td>
                                    <td class="btn-group btn-group-sm" style="width: 100%">
                                        <a href="" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> View</a>
                                        <a href="" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                @endforeach
                                </tr>
                            </tbody>
                            @endif
                        </table>
                     </div>
                     <div class="panel-footer"></div>
                 </div>
             </div>
         </div>
     </div>
 @endsection