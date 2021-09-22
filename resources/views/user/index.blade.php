@extends('user.master')
@section('title','Welcome Homepage')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12"><br/>
            <h1>Homepage</h1>
            <div align="right"><a href="{{route('user.create')}}" class="btn btn-success">Add User</a></div>

            @if(\Session::has('deleted'))
            <div class="alert alert-success">
                <p>{{ \Session::get('deleted') }}</p>
            </div>
            @endif

            @if(\Session::has('updated'))
            <div class="alert alert-success">
                <p>{{ \Session::get('updated') }}</p>
            </div>
            @endif

            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($users as $row)
                <tr>
                    <td>{{$row['id']}}</td>
                    <td>{{$row['fname']}}</td>
                    <td>{{$row['lname']}}</td>
                    <td><a href="{{ route('user.edit', $row['id']) }}" class="btn btn-warning">Edit</a></td>
                    <td>
                        {{-- <form method="POST" class="delete_form" action="{{ action('UsersController@destroy', $row['id']) }}"> --}}
                        <form method="POST" class="delete_form" action="{{ route('user.destroy', $row['id']) }}">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() { 
        $('.delete_form').on('submit', function() {
            if(confirm("คุณต้องการลบข้อมูลหรือไม่ ?")) {
                return true;
            } else {
                return false;
            }
        })
    })
</script>

@stop