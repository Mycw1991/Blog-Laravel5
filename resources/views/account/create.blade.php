

@extends ('templates.default')

@section('content')

    <h1>Create new account</h1>

    {!! Form::open(['route' => 'account-create-post']) !!}
    
    <div>
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email') !!}
       @if($errors->has('email')){!! $errors->first('email') !!}@endif
    </div>

    <div>
        {!!  Form::label('username', 'Username;') !!}
        {!! Form::text('username') !!}
       @if($errors->has('username')){!! $errors->first('username') !!}@endif
    </div>

    <div>
        {!!  Form::label('password', 'Password:') !!}
        {!! Form::password('password') !!}
       @if($errors->has('password')){!! $errors->first('password') !!}@endif
    </div>

    <div>
        {!! Form::label('password_again', 'Confirm password:') !!}
        {!! Form::password('password_again') !!}
       @if($errors->has('password_again')){!! $errors->first('password_again') !!}@endif
    </div>

    <div>{!! Form::submit('Create account') !!}</div>

    {!!  Form::close() !!}

@stop