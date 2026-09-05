# Contact Form

Laravelを使用して作成したお問い合わせフォームです。

ユーザー登録・ログイン機能、管理者画面、ユーザー管理、お問い合わせ管理、APIによるJSONデータの提供を実装

---

## 1. 開発環境

- Laravel
- Laravel Sail
- Docker
- MySQL
- Laravel Fortify
- Laravel Sanctum（API認証予定）
- Vite
- Blade
- CSS
- REST API
- JSON

---

# 2. アプリケーション概要

本アプリでは、以下の機能を実装しています。

### 一般ユーザー向け

- お問い合わせフォーム
- お問い合わせ内容確認
- お問い合わせ送信
- ユーザー登録
- ログイン
- ログアウト
- ログインユーザー情報の自動入力

### 管理者向け

- 管理者ログイン
- 管理者画面
- ユーザー一覧
- ユーザー詳細
- お問い合わせ一覧
- お問い合わせ詳細

### API

- お問い合わせ一覧API
- お問い合わせ詳細API
- ユーザー一覧API
- ユーザー詳細API
- API ResourceによるJSONレスポンスの制御

---

# 3. Laravelの基本的な処理の流れ

Laravelでは基本的に、

```text
ブラウザ
 ↓
Route
 ↓
Controller
 ↓
Model
 ↓
Database
 ↓
Controller
 ↓
Blade
 ↓
HTML
 ↓
ブラウザ
```
