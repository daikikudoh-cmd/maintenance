@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Sign up</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'お名前') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name_kana', 'お名前(かな)') !!}
                    {!! Form::text('name_kana', old('name_kana'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('tell', '電話番号') !!}
                    {!! Form::text('tell', old('tell'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('address', '住所') !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('car_number', 'ナンバープレート') !!}
                    {!! Form::number('car_number', old('car_number'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('car_type', '車種') !!}
                    {!! Form::text('car_type', old('car_type'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('parking_information', '駐車場') !!}
                    {!! Form::text('parking_information', old('parking_information'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('loaner_car', '代車契約') !!}
                    {!! Form::select('loaner_car', [
                    '1' => '車検時 代車 有◯  |  法定点検時　代車　有◯', 
                    '2' => '車検時 代車 有◯  |  法定点検時　代車　無×', 
                    '3' => '車検時 代車 無×  |  法定点検時　代車　有◯', 
                    '4' => '車検時 代車 無×  |  法定点検時　代車　無×', 
                    ]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード（確認用）') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
