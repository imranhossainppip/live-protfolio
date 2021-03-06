@extends('backend.master')
@section('title')
    View Slider
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Slider</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Slider</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-md-12">
                        <div class="card">
                            @if ($countSlider<1)
                            <div class="card-header">
                                <h3>Slider List
                                    <a href="{{route('slider.create')}}" class="btn btn-info btn-sm float-right"><i class="fa fa-plus-circle"></i>Add Slider</a>
                                </h3>
                            </div>
                            @endif
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Slider</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sliders as $key => $slider)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td><img src="{{url('backend/images/slider/', $slider->slider)}}" alt="" height="50" width="50"></td>
                                            <td>{{$slider->name}}</td>
                                            <td>{{$slider->designation}}</td>
                                            <td>
                                                <a class="btn btn-success btn-sm mr-1" href="{{route('slider.edit', $slider->id)}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a class="btn btn-danger btn-sm mr-1" id="delete" href="{{route('slider.destroy', $slider->id)}}">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div><!-- /.card-body -->
                        </div>
                    </section>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
