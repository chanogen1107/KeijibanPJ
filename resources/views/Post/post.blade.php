@extends('layouts.login')

@section('content')
<p>投稿ページです</p>
<button class=btn_blue>js動作確認ボタン</button>
<h1 class=title>css確認うさぎ</h1>


<div class=box>
    <form>
        <div class=post_category>
            <label class=post_category_label>サブカテゴリー</label>
            <select class=post_category_title>
                <option class=post_category_select>サブカテゴリー１</option>
                <option class=post_category_select>サブカテゴリー２</option>
            </select>
        </div>
        <div class=post_title>
            <label class=post_title_label>タイトル</label>
            <input class=post_title_text></input>
        </div>
        <div class=post_item>
            <label class=post_item_label>本文</label>
            <textarea class=post_item_text></textarea>
        </div>
        <button class="post_register_btn btn_blue">登録</button>
    </form>
</div>
@endsection