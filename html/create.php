<!DOCTYPE html>


<html lang="ja">


<head>
    <meta charset="UTF-8">
    <title>投稿一覧</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php require_once './process.php'; ?>
    <div class="row justify-content-center">
        <form class="was-validated" action="./process.php?'" method="POST">
            <div class="form-group">
                <label>タイトル</label>
                <input type="text" name="title" class="form-control is-invalid" required>
                <div class="invalid-feedback">タイトルを入力してください。</div>
            </div>
            <div class="form-group">
                <label>本文</label>
                <textarea name="body" class="form-control is-invalid" rows="3" required></textarea>
                <div class="invalid-feedback">本文を入力してください。</div>
            </div>
            <div class="custom-file">
                <input type="file" name="images[]" class="custom-file-input" accept="image/png, image/jpeg" mutiple>
                <label class="custom-file-label">Choose image...</label>
            </div>
            <!-- choose thumb_nail-->
            <!-- choose tags  -->
            <br>
            <br>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
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
</body>

</html>
</body>

</html>