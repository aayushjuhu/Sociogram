<?php
function getConversation($user_id, $conn){
    $sql="SELECT * FROM conversations WHERE user1=? or user2=? ORDER BY conversation_id DESC";
    $stmt=$conn->prepare($sql);
    $stmt->execute([$user_id,$user_id]);
    if($stmt->rowCount()>0){
        $conversations=$stmt->fetchAll();
        $user_data=[];
        foreach($conversations as $conversations){
            $sql2 = "SELECT First_Name, Username, profile_picture FROM users WHERE user_id=?";
            $stmt2=$conn->prepare($sql2);
            $stmt2->execute([$conversation['user2']]);
        }else{
            $sql2 = "SELECT First_Name, Username, profile_picture FROM users WHERE user_id=?";
            $stmt2=$conn->prepare($sql2);
            $stmt2->execute([$conversation['user1']]);
        }
        $allConversations=$stmt2->fetchAll();
        array_push($user_data, $allConversations);
    }
    return $user_data;

    }else{
        $conversations = [];
        return $conversations;
    }
}