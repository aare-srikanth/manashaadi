


<br>

    <div class="del_container">
    <div class="row">
        <div class="col-md-12">
            <button class="btn submit" style="width: 300px; margin-left:390px;">Deleted / Settled Profile</button>
        </div> 
    </div>

            <form>
            <br>
            <div class=" form-group row">                                                    
            <label class="col-form-label col-md-2 offset-md-4"><input checked="checked" type="radio" name="channel" value="thru_outside" id="thru_outside" onclick="showform()">
                    Outside
            </label>

            <label class="col-form-label col-md-2 "><input type="radio" name="channel" value="thru_manashaadi" id="thru_manashaadi" onclick="showform()">
                    Through Manashaadi
            </label>
            </div>
            </form>

<div id="outside">

            <form>

                <div class="form-group row">


                    
                        <label class="col-form-label col-md-2 offset-md-2">
                            Delete Manashaadi ID
                        </label>
                        <div class="col-md-2">
                        <input type="text" name="deleid" class="form-control">
                        </div>
                    
                        <label class="col-form-label col-md-2">
                            Marriage Date
                        </label>    
                        <div class="col-md-2">
                        <input type="date"  name="mdate" class="form-control">
                        </div>
                    
                </div>                  
                
                <br>

                <div class="form-group row">
                    <label class="col-form-label col-md-2 offset-md-2">
                        Surname
                    </label>
                    <div class="col-md-2">
                    <input type="text" name="surname" class="form-control"> 
                    </div>                                         
               
                    <label class="col-form-label col-md-2">
                        Name
                    </label>
                    <div class="col-md-2">
                    <input type="text" name="name" class="form-control">
                    </div>

                </div>                    
                
                 <br>
               
                <div class="form-group row">
                    <label class="col-form-label col-md-2 offset-md-1">
                        <h5>Reason for Deletion</h5>
                    </label>
                    <div class="col-md-3 form-control" style="border:none">
                    <label class="radio-inline "    ><input checked="checked" type="radio" name="reason" value="married" >Married</label>
                    <label class="radio-inline "><input type="radio" name="reason" value="marriagefixed" >Marriage Fixed</label>
                    <label class="radio-inline "><input type="radio" name="reason" value="other" >Other Reasons</label>
                    </div>
                    

               
                    <label class="col-form-label col-md-2">
                       <h5>Deleted by Relation</h5>
                    </label>
                    <div class="col-md-2" > 
                    <select class="form-control" >
                        <option selected="selected">-Select-</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>                          
                    </select>
                    </div>
                </div>
              
                <br>

                <div class="row col-md-4 offset-md-3" >

                    <pre>        </pre>
                        
                    <input type="submit" class="btn btn-warning submit" value="Delete">
                        
                    </input>
                    <pre>  </pre>

                    <button  type="Reset" class="btn btn-link" id="Reset">Reset</button>
                </div>
                    
            </form> 

            <br/>  
</div>



<div id="manashaadi" style="display: none">
            <form>
                    <div class="form-group row">
                    
                        <label class="col-form-label col-md-2 offset-md-2">
                            Bride Manashaadi ID
                        </label>
                        <div class="col-md-2">
                        <input type="text" name="deleid" class="form-control">
                        </div>
                    
                        <label class="col-form-label col-md-2">
                           Groom Manashaadi ID
                        </label>
                        <div class="col-md-2">
                        <input type="text"  name="mdate" class="form-control">
                        </div>
                    
                    </div>                  
                
                    <br>

                <div class="form-group row">
                    <label class="col-form-label col-md-2 offset-md-2">
                        Engagement Date
                    </label>

                    <div class="col-md-2">
                    <input type="date" name="surname" class="form-control"> 
                    </div>                                         
               
                    <label class="col-form-label col-md-2">
                        Marriage Date
                    </label>
                    <div class="col-md-2">
                    <input type="date" name="name" class="form-control">
                    </div>

                </div>                    
                
                    <br>
               
                <div class="form-group row">            

                        <label class="col-form-label col-md-2 offset-md-2">
                           <h5>Narration</h5>
                        </label>
                        <div class="col-md-6">
                        <textarea class="form-control" rows="3">
                        </textarea>
                        </div>
                </div>
              
            <br>

                <div class="row col-md-4 offset-md-3" >

                    <pre>        </pre>
                        
                    <input type="submit" class="btn btn-warning submit" value="Delete">
                        
                    </input>
                    <pre>  </pre>

                    <button  type="Reset" class="btn btn-link" id="Reset">Reset</button>
                </div>
                    
            </form> 
            <br>
            
</div>

</div>


 