<?php

include '../layoutHeader.php'; ?>

<div class="container">
    <form action="/action_page.php">
        <div class="row">
            <div class="col-25">
                <label for="fname">Category Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="cate_name" name="cate_name" placeholder="Add your Category here..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="country">Status</label>
            </div>
            <div class="col-75">
                <select id="status" name="status">
                    <option value="1">1</option>
                    <option value="0">0</option>
                    
                </select>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
 <?php include '../layoutFooter.php';

?>