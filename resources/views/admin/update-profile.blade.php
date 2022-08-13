@extends("layouts.master")
@section("update-profile")

    @if(Session::has('success-update'))
        {{ Session::get('success-update') }}
    @endif

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif

    <h2>Update profile</h2>
    <a href="{{route('dashboard')}}">go to dashboard</a>
    <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
    <br>
        <input type="text" name="name" placeholder="name" value="{{ $user->name }}" value="{{ old('name') }}"/>
        <input type="text" name="email_phone" placeholder="email-phone" value="{{ $user->email_phone }}" value="{{ old('email_phone') }}"/>
        <input type="file" name="avatar"/>
        <input type="submit"/>
    </form>

@stop
