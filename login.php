<?php
    session_start();    //セッション開始
    if (isset($_SESSION['ID'])) {
        //セッションにユーザIDがある＝ログインしている
        //ログイン済みならトップページに遷移する
        header('Location: home.php');
    }else if (isset($_POST['ID']) && isset($_POST['pass'])) {
        //ログインしていないがユーザ名とパスワードが送信されたとき
        //DB接続
        $dsn = 'mysql:host=192.168.1.171;dbname=job_hunt_manage;charset=utf8';
        $user = 'external_user';

        $password = 'test';

        try{
            $db = new PDO($dsn, $user, $password);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            //プリペアドステートメントを作成
            $stmt = $db->prepare("SELECT * FROM account_tb WHERE act_id =:ID and password =:pass");

            //パラメータ割り当て
            $stmt->bindParam(':ID', $_POST['ID'], PDO::PARAM_STR);
            $stmt->bindParam(':pass', hash("sha256",$_POST['pass']), PDO::PARAM_STR);
            //クエリの実行
            $stmt->execute();

            if ($row = $stmt->fetch()) {
                //ユーザが存在していたら、セッションにユーザIDセット
                $_SESSION['ID'] = $row['act_id'];
                $_SESSION['name'] = $row['account_name'];
                header('Location: home.php');


                // if(intval($_POST['pass'])  == $_POST['ID']){
                //     header('Location: newlogin.php');
                // }else{
                //     header('Location: home.php');
                // }
                exit();
            }else {
                //1レコードも取得できなかったとき
                //ユーザ名・パスワードが間違っている可能性あり
                //もう一度ログインフォームを表示
                header('Location: login.php');
                exit();
            }
        }catch (PDOException $e) {
            exit('エラー：' . $e->getMessage());
        }    
    }
    //ログインしていない場合は以降のログインフォームを表示する
?>

<!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="cssfiles/style.css">
            <link rel="stylesheet" href="cssfiles/style_rog.css">
            <title>就職活動管理WEBアプリ</title>
        </head>
        <body>
            <div id="main_title"> 
                <h1>就職活動管理<br class="br-sp">WEBアプリ</h1>
            </div>
            <form class="roginform" action="login.php" method="POST">
                <div class="ID-From">
                    <p class="p-title">ID</p>
                        <input type="text" class="id rogin-input" name="ID" autocomplete="off">
                </div>
                <div class="infomation">
                    <p class="info">※パスワードを設定してください。</p>
                </div>
                <div class="password">
                    <p class="p-title">Pass</p>
                        <input type="password" name="pass" placeholder="4桁英数字" class="pass rogin-input">
                </div>
                <input type="submit" class="btn btn-border" value="ログイン">
            </form>
        </body> 
    </html>
</html>