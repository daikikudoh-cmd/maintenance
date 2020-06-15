@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div>
            <p>インターネットでの車両点検予約へご協力ありがとうございます。 </p>

            <table>
                <tr>
                    <td>お客様名</td>
                    <td>{{ Auth::user()->name }} 様</td>
                </tr>
                <tr>
                    <td>ご住所</td>
                    <td>{{ Auth::user()->address }}</td>
                </tr>
                <tr>
                    <td>車両ナンバー</td>
                    <td>{{ Auth::user()->car_number }}</td>
                </tr>
                <tr>
                    <td>車種</td>
                    <td>{{ Auth::user()->car_type }}</td>
                </tr>
            </table>

            <p>上記車両、お伺い住所で間違い有りませんか？</p>
                {!! link_to_route('signup.get', 'はい', [], ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('logout.get', 'いいえ') !!}
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
