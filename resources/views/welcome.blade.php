@extends('layout')

@section('content')
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
                <h2>About Me</h2>
                <h5>Photo of me:</h5>
                <div class="fakeimg">Fake Image</div>
                <p>Some text about me..</p>
                <h3>Some Links</h3>
                <p>Social media links:</p>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Facebook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Telegram</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Instagram</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Vkontakte</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                @foreach($articles as $article)
                <h2><a href="/{{$article->id}}">{{$article->title}}</a></h2>
                <h5>Uploaded, {{$article->created_at}}</h5>
                <div class="fakeimg">Fake Image</div>
                <p>Some text..</p>
                <p>{{$res = substr($article->description,0,120).'...'}}</p>
                <br>
                @endforeach
            </div>
        </div>
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Footer</p>
    </div>

@endsection
