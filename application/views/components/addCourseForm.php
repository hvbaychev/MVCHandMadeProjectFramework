<h2>Add Course Form</h2>
<form action="<?php echo BASEURL;?>/profile/courseStore" method="POST">
    <div class="from-group">
    <input type="text" name="name" class="form-control" placeholder="Course Name ...." value="<?php if(!empty($data['name'])) { echo $data['name']; } ?>">
        <div class="error">
            <?php if($data['nameError']): echo $data['nameError']; endif; ?>
        </div>
    </div>
    <input type="number" name="price" class="form-control" placeholder="Course price ...." value="<?php if(!empty($data['price'])) { echo $data['price']; } ?>">
    <div class="error">
            <?php if($data['priceError']): echo $data['priceError']; endif; ?>
    </div>
    <div class="from-group">
        <select name="quality" class="form-control" value="<?php if(!empty($data['quality'])) { echo $data['quality']; } ?>">
            <option value="">Select Course:</option>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
        </select>
        <div class="error">
            <?php if($data['qualityError']): echo $data['qualityError']; endif; ?>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Add Course" class="btn btn-primary">
    </div>
</form>