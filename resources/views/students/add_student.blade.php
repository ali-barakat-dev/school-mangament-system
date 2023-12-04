@extends('layouts.master')
@section('css')

@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> page empty</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Page Title</li>
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

                <form action="{{route('students.store')}}" method="POST">
                    @csrf
                    {{-- one row --}}
                    <div class="form-row">
                        <div class="col">
                            <label for="title">{{trans('my_parant.name_student_ar')}}</label>
                            <input type="text" name="Name_student_ar" class="form-control" >
                            @error('Name_student_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{trans('my_parant.name_student_en')}}</label>
                            <input type="text" name="name_student_en" class="form-control" >
                            @error('name_student_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- two row --}}
                    <div class="form-row">    
                        <div class="col">
                            <label for="title">{{trans('Student.Email')}}</label>
                            <input type="email" name="Email"  class="form-control">
                            @error('Email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="title">{{trans('Student.Password')}}</label>
                            <input type="password" name="Password" class="form-control" >
                            @error('Password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                 {{-- three row --}}

                      <div class="form-row">
                        <div class="form-group col">
                            <label for="inputCity">{{trans('my_parant.gender_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="gander_id">
                                <option selected>{{trans('my_parant.Choose')}}...</option>
                                @foreach($Genders as $gander)
                                    <option value="{{$gander->id}}">{{$gander->Name}}</option>
                                @endforeach 
                            </select>
                            @error('Nationality_Father_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputState">{{trans('students.National_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="National_id">
                                <option selected>{{trans('students.Choose')}}...</option>
                                 @foreach($Nationals as $National)
                                    <option value="{{$National->id}}">{{$National->Name}}</option>
                                @endforeach 
                            </select>
                            @error('National_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputState">{{trans('my_parant.Blood_Type_Father_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="Blood_Type_Father_id">
                                <option selected>{{trans('my_parant.Choose')}}...</option>
                                 @foreach($bloods as $Type_Blood)
                                    <option value="{{$Type_Blood->id}}">{{$Type_Blood->Name}}</option>
                                @endforeach
                            </select>
                            @error('Blood_Type_Father_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputZip">{{trans('student.birth')}}</label>
                            <br>
                                <input type="date" name="birth"  class=" my-1 mr-sm-2">
                            @error('birth')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- four row --}}

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputCity">{{trans('student.grades')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="student_grades">
                                <option selected>{{trans('student.Choose')}}...</option>
                                 @foreach($Grades as $grade)
                                    <option value="{{$grade->id}}">{{$grade->Name}}</option>
                                @endforeach 
                            </select>
                            @error('student_grades')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputState">{{trans('students.class_room')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="class_room_id">
                                <option selected>{{trans('my_parant.Choose')}}...</option>
                                 @foreach($my_class as $class)
                                    <option value="{{$class->id}}">{{$class->Name}}</option>
                                @endforeach
                            </select>
                            @error('Blood_Type_Father_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputZip">{{trans('my_parant.Religion_Father_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="Religion_Father_id">
                                <option selected>{{trans('my_parant.Choose')}}...</option>
                                @foreach($sections as $section)
                                    <option value="{{$section->id}}">{{$section->Name}}</option>
                                @endforeach 
                            </select>
                            @error('Religion_Father_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="inputZip">{{trans('my_parant.Religion_Father_id')}}</label>
                            <select class="custom-select my-1 mr-sm-2" name="Religion_Father_id">
                                <option selected>{{trans('my_parant.Choose')}}...</option>
                                @foreach($parants as $parant)
                                    <option value="{{$parant->id}}">{{$parant->Name}}</option>
                                @endforeach 
                            </select>
                            @error('Religion_Father_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-success btn-sm  btn-lg pull-right" 
                            type="submit">{{trans('Parent_trans.Next')}}
                    </button> 
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
