@extends('layouts.login')

@section('content')
<button class=btn_blue>js動作確認ボタン</button>
<p class=title>css確認うさぎ</p>
<div class=box>
    
    <div class=main_post_box>
    @foreach($posts as $post)
        <div class=main_post>
            <div class=main_post_item>
                <p class=main_post_user>{{$post->User->username}}</p>
                <p class=main_post_time>{{$post->created_at}}</p>
                <p class=main_post_view>〇View</p>
            </div>
            <div class=main_post_text>
                <p class=main_post_title>{{$post->title}}</p>
            </div>
            <div class=main_post_action>
                <p class=main_post_category>{{$post->post_sub_category_id}}</p>
                <p class=main_post_comment>コメント〇件</p>
                <p class=main_post_like>いいね〇件</p>
            </div>
        </div>
        @endforeach
    </div>
    

    <div class=main_action>
        <div class=main_action_item>
            <div class=main_action_item_box>
                <a href= "/category" class="main_action_item_category btn_red">カテゴリー追加</a>
                <a href= "/post" class="main_action_post btn_blue">投稿</a>
            </div>
            <div class=main_action_search_box>
                <input class=main_action_search></input>
                <button class="main_action_search_btn btn_blue">検索</button>
            </div>
            <div class=main_action_fun_box>
                <a href= "/top" class="main_action_like btn_blue">いいねした投稿</a>
                <a href= "/top" class="main_action_mine btn_blue">自分の投稿</a>
            </div>
        </div>

        <div class=main_action_category>
        @foreach($Mein_Cates as $Mein_Cate)
            <ul class=main_category_title>{{$Mein_Cate->main_category}}</ul>
                <a href= "/top"><li class=sub_category></li></a>
        @endforeach
        </div>
    </div>
</div>




@endsection
