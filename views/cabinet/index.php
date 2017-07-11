<?php include_once ROOT. '/views/layouts/header.php'; ?>


        <div id="page-wrapper">
            <div id="page-inner">
               <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Tasks</h1>
                   

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
          
        </tbody>
      </table>
    </div>
                   </div>
                     </div>
             <div class="row">
                 <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="panel panel-info">
                        <div class="panel-heading">
                           BASIC FORM
                        </div>
                        <div class="panel-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <p class="help-block">Title</p>
                                         <input class="form-control" type="text" name="title">
                                </div>
                               
                                <div class="form-group">
                                     <p class="help-block">Description</p>
                                         <textarea class="form-control" rows="6" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                     <p class="help-block">Description</p>
                                     <select class="form-control" rows="6" name="description">
                                         <option></option>
                                         
                                         
                                         
                                     </select>
                                </div>
                                
                                     <input type="submit" name="submit" value="Add task" class="btn btn-info"> 
                            </form>
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