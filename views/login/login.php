

    <h1>login</h1>
<hr>



 <div class="col-md-4 col-md-offset-4">
     <div class="col-md-10 col-md-offset-1">
        <img class="img-login" src="<?php echo URL; ?>public/img/img5.png" width="200px" height="200px"></img>
        <br><br>
    </div>
        <form method="post" action="login/run">
            <div class="form-group">
                <!--<label for="inputLogin" class="col-lg-2 control-label">Email</label>-->
                <div class="col-lg-10">
                    <input name="login" type="text" class="form-control" id="inputLogin" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <!--<label for="inputPassword" class="col-lg-2 control-label">Password</label>-->
                <div class="col-lg-10">
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remembre me
                        </label>
                    </div>
                </div>
            </div>		
            <br>
            
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <input type="reset" class="btn btn-default" style="margin: 20px 30px;" value="Cancel">
                    <input name="btn" type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>   
        </form>
</div>
        
        
        