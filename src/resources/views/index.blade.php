<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">FashionablyLate</a>
        </div>
    </header>

    <main>
        <div class="contact__site">
            <h2>Contact</h2>
            <div class="contact__page">
                <div class="contact__label">
                    <div class="contact__name">
                        <label for="name">お名前<span class="asterisk">※</span></label>
                    </div>
                    <div class="contact__gender">
                        <label for="gender">性別<span class="asterisk">※</span></label>
                    </div>
                    <div class="contact__mail">
                        <label for="mail">メールアドレス<span class="asterisk">※</span></label>
                    </div>
                    <div class="contact__tell">
                        <label for="tell">電話番号<span class="asterisk">※</span></label>
                    </div>
                    <div class="contact__address">
                        <label for="address">住所<span class="asterisk">※</span></label>
                    </div>
                    <div class="contact__building">
                        <label for="building">建物名<span class="asterisk">※</span></label>
                    </div>
                    <div class="contact__select">
                        <label for="select">お問い合わせの種類<span class="asterisk">※</span></label>
                    </div>
                    <div class="contact__detail">
                        <label for="detail">お問い合わせ内容<span class="asterisk">※</span></label>
                    </div>
                </div>

                <div class="contact__form-page">
                    <form class="form" action="/contacts/confirm" method="post">
                        @csrf
                        <div class="name__form">
                            <input type="text" name="first-name" placeholder="例:山田" class="first-name" value="{{ old('first-name') }}" />
                            <input type="text" name="last-name" placeholder="例:太郎" class="last-name" value="{{ old('last-name') }}" />
                            <div class="form__error">
                                @error('first-name')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="form__error">
                                @error('last-name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="gender__form">
                            <input class="gender__name" type="radio" name="gender" style="transform:scale(2.0);" value="男性"><label for="male">男性</label>
                            <input class="gender__name" type="radio" name="gender" style="transform:scale(2.0);" value="女性"><label for="female">女性</label>
                            <input class="gender__name" type="radio" name="gender" style="transform:scale(2.0);" value="その他"><label for="other">その他</label>
                            <div class="form__error">
                                @error('gender')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mail__form">
                            <input class="email" type="mail" name="email" placeholder="例:test@example.com" size="95" value="{{ old('email') }}" />
                            <div class="form__error">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="tel__form">
                            <input class="tel" type="tel" name="tel" placeholder="080" value="{{ old('tel') }}" />
                            <label for="hyphen">-</label>
                            <input class="tel" type="tel" name="tel" placeholder="1234" value="{{ old('tel') }}" />
                            <label for="hyphen">-</label>
                            <input class="tel" type="tel" name="tel" placeholder="5678" value="{{ old('tel') }}" />
                            <div class="form__error">
                                @error('tel')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="address__form">
                            <input class="address" type="text" name="address" placeholder="例:東京都渋谷区千駄々谷1-2-3" size="95" value="{{ old('address') }}" />
                            <div class="form__error">
                                @error('address')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="building__form">
                            <input class="building" type="text" name="building" placeholder="例:千駄々谷マンション101" size="95" value="{{ old('building') }}" />
                            <div class="form__error">
                                @error('building')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="select__form">
                            <select class="select" name="select" placeholder="選択してください">
                                <option value="">選択してください</option>
                                <option value="返品">返品</option>
                                <option value="交換">交換</option>
                                <div class="form__error">
                                    @error('select')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </select>
                        </div>
                        <div class="detail__form">
                            <textarea class="detail" name="detail" maxlength="120" placeholder="お問い合わせ内容をご記載ください"></textarea>
                            <div class="form__error">
                                @error('detail')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="contact__submit">
                            <button class="contact__btn" type="submit">確認画面</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>