<div class="row">
    <div class="col-lg-12">

        <h1 class="page-header">User Registration</h1>
        
        <div class="row">
            <div class="panel panel-primary">
    			<div class="panel-heading">
    				<i class="fa fa-edit"></i> <small>Registration Form</small>
    			</div>
    			<div class="panel-body">
                    
                    <?php echo validation_errors(); ?>
    				<?php echo form_open('Register_User'); ?>                    
    					<div class="form-group">
                            <input class="form-control" name="lname" id="lname" type="text" placeholder="Last Name" style="text-transform:uppercase" onblur="caps(this.id)"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="fname" id="fname" type="text" placeholder="First Name" style="text-transform:uppercase" onblur="caps(this.id)"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="mname" id="mname" type="text" placeholder="Middle Name" style="text-transform:uppercase" onblur="caps(this.id)"/>
                        </div>
                        <div class="form-group">
                            <label>Employee Number</label>
                            <select class="form-control" name="empno">
                                <option value="-">-</option>
                                <?php
                                    $this->load->model('Employee');
                                    $employeeno = $this->Employee->getEmpNo();
                                    foreach($employeeno as $empno){
                                        echo "<option value=".$empno->employeeno.">".$empno->employeeno."</option>";
                                    }
                                ?>                                
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <input class="btn btn-success" name="regsubmit" type="submit" value="register"/>
                        </div>
    				</form>
    			</div>
    		</div>
        </div>

        <pre>this page loads in <strong>{elapsed_time}</strong> seconds.</pre>  
                   
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->