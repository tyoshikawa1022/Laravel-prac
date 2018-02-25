
<div class="container">
    <h3>Laravelで簡単なフォームを作ってみる</h3>
 
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{action('EmployeeController@save')}}">
    
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
 
        <div>
            <label>氏名</label><span必須</span>
            <input type="text" name="name" placeholder="氏名を入力してください">
        </div>
        <div>
            <label>電話番号</label><span必須</span>
            <input type="text" name="tel" placeholder="電話番号を入力してください">
        </div>
        <div>
            <label>メールアドレス</label><span>必須</span>
            <input type="text" name="email" placeholder="メールアドレスを入力してください">
        </div>
        <div>
            <label>性別</label><span>必須</span>
            <div>
                <label>
                    <input type="radio" name="gender" value="1">男性
                </label>
            </div>
            <div>
                <label>
                    <input type="radio" name="gender" value="2">女性
                </label>
            </div>
        </div>
        <div>
            <label>内容</label>
            <textarea name="content" rows="3" placeholder="内容を入力してください"></textarea>
        </div>
        <div>
            <div>
                <button type="submit">確認する</button>
            </div>
        </div>
    </form>
</div>
