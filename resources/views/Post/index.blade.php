@extends('layouts.login')

@section('content')
<button class=btn>js動作確認ボタン</button>
<p class=title>css確認うさぎ</p>
<div class=main_box>
    <div class=main_post>
        <div class=main_post_item>
            <p class=main_post_user>〇〇さん</p>
            <p class=main_post_time>〇年〇月〇日</p>
            <p class=main_post_view>〇View</p>
        </div>
        <div class=main_post_text>
            <p class=main_post_title>ここにタイトルが入ります。</p>
        </div>
        <div class=main_post_action>
            <p class=main_post_category>サブカテゴリー１</p>
            <p class=main_post_comment>コメント〇件</p>
            <p class=main_post_like>いいね〇件</p>
        </div>
    </div>

    <div class=main_action>
        <div class=main_action_item>
            <a href= "/category" class=main_action_item_category>カテゴリー追加</a>
            <a href= "/post" class=main_action_post>投稿</a>
            <div class=main_action_search_box>
                <input class=main_action_search></input>
                <button class=main_action_search_btn>検索</button>
            </div>
            <a href= "/" class=main_action_like>いいねした投稿</a>
            <a href= "/" class=main_action_mine>自分の投稿</a>
        </div>

        <div class=main_action_category>
            <p class=main_category_title>カテゴリー</p>
            <p class=main_category>メインカテゴリー１</p>
                <a href= "/" class=sub_category>サブカテゴリー１</a>
                <a href= "/" class=sub_category>サブカテゴリー２</a>
                <a href= "/" class=sub_category>サブカテゴリー３</a>
            <p class=main_category>メインカテゴリー２</p>
                <a href= "/" class=sub_category>サブカテゴリー１</a>
                <a href= "/" class=sub_category>サブカテゴリー２</a>
                <a href= "/" class=sub_category>サブカテゴリー３</a>
        </div>
    </div>
</div>




@endsection
