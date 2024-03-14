<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
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
        <div class="confirm__site">
            <h2>Confirm</h2>
            <form class="form" action="/contacts" method="post">
                @csrf
                <div class="form__inner">
                    <div class="confirm__table">
                        <table class="table__inner">
                            <tr class="table__row">
                                <th class="table__header">お名前</th>
                                <td class="table__text">
                                    <input type="text" name="first-name" class="first-name" value="{{ $contact['first-name'] }}" readonly />
                                    <input type="text" name="last-name" class="last-name" value="{{ $contact['last-name'] }}" readonly />
                                </td>
                            </tr>
                            <tr class="table__row">
                                <th class="table__header">性別</th>
                                <td class="table__text">
                                    <input class="gender" type="text" name="gender" style="transform:scale(2.0);" value="{{ $contact['gender'] }}" readonly />
                                </td>
                            </tr>
                            <tr class="table__row">
                                <th class="table__header">メールアドレス</th>
                                <td class="table__text">
                                    <input class="email" type="email" name="email" value="{{ $contact['email'] }}" readonly />
                                </td>
                            </tr>
                            <tr class="table__row">
                                <th class="table__header">電話番号</th>
                                <td class="table__text">
                                    <input class="tel" type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
                                </td>
                            </tr>
                            <tr class="table__row">
                                <th class="table__header">住所</th>
                                <td class="table__text">
                                    <input class="address" type="text" name="address" value="{{ $contact['address'] }}" readonly />
                                </td>
                            </tr>
                            <tr class="table__row">
                                <th class="table__header">建物名</th>
                                <td class="table__text">
                                    <input class="building" type="text" name="building" value="{{ $contact['building'] }}" readonly />
                                </td>
                            </tr>
                            <tr class="table__row">
                                <th class="table__header">お問い合わせの種類</th>
                                <td class="table__text">
                                    <input class="select" type="text" name="select" value="{{ $contact['select'] }}" readonly>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <th class="table__header">お問い合わせ内容</th>
                                <td class="table__text">
                                    <input class="detail" type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="confirm__btn">
                        <button class="confirm__submit" type="submit" name="submit">送信</button>
                        <a class="edit" href="/">修正</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>