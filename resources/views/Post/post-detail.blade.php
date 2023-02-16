@extends('layouts.login')

@section('content')
<p>投稿詳細ページです</p>
<button class=btn_blue>js動作確認ボタン</button>
<h1 class=title>css確認うさぎ</h1>

<div class=box>
    <div class=post_detail_box>
        <div class=post_detail_item>
            <p class=post_detail_user>ooさん</p>
            <p class=post_detail_time>0000-00-00</p>
            <p class=post_detail_view>0view</p>
        </div>
        <div class=post_detail_text>
            <p class=post_detail_title>タイトル</p>
            <button class="post_detail_edit btn_blue">編集</button>
        </div>
        <div class=post_detail_posts>
            <p class=post_detail_post>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
        </div>
        <div class=post_detail_footer>
            <button class="post_detail_sub btn_blue">サブカテゴリー</button>
            <p class=post_detail_comment>コメント数</p>
            <p class=post_detail_like>いいね</p>
        </div>
        <div class=post_detail_comment>
            <div class=post_detail_comment_item>
                <p class=post_detail_user>ooさん</p>
                <p class=post_detail_time>0000-00-00</p>
                <button class="post_detail_edit btn_blue">編集</button>
            </div>
            <div class=post_detail_comment_body>
                <p class=post_detail_comment_text>コメント内容</p>
                <p class=post_detail_comment_like>いいね</p>
            </div>

        </div>
    </div>
</div>
@endsection