<?php
	include $_SERVER['DOCUMENT_ROOT']."/BBS/db.php";

    $bno = $_GET['idx'];
    $userpw = $_POST['dat_pw'];
    
    if($bno && $_POST['dat_user'] && $userpw && $_POST['content']){
        $sql = mq("insert into reply(con_num,name,pw,content,board_idx) values('".$bno."','".$_POST['dat_user']."','".$userpw."','".$_POST['content']."','".$bno."')");
        echo "<script>alert('댓글이 작성되었습니다.'); 
        location.href='/BBS/read.php?idx=$bno';</script>";
    }else{
        echo "<script>alert('댓글 작성에 실패했습니다.'); 
        history.back();</script>";
    }