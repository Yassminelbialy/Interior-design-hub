@extends('admin.base')
@section('adminbase')



<div class="container mt-4">
    <div class="row">
        <div class="col-lg-8">
            {{ Form::open(['route' => 'manager.sliderImage.store','enctype' => 'multipart/form-data','method'=>'post'])}}
            <div class="form-group text-light">
            
            <label for="exampleFormControlFile1" >Select Project Name</label>
            <br>
                <select name="title">

                        @foreach($projectsName as $pname)
                            <option  value="{{$pname->id}}">{{$pname->title}}</option>
                        @endforeach

                </select>
            </div>
            <div class="form-group text-light">
                <label for="exampleFormControlFile1">Upload Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="proImg">
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection