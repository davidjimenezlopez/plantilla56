@extends('layoutsdashboard.base')

@section('css')

@endsection
@section('content')


<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a href="{{route('admins.index') }}">administradores</a></li>
    <li class="breadcrumb-item active">crear</li>
</ol>
<!-- Example DataTables Card-->
<div class="col-lg-8">
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user-cog"></i>Crear administradores del sistema</div>
        <div class="card-body">



            <form method="post" action="{{route('admins.update',$admin->id)}}">
                {{ method_field('PUT') }}
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ $admin->email }}">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @if ($errors->has('email')) 
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter email" name="name" value="{{$admin->name }}">
                    @if ($errors->has('name')) 
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('name') }}</strong>
                    </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="exampleFormControlSelect1">Rol</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="rol">
                        <option value="administrador">administrador</option>
                      
                    </select>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @if ($errors->has('password')) 
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
</div>

@endsection