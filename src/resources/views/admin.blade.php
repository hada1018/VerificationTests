<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="check-form__content">
      <div class="check-form__heading">
        <h2 class="h2">Admin</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group--input-text">
            <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" />
          </div>
          <div class="form__group--item">
            <select class="form__select--gender" name="category_id" />
              <option value="" selected disabled>性別</option>
              <option value="1">男性</option>
              <option value="2">女性</option>
              <option value="3">その他</option>
            </select>
          </div>
          <div class="form__group--item">
            <select class="form__select--type" name="category_id" />
              <option value="" selected disabled>お問い合わせの種類</option>
              <option value="1">商品のお届けについて</option>
              <option value="2">商品の交換について</option>
              <option value="3">商品トラブル</option>
              <option value="4">ショップへのお問い合わせ</option>
              <option value="5">その他</option>
            </select>
           </div>
          <div class="form__group--item">
            <input type="date" name="date" />
          </div>
          <div class="form__group--item">
            <button class="form__button-submit" type="submit">検索</button>
          </div>
          <div class="form__group--item">
            <button class="form__button-reset" type="reset">リセット</button>
          </div>
          <div class="form__group--flex">
            <div class="form__div--button">
                <button class="form__button-reset" type="reset">エクスポート</button>
            </div>
            <div></div>

        </div>
      </form>
      {{ $authors->links() }}
    </div>
  </main>
</body>

</html>