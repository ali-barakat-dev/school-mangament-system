@extends('layouts.master')
@section('css')

@section('title')
{{__('grades.title_page')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{__('grades.List_grade')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('grades.List_grade')}}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->


<div class="row">

    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
              <p>{{__('grades.List_grade')}}</p>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('grades.name_grade')}}</th>
                        <th scope="col">{{__('grades.notes')}}</th>
                        <th scope="col">{{__('grades.procsess')}}</th>
                     
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($grades as $grade)
                      <tr>
                        <th scope="row">{{$grade->id}}</th>
                        <td>
                          <a href="{{route('grad.show',$grade->id)}}">
                           
                            {{$grade->name}}</a></td>
                        <td>{{$grade->procsess}}</td>
                   <td><a class="btn btn-info btn-sm" href="{{route('grad.edit',$grade->id)}}">
                    <i class="fa fa-edit"></i></a>
                   <a class="btn btn-danger btn-sm" href="{{route('grade_delete',$grade->id)}}"  >
                    <i class="fa fa-trash"></i></a></td>
                      </tr>    
                      
                      @endforeach
                    </tbody>
                  </table>
            </div>
            <a class="btn btn-dark" href="{{route('grad.create')}}">{{__('grades.Add_grade')}}</a>
        </div>
    </div>
</div>

<!-- row closed -->
@endsection
