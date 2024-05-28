<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('/assets/css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('/assets/css/index.css') }}" />
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
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__input--text--name">
                <div class="form__group-content--left">
                    <div class="form__input--text--left">
                        <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}" />
                    </div>
                    <div class="form__error">
                        @error('first_name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form__group-content--right">
                    <div class="form__input--text--right">
                        <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}" />
                    </div>
                    <div class="form__error">
                        @error('last_name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content--gender">
            <div class="form-check form-check-inline">
              <input type="radio" name="gender" class="form-check-input" id="gender1" value="男性" {{ old ('gender') == '男性' ? 'checked' : '' }} checked>
              <label for="gender1" class="form-check-label">男性</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="gender" class="form-check-input" id="gender2" value="女性" {{ old ('gender') == '女性' ? 'checked' : '' }}>
              <label for="gender2" class="form-check-label">女性</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="radio" name="gender" class="form-check-input" id="gender3" value="その他" {{ old ('gender') == 'その他' ? 'checked' : '' }}>
              <label for="gender3" class="form-check-label">その他</label>
            </div>
            <div class="form__error">
              @error('gender')
                        {{ $message }}
                        @enderror
            </div>
          </div>
        </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
              @error('email')
                        {{ $message }}
                        @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tell" placeholder="08012345678" value="{{ old('tell') }}" />
            </div>
            <div class="form__error">
              @error('tell')
                        {{ $message }}
                        @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
              @error('address')
                        {{ $message }}
                        @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>

          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
                <select name="category_id">
                    <option value="">選択してください</option>
                    <option value="商品の交換について">商品の交換について</option>
                </select>
            </div>
            <div class="form__error">
              @error('category_id')
                        {{ $message }}
                        @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="資料をいただきたいです" value="{{ old('detail') }}"></textarea>
            </div>
            <div class="form__error">
              @error('detail')
                        {{ $message }}
                        @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
