<div class="row">
    <div class="col-lg-12">

        <h1 class="page-header">Employee List</h1>

        <div class="row">            

    		<?php

    			echo "<table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example'>";
    			echo "<thead>";
    			    echo "<th>employee no</th>";
    			    echo "<th>employee name</th>";
    			    echo "<th>employee type</th>";
    			    echo "<th>job title</th>";
					echo "<th>Date Hired</th>";
					echo "<th>Status</th>";
					echo "<th>System User</th>";					
    			echo "<tbody>";    		

    			foreach ($employee->result() as $emplist) {

    				echo "<tr>";    			
    			    echo "<td><a href='".$emplist->employeeno."'>".$emplist->employeeno."</a></td>";
    			    echo "<td>".$emplist->lname.", ".$emplist->fname."</td>";
    			    echo "<td>".$emplist->employeetype."</td>";
    			    echo "<td>".$emplist->jobtitle."</td>";
					echo "<td>".$emplist->datehired."</td>";
					if($emplist->empstatus == 1){
						echo "<td>ACTIVE</td>";
					}else{
						echo "<td>INACTIVE</td>";
					}
					if($emplist->is_user == 1){
						echo "<td>YES</td>";
					}else{
						echo "<td>NO</td>";
					}

    			    echo "</tr>";

    			}
    			
    			echo "</tbody>";
    			echo "</table>";
    		?>

    	</div>
        
        <pre>this page loads in <strong>{elapsed_time}</strong> seconds.</pre>  
                   
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->