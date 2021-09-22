@extends('user.master')
@section('title', 'แก้ไขฐานข้อมูล')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12"><br/>
            <h3 align="center">แก้ไขข้อมูลผู้ใช้ระบบ</h3><br/>

            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors -> all() as $errors)
                    <li>{{$errors}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="{{ action('App\Http\Controllers\UsersController@update', $id) }}"> 
                <!-- csrf = cross-site request forgery ป้องกันการ request ที่ไม่พึงประสงค์ -->
                {{csrf_field()}} 
                <div class="form-group"><input type="text" name="fname" class="form-control" placeholder="ป้อนชื่อ" value="{{ $user -> fname }}"/></div><br/>
                <div class="form-group"><input type="text" name="lname" class="form-control" placeholder="ป้อนชื่อสกุล" value="{{ $user -> lname }}"/></div><br/>
                <div class="form-group"><input type="submit" class="btn btn-primary" value="อัพเดท" /></div>
                @method('PATCH')
            </form>
        </div>
    </div>
</div>
    
<!-- stop or endsection is the same -->
@endsection