<?php
if (isset($_POST['name'])) {
    // unset($_POST['create']);
    if (!empty($_FILES['file']['name'])) {
        $image_name = time() . "_" . $_FILES['file']['name'];
        $destination = ROOT_PATH . "/file/uploads/" . $image_name;
        $result = move_uploaded_file($_FILES['file']['tmp_name'], $destination);
        if ($result) {
            $_POST['file'] = $image_name;
        } else {
            array_push($errors, 'failed to upload image');
        }
    }
    //   $exist=selectOne('posts',['title'=>$_POST['title']]);
    //   if ($exist){
    //     array_push($errors,'title alrready exist');
    //   }
    // if (empty($_POST['category'])) {
    //     array_push($errors, 'category can not be empty');
    // }
    // if (empty($errors)) {
    //     $create = create('products', $_POST);
    // }
}
?>