<?php include_once ROOT. '/views/layouts/header.php'; ?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Tasks</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
               
                 <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-primary">
      <!-- Default panel contents -->
      <div class="panel-heading"># TO DO LIST - TASK YOU HAVE TO DO</div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>#</th>
			<th>User</th>
			<th>E-mail</th>
            <th>Task </th>
			 <th> Description</th>
            <th>On Date</th>
			<th>Photo</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($taskList as $task): ?>
          <tr class="list-group-item-success">
            <td><?php echo $task['id']; ?></td>
            <td><input type="checkbox" value="" /></td>
            <td><?php echo $task['user']; ?></td>
            <td><?php echo $task['email']; ?></td>
            
			<td><?php echo $task['task']; ?></td>
            <td><?php echo $task['description']; ?></td>
			<td><?php echo $task['data']; ?></td>
            <td>23rd June </td>
			<td><a href="#" class="btn btn-primary ">Just Done</a></td>
          </tr>
            <?php endforeach; ?>
          <tr class="list-group-item-danger">
            <td>2</td>
                <td><input type="checkbox" value="" /></td>
            <td>200 Messages To Reply</td>
            <td>10th November </td>
            <td><a href="#" class="btn btn-success">Pending</a></td>
          </tr>
          <tr class="list-group-item-info">
            <td>3</td>
                <td><input type="checkbox" value="" /></td>
            <td>90 Orders To Process</td>
            <td>2nd December </td>
            <td><a href="#" class="btn btn-primary">In Process</a></td>
          </tr>
            <tr class="list-group-item-warning">
            <td>4</td>
                  <td><input type="checkbox" value="" /></td>
            <td>100$ Pending Payment</td>
            <td>23rd June </td>
            <td><a href="#" class="btn btn-danger">Just Done </a></td>
          </tr>
          <tr class="list-group-item-info">
            <td>5</td>
                <td><input type="checkbox" value="" /></td>
            <td>200 Messages To Reply</td>
            <td>10th November </td>
            <td><a href="#" class="btn btn-warning">Pending</a></td>
          </tr>
          <tr class="list-group-item-danger">
            <td>6</td>
              <td><input type="checkbox" value="" /></td>
            <td>90 Orders To Process</td>
            <td>2nd December </td>
            <td><a href="#" class="btn btn-info">In Process</a></td>
          </tr>
        </tbody>
      </table>
    </div>
                   </div>
                     </div>
            </div>
            <!-- /. PAGE INNER  -->
            <!-- Постраничная навигация -->
        <?php echo $pagination->get(); ?>
        </div>
        <!-- /. PAGE WRAPPER  -->
    
    <!-- /. WRAPPER  -->
   <?php include_once ROOT. '/views/layouts/footer.php'; ?>