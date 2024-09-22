<?php 

$todos = [];
if(file_exists('todo.txt')){
    $file = file_get_contents('todo.txt');
    $todos = unserialize($file);
}



if(isset($_POST['todo'])){
    $data = $_POST['todo'];
    $todos[]=[
        'todo' => $data,
        'status' => 0
    ];
    saveData($todos);
  }

 
if(isset($_GET['status'])){
  $todos[$_GET['key']]['status']=$_GET['status'];
  saveData($todos);
}
if(isset($_GET['hapus'])){
  unset($todos[$_GET['key']]);
  data: saveData($todos);
}

function saveData($todos){
  file_put_contents('todo.txt',serialize($todos));
    header("location:form.php");
}
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Todo Apps</h1>
    <form action="" method="POST">
      <label for="">Daftar Belanja Hari Ini</label>
      <input type="text" name="todo">
      <button type="submit">Simpan</button>
    </form>

    <ul>
        <?php foreach ($todos as $key => $value) { ?>
            
        
      <li>
      <input type="checkbox" name="todo" onclick="window.location.href
      ='form.php?status= <?php echo($value['status']==1)?'0':'1';?>&key=<?php echo $key;?>'"
      <?php if($value['status']==1)echo 'checked' ?>>
      <label for="">
        <?php if($value['status']==1)
			{
			   echo '<del>'.$value['todo'].'</del>'; 
			}
			else
			{
				echo $value['todo'];
			}
			?>
    </label>
      <a href="form.php?hapus=1&key=<?php echo $key; ?>" onclick="return confirm('Apakah anda ingin menghapus?')">hapus</a>
    </li>

    <?php } ?>
  </ul>

</div>
</body>
</html>