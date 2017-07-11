<?php include_once ROOT. '/views/layouts/header.php'; ?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Basic Forms</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                         <?php if (isset($errors) && is_array($errors)): ?>
                             <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                 <?php endforeach; ?>
                            </ul>
                                 <?php endif; ?>
                         <div class="panel panel-info">
                            <div class="panel-heading">
                                 Login to your account
                            </div>
                        <div class="panel-body">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                     <input class="form-control" type="password"  placeholder="Password" name="password">
                                </div>
                                     <input type="submit" name="submit" class="btn btn-info">  
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            

            </div>
        </div>
        <!-- /. PAGE WRAPPER  -->
    
    <!-- /. WRAPPER  -->
   <?php include_once ROOT. '/views/layouts/footer.php'; ?>