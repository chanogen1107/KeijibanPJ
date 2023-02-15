@extends('layouts.login')

@section('content')
<p>カテゴリーページです</p>
<button class=btn_blue>js動作確認ボタン</button>
<h1 class=title>css確認うさぎ</h1>

<div class=box>
    <div class=category_box>
        <form class=category_register_main>
            <div><label class=category_main_label>新規メインカテゴリー</label></div>
            <div><input class=category_main_input></input></div>
            <div><button class="category_main_btn btn_blue">登録</button></div>
        </form>
        <form class=category_register_sub>
            <div><label class=category_sub_label>新規メインカテゴリー</label></div>
            <div><select>
                <option>メインカテゴリー１</option>
                <option>メインカテゴリー２</option>
            </select></div>
            <div><label class=category_sub_label>新規メインカテゴリー</label></div>
            <div><input class=category_sub_input></input></div>
            <div><button class="category_sub_btn btn_blue">登録</button></div>
        </form>
    </div>

    <div class=main_action_category>
        <p class=main_category_title>カテゴリー</p>
        <p class=main_category>メインカテゴリー１</p>
            <a href= "/category" class=sub_category>サブカテゴリー１</a>
            <a href= "/category" class=sub_category>サブカテゴリー２</a>
            <a href= "/category" class=sub_category>サブカテゴリー３</a>
        <p class=main_category>メインカテゴリー２</p>
            <a href= "/category" class=sub_category>サブカテゴリー１</a>
            <a href= "/category" class=sub_category>サブカテゴリー２</a>
            <a href= "/category" class=sub_category>サブカテゴリー３</a>
    </div>
</div>


@endsection