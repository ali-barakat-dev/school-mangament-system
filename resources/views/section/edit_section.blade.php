@extends('layouts.master')
@section('css')

@section('title')
{{__('mainpage.School_management')}}/{{__('section.add_section')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('section.add_section')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('section.index')}}" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">{{__('section.add_section')}}</li>
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
                <form action="{{route('section.update',$section->id)}}" method="POST">
                    @csrf
                    <label for="">{{__('section.name_section_ar')}}</label><br>

                    <input class="form-control form-control-lg" type="text" name="name_ar" value="{{$section->name_ar}}"
                    placeholder="{{__('section.name_section_ar')}}" aria-label=".form-control-lg example">
                    @error('name_ar')
                        {{$message}}
                    @enderror
                    <br>
                    <label for="">{{__('section.name_section_en')}}</label><br>
                    <input class="form-control form-control-md" type="text" name="name_en" value="{{$section->name_en}}"
                    placeholder="{{__('section.name_section_en')}}" aria-label=".form-control-lg example">
                    @error('name_en')
                    {{$message}}
                @enderror
                <br>
                    <label >{{__('grades.name_grade_ar')}}</label>
                    <br>
              <select class="form-control form-control-lg"  name="grade_id"  >
              @foreach ($grades as $grade)
              <option value="{{$grade->id}}">{{$grade->name_ar}}</option>
              @endforeach
                  <br>
                </select>
                <br>
                <label for="">{{__('grades.name_class_ar')}}</label>
                <select class="form-control form-control-lg " id="classroom_id"  name="classroom_id" >
                     @foreach ($classes as $class)
                    <option value="{{$class->id}}">{{$class->name_class_ar}}</option>
                    @endforeach 
                        <br>
                      </select>
                      <label>{{__('section.status')}}</label>
                      <input  class="form-control form-control-md" type="text" name="status" value="{{$section->status}}">
                    <br><br> <input type="submit" class="btn btn-dark" value="{{__('section.submit')}}">
                </form>
            </div>
               
        </div>
    </div>
    </div>
    
</div>
<!-- row closed -->
@endsection
@section('js')
<script>
    $(document).ready(function () {
        var classroom_id = $(this).val();
        $('classroom_id').append($('<option>', {
    value: 1,
    text: 'My option'
}));
        // $('.classroom_id').append'<option value=1>My option</option>';
        // $('select[name="grade_id"]').on('change', function () {
        //     var grade_id = $(this).val();
        //     if (grade_id) {
        //         $.ajax({
        //             url: {{ URL::to('classes') }}/ + grade_id,
        //             type: "GET",
        //             dataType: "json",
        //             success: function (data) {
        //                 $('select[name="classroom_id"]').empty();
        //                 $.each(data, function (key, value) {
        //                     $('select[name="classroom_id"]').append('class_id');
        //                 });
        //             },
        //         });
            // } else {
            //     console.log('AJAX load did not work');
            // }
        });



</script>
@endsection