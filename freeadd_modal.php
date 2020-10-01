
 <div class="modal fade" id="myModal2" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" ><b><center>Submit a free Product Add</center></b></h4>
      </div>
         <div class="modal-body">
           <form method="post" action="freeadd_modal_backend.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="adtitle"> Add Title </label>   
              <input type="text" class ="pp" name="addtitle"  required = "true">
            </div>
           <div class="form-group">
              <label for="addescp">Add Description</label>
              <input type="text" class ="pp1" name="adddescription"  required = "true">
           </div>
           <div class = "form-group categories" >
              <label for="cate">Categories</label>
              <select class="pp2" style="height:35px;" name="selectcategory">
                <option value="categories">Categories</option>
                 <option value="fruits" >Fruits</option>
                 <option value="vegetables" >Vegetables</option>
                 <option value="poultry" >Poultry</option>
                 <option value="spices" >Spices</option>
                 <option value="diary" >Diary</option>
                 <option value="cereals" >Cerals</option>
                 <option value="oilseeds">Oil seeds</option>
                 <option value="livestock" > LiveStock</option>
                 <option value="Millets"> Millets</option>
                 <option value="sugar">Sugar and Starch crops</option>
                 <option value="fibres">Fibres</option>
              </select>
           </div>
           <div class="form-group"><br/>
              <label for="photos">Upload Photos</label>
              <input type ="file" name="image" class="pp3" accept ="image/*" required="true">
           </div>
         
           <div class="form-group">
               <label for="price">Price</label>
               <input type="text"  name="price" class="pp6" required = "true"><br/>
               <input type="checkbox" name="negotiate" class="pp7" value="check" >I will negotiate the price
            </div>
            <div class="form-group">
            Do you want to publish the app?
                          <input type="radio"  name="confirm" value="yes" checked> Yes
                      <input type="radio"  name="confirm" value="no" checked> No</div>
            
            
           
        
            <center> <button type="submit" value="submit" class="btn btn-primary" name="button">Submit</button> </center>
           </form>
         </div>
    </div>
   </div>
 </div>