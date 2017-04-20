<div class="row">
    <div class="col-lg-12">    	
    	
    	<h1 class="page-header">Employee Registration</h1>   	

    	<div class="row">

    		<div class="panel panel-primary">
    			<div class="panel-heading">
    				<i class="fa fa-edit"></i> <small>Registration Form</small>
    			</div>
    			<div class="panel-body">
                    <?php echo validation_errors(); ?>
    				<?php echo form_open('Register_Emp'); ?>                    
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
                            <label>Employee Type</label>
                            <select class="form-control" name="emptype">
                                <option value="-">-</option>
                                <?php
                                    foreach($EmployeeType as $EmpType){
                                        echo "<option value=".$EmpType->emptypename.">".$EmpType->emptypename."</option>";
                                    }
                                ?>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="jobtitle" id="jobtitle" type="text" placeholder="Job Title" style="text-transform:uppercase" onblur="caps(this.id)"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="jobdesc" id="jobdesc" type="text" placeholder="Job Description" style="text-transform:uppercase" onblur="caps(this.id)"/>
                        </div>
                        <div class="form-group">
                            <label for='datepicker_birth'>Birth Date</label>
                            <div id='datepicker_birth' class='input-group date' data-date-format='yyyy-mm-dd'>
                                <input name='date_birth' class='form-control' type='text' readonly />
                                <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option value="-">-</option>
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="address" id="address" type="text" placeholder="address" style="text-transform:uppercase" onblur="caps(this.id)"/>
                        </div>
                        <div class="form-group">
                            <label>LANDLINE</label>
                            <input name="phone" id="phone" class="form-control input-medium bfh-phone" data-format="+63 (d) ddd-dddd" type="text" placeholder="phone" style="text-transform:uppercase" onblur="caps(this.id)"/>
                        </div>
                        <div class="form-group">
                            <label>MOBILE</label>
                            <input name="mobile" id="mobile" class="form-control input-medium bfh-phone" data-format="+63 (ddd) ddd-dddd" type="text" placeholder="mobile" style="text-transform:uppercase" onblur="caps(this.id)"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" type="text" placeholder="email" style="text-transform:uppercase"/>
                        </div>
                        <div class="form-group">
                            <label>TIN NO</label>
                            <input name="tin" id="tin" class="form-control input-meduim bfh-phone" data-format="ddd-ddd-ddd-ddd" type="text" placeholder="TIN No" style="text-transform:uppercase" onblur="caps(this.id)"/>
                        </div>
                        <div class="form-group">
                            <label>SSS NO</label>
                            <input name="sss" id="sss" class="form-control input-medium bfh-phone" data-format="dd-ddddddd-d" type="text" placeholder="SSS No" style="text-transform:uppercase" onblur="caps(this.id)"/>
                        </div>
                        <div class="form-group">
                            <input name="philhealth" id="philhealth" class="form-control input-medium bfh-phone" data-format="dd-ddddddddd-d" type="text" placeholder="PhilHealth No" style="text-transform:uppercase" onblur="caps(this.id)"/>
                        </div>
                        <div class="form-group">
                            <input name="pagibig" id="pagibig" class="form-control input-medium bfh-phone" data-format="dddd-dddd-dddd" type="text" placeholder="PAG-IBIG No" style="text-transform:uppercase" onblur="caps(this.id)"/>
                        </div>
                        <div class="form-group">
                            <label for='datepicker_hire'>Date Hired</label>
                            <div id='datepicker_hire' class='input-group date' data-date-format='yyyy-mm-dd'>
                                <input name='date_hire' class='form-control' type='text' readonly />
                                <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
                            </div>
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
<script>
    function caps(id){
        document.getElementById(id).value = document.getElementById(id).value.toUpperCase();
    }
</script>