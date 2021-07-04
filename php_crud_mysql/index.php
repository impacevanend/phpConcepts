
<!--*
*Incluyento base de datos -->
<?php include('db.php') ?>

<!--* Header del archivo -->
<?php include('includes/header.php') ?>


    <div class="container p-4">

      <div class="row">
          <div class="col-md-4">
    <!-- //*Notificación al usuario de tarea agregada a BD -->

    <?php if (isset($_SESSION['message'])) { ?>
        
        <div class="alert alert-<?=$_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            
        </div>
    <?php session_unset(); } ?>


          
              <div class="card card-body">
                    <!--* Creación del formulario, datos enviados por medio de POST-> save_task.php -->
                  <form action="task_save.php" method="POST">

                      <div class="form-group">

                          <input type="text" name="title" class="form-control" placeholder="Task title" autofocus>
                      </div>

                      <div class="form-group">
                          <textarea name="description" rows="2" class="form-control" placeholder="Task description"></textarea>
                      </div>
                      <div class="d-grid gap-2">
                      <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                      </div>
                  </form>
              
              </div>
          </div>
          <div class="col-md-8">
            <table class="table table-bordered">
                <thead><!-- //*Cabeza de la tabla. -->
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query = "SELECT * FROM task";
                $result_tasks = mysqli_query($conn, $query);    
                while($row = mysqli_fetch_assoc($result_tasks)) { 
                ?>
                        <tr>
                            <td><?php echo $row['title'];?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo $row['created_at'];?></td>
                            <td>
                            <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                            <a href="delete_task.php?id=<?php echo $row['id'];?>">Deleted</a>
                            </td>
                            
                        </tr>
                    <?php }?>
                    
                    
                    
                </tbody>
            </table>
          
          </div>
      
      </div>
    </div>

<!--* Footer del archivo -->
<?php include('includes/footer.php') ?>
  










