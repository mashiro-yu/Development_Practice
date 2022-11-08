<?php
    include 'includes/login.php';
?>
<!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="cssfiles/style.css">
            <link rel="stylesheet" href="cssfiles/style_Input_Form.css">
            <title>入力画面</title>
        </head>
        <body>
            <div class="return">
                <a href="Input_Form_2_1.php"><img src="images/innu.jpeg"></a>
            </div>
            <div id="main_title"> 
                <h1>就職活動報告</h1>
                <h2>ステップ２</h2>
            </div>

            <div class="big-div">   
                <form action="#">
                    <div class="div-info">
                        <div class="divdiv_col_1 divdiv"> 
                            <p class="p-info p-width">二次試験日付：</p>
                            <input type="date" class="input-view" name="once_date">
                        </div>      
                        <div class="divdiv"> 
                            <p class="p-info p-width">開始日時：</p>
                            <input type="time" class="input-view input_view_time time_margin">
                        </div> 
                        <div class="divdiv"> 
                            <p class="p-info p-width">終了日時：</p>
                            <input type="time" class="input-view input_view_time time_margin">
                        </div> 


                        <div class="divdiv_width_all">
                            <p class="p-info">二次試験内容：</p>

                            <div class="Input_Form_2_1_area_div">
                                <div class="first-exam_test"><input type="checkbox" name="First-stage exam" value="1">筆記(専門)</div>
                                <div class="first-exam_test"><input type="checkbox" name="First-stage exam" value="2">筆記(一般常識)</div>
                                <div class="first-exam_test"><input type="checkbox" name="First-stage exam" value="3">適性検査(専門)</div>
                                <div class="first-exam_test"><input type="checkbox" name="First-stage exam" value="4">適性検査(一般常識)</div>
                                <div class="first-exam_test"><input type="checkbox" name="First-stage exam" value="5">面接(個別)</div>
                                <div class="first-exam_test"><input type="checkbox" name="First-stage exam" value="6">面接(集団)</div>
                                <div class="first-exam_test"><input type="checkbox" name="First-stage exam" value="7">面接(ディスカッション等)</div>
                                <div class="first-exam_test"><input type="checkbox" name="First-stage exam" value="8">作文</div>
                                <div class="first-exam_test"><input type="checkbox" name="First-stage exam" value="9">実技</div>
                                <div class="first-exam_test"><input type="checkbox" name="First-stage exam" value="10">その他</div>
                            </div>

                        </div>
                        <div class="divdiv_width_all_ex" id="text_info">
                        </div>
                     </div>
                    <!-- </div>   -->
                    <div class="button">
                        <input type="reset"  class="btn_item" value="キャンセル" alt="キャンセル">
                        <input type="button" class="btn_item" value="保存" alt="保存">
                        <input type="button" onclick="location.href='Input_Form_2_3.php'" class="btn_item" value="三次→" alt="三次→">
                    </div>
                </form>
            </div>
            <script type="text/javascript" src="methot.js"></script>

        </body>
    
    </html>


</html>