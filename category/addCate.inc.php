<?php

include '../layoutHeader.php'; ?>

<div class="container mt-4 " id="wraperDiv">
    <!-- <form action="/action_page.php"> -->
        <div class="row mt-4">
            <div class="col-25 pl-4">
                <label for="fname">Category Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="cate_name" name="cate_name" placeholder="Add your Category here..">
            </div>
        </div>
        <div class="row">
            <div class="col-25 pl-4">
                <label for="country">Status</label>
            </div>
            <div class="col-75">
                <select id="status" name="status">
                <option value="">Please select one ..</option>
                    <option value="1">1</option>
                    <option value="0">0</option>
                    
                </select>
            </div>

            <p class="pl-4"><input type="submit" class="btn btn-md" name ="submit" onclick = "addCate()"></p>
        </div>
       
            
       
    </form>
</div>
 <?php include '../layoutFooter.php';

?>