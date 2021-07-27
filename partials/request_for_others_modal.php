<!-- Modal -->
<div class="modal fade" id="other" tabindex="-1" role="dialog" aria-labelledby="otherLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="otherLabel">Request for other Patients</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      
      <form action="partials/handle_request_others.php" method="POST">
      <div class="form-group my-3">
          <label for="exampleInputEmail1">Patients Name</label>
          <input type="text" name="pname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Patients Name">
        </div>

        <div class="form-group my-3">
          <label for="exampleInputEmail1">Patients Email address</label>
          <input type="email" name="pemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Patients Email/Your Email">
         </div>

         <label for="exampleInputEmail1">Patients Blood Group</label>
          <div class=" my-3">
          <select name="bsearch" id="inputblood" class="form-control" >
          <option value="" selected> Chose Blood Group</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          </select>
          </div>

          
        <div class="form-group my-3">
          <label for="exampleInputEmail1">Number of Samples</label>
          <input type="number" name="num" class="form-control my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
         </div>
          
         <button type="submit" class="btn btn-block btn-primary mt-4 mb-2">Request</button>
        </form>



     
      </div>

    </div>
  </div>
</div>

