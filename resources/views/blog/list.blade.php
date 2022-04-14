{{-- 
  ①共通テンプレlayout.blade.phpを作る
  ②共通ヘッダーを作る
  ③共通フッターを作る
  ④共通テンプレを継承したリストを作る
  --}}
@extends('layout')
@section('title','ブログ一覧')
@section('content')
{{-- 
    ①リンクを作る
    ②routeを作る
    ③(CM)Controllerを作る
    ④(V)詳細画面を作る
 --}}
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <h2>ブログ記事一覧</h2>
    @if(session('error_msg'))
        <p class="text-danger">
            {{session('error_msg')}}
        </p>
</div>
</div>
@endsection