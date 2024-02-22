<?php include('header.php'); ?>

<?php include('dbcon.php'); ?>





    <div class="box1">
    <h2>ALL STUDENT</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

    </div>
    
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>AGE</th>
                

            </tr>
        </thead>
        <tbody>


        <?php

           $query = "select * from students";

           $result = mysqli_query($connection, $query);
           if(!$result){

             die("query Failed".mysqli_error());
             }else{
             while($row = mysqli_fetch_assoc($result)){
                ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['age']; ?></td>
            </tr>

                <?php

             }
           }

        ?>
            

            
        </tbody>
    </table>
<form action="">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD STUDENTS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

        <div class="form-group">
          <label for="f_name">First Name</label>
          <input type="text" name="f_name" class="form-control">
        </div>
        <div class="form-group">
          <label for="l_name">Last Name</label>
          <input type="text" name="l_name" class="form-control">
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="text" name="age" class="form-control">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">ADD</button>
      </div>
    </div>
  </div>
</div>

</form>

<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

    <?php include('footer.php'); ?>