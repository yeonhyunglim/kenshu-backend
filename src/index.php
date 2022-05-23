<!DOCTYPE html>


<html lang="ja">


<head>
    <meta charset="UTF-8">
    <title>投稿フォーム</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
    <link rel="stylesheet" href="./public/assets/css/style.css">
</head>

<body>
    <?php require_once './process.php'; ?>
    <div class="row justify-content-center">
        <form class="was-validated" action="./process.php" method="POST">
            <!-- title -->
            <div class="form-group">
                <label>タイトル</label>
                <input type="text" name="title" class="form-control is-invalid" required>
                <div class="invalid-feedback">タイトルを入力してください。</div>
            </div>
            <!-- body  -->
            <div class="form-group">
                <label>本文</label>
                <textarea name="body" class="form-control is-invalid" rows="3" required></textarea>
                <div class="invalid-feedback">本文を入力してください。</div>
            </div>
            <!-- images -->
            <div class="custom-file">
                <input type="file" name="images[]" class="custom-file-input" accept="image/png, image/jpeg" mutiple>
                <label class="custom-file-label">Choose image...</label>
            </div>
            <br>
            <br>
            <!-- thumb_nail-->
            <!-- tags  -->
            <div class="form-group">
                <label>タグ</label>
                    <option value="1">総合</option>
                    <option value="2">テクノロジー</option>
                    <option value="3">モバイル</option>
                    <option value="4">アプリ</option>
                    <option value="5">エンタメ</option>
                    <option value="6">ビューティー</option>
                    <option value="7">ファッション</option>
                    <option value="8">ライフスタsイル</option>
                    <option value="9">ビジネス</option>
                    <option value="10">グルメ</option>
                    <option value="11">スポーツ</option>
                <select class="selectpicker form-control" name="tags[]" multiple required>
                </select>
                <div class="invalid-feedback">タグを1つ以上選択してください。</div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>
</body>

</html>