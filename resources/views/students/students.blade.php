@extends('layouts.master')
@section('css')

@section('title')
students
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">students</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">students</li>
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
                <a href="{{route('students.create')}}" class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="button">add Teacher</a>
                <div class="table-responsive">
                    <table id="datatable" class="table table-hover table-sm tablebordered p-0" data-page-lenth="50" >
                <thead>
                    <tr class="table-success">
                        <th>#</th>
                        <th>{{__('Students.Email')}}</th>
                        <th>{{__('students.Name')}}</th>
                        <th>{{__('students.Gender')}}</th>
                        <th>{{__('students.specialization_id')}}</th>
                        <th>{{__('students.joining_Date')}}</th>    
                        <th>{{__('students.Address')}} </th>  
                        <th>{{__('students.procsessn')}} </th>  
                    </tr>
                </thead>
                <tbody>
                     @foreach ($students as $student)
                    <tr>
                    <td> {{$student->id}}</td>
                    <td>{{$student->Email}}</td>
                    <td>{{$student->Name}}</td>
                    <td>{{$student->genders->Name}}</td>
                    <td>{{$student->joining_Date}}</td>
                    <td>{{$student->Address}}</td>
                    <td>{{$student->speciallztions->Name}}</td>
                    
                    <td>
                        <a class="btn btn-info btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        
                        <a class="btn btn-danger btn-sm" >
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                 @endforeach 
                </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
