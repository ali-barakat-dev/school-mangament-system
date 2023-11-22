@extends('layouts.master')
@section('css')a
@section('title')
{{__('mainpage.School_management')}}/{{__('grades.Add_grade')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('grades.Add_grade')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('grades.Add_grade')}}</li>
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
            <div class="card-body col-md-6 mb-30">
                <div class="container">
                <form action="{{route('grad.store')}}" method="POST">
                    @csrf
                    <label for="">{{__('grades.name_grade_en')}}</label><br>
                    <input class="form-control form-control-lg" type="text" name="name_en" placeholder="{{__('grades.name_grade_en')}}" aria-label=".form-control-lg example">
                    @error('name_en')
                    <small class="form-text text-danger" >{{$message}}</small> 
                    @enderror
                    <br>
                    <label for="">{{__('grades.name_grade_ar')}}</label><br>
                    <input class="form-control form-control-md" type="text" name="name_ar" placeholder="{{__('grades.name_grade_ar')}}" aria-label=".form-control-lg example">
                    @error('name_ar')
                    <small class="form-text text-danger" >{{$message}}</small> 
                    @enderror
                    <br>
                    <label for="">{{__('grades.notes')}}</label><br>
                    <input class="form-control form-control-lg" type="text" name="procsess" placeholder="{{__('grades.notes')}}" aria-label=".form-control-lg example">
                    @error('procsess')
                    <small class="form-text text-danger" >{{$message}}</small> 
                    @enderror
                    <br>
                     <input type="submit" class="btn btn-dark" value="{{__('grades.submit')}}">
                </form>
            </div>
               
        </div>
    </div>
    </div>
    
</div>
<!-- row closed -->
@endsection

