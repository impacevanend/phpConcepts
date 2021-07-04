
<!--*
*Incluyento base de datos -->
<?php include('db.php') ?>

<!--* Header del archivo -->
<?php include('includes/header.php') ?>


    <div class="container p-4">
      <div class="row">

          <div class="col-md-4">
          
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
          
          
          </div>
      
      </div>
    </div>

<!--* Footer del archivo -->
<?php include('includes/footer.php') ?>
  










